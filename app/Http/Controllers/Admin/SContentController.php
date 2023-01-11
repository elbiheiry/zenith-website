<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SContentRequest;
use App\Models\SContent;
use App\Repositories\SContentRepository;
use Illuminate\Http\Request;

class SContentController extends Controller
{
    public $SContentRepository;

    public function __construct(SContentRepository $SContentRepository)
    {
        $this->SContentRepository = $SContentRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $contents = $this->SContentRepository->list($id);

        return view('admin.pages.solutions.content.index' , compact('contents' , 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SContentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SContentRequest $request , $id)
    {
        try {
            $request['solution_id'] = $id;
            $this->SContentRepository->create($request);

            return add_response();
        } catch (\Throwable $th) {
            // dd($th->getMessage());
            return error_response();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $content = $this->SContentRepository->showById($id);
        return view('admin.pages.solutions.content.edit' ,compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SContentRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SContentRequest $request, $id)
    {
        try {
            $this->SContentRepository->edit($request , $id);

            return update_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SContent::findOrFail($id)->delete();

        return redirect()->back();
    }
}
