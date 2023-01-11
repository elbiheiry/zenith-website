<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\IContentRequest;
use App\Http\Requests\IpadRequest;
use App\Models\IContent;
use App\Repositories\IContentRepository;
use App\Repositories\IpadRepository;
use Illuminate\Http\Request;

class IpadController extends Controller
{
    public $iContentRepository , $ipadRepository;

    public function __construct(IContentRepository $iContentRepository , IpadRepository $ipadRepository)
    {
        $this->iContentRepository = $iContentRepository;
        $this->ipadRepository = $ipadRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = $this->iContentRepository->list();
        $ipad = $this->ipadRepository->show();

        return view('admin.pages.ipad.index' , compact('contents' , 'ipad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProcessRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IContentRequest $request)
    {
        try {
            $this->iContentRepository->create($request);

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
        $content = $this->iContentRepository->showById($id);
        return view('admin.pages.ipad.edit' ,compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  IContentRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IContentRequest $request, $id)
    {
        try {
            $this->iContentRepository->edit($request , $id);

            return update_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  IpadRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update2(IpadRequest $request)
    {
        try {
            $this->ipadRepository->edit($request);

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
        IContent::findOrFail($id)->delete();

        return redirect()->back();
    }
}
