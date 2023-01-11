<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WhyRequest;
use App\Models\Why;
use App\Repositories\WhyRepository;
use Illuminate\Http\Request;

class WhyController extends Controller
{
    public $whyRepository;

    public function __construct(WhyRepository $whyRepository)
    {
        $this->whyRepository = $whyRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->whyRepository->list();

        return view('admin.pages.why.index' , compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  WhyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WhyRequest $request)
    {
        try {
            $this->whyRepository->create($request);

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
        $data = $this->whyRepository->showById($id);
        return view('admin.pages.why.edit' ,compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  WhyRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WhyRequest $request, $id)
    {
        try {
            $this->whyRepository->edit($request , $id);

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
        Why::findOrFail($id)->delete();

        return redirect()->back();
    }
}
