<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MContentRequest;
use App\Http\Requests\MacRequest;
use App\Models\MContent;
use App\Repositories\MContentRepository;
use App\Repositories\MacRepository;
use Illuminate\Http\Request;

class MacController extends Controller
{
    public $mContentRepository , $macRepository;

    public function __construct(MContentRepository $mContentRepository , MacRepository $macRepository)
    {
        $this->mContentRepository = $mContentRepository;
        $this->macRepository = $macRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = $this->mContentRepository->list();
        $mac = $this->macRepository->show();

        return view('admin.pages.mac.index' , compact('contents' , 'mac'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  MContentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MContentRequest $request)
    {
        try {
            $this->mContentRepository->create($request);

            return add_response();
        } catch (\Throwable $th) {
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
        $content = $this->mContentRepository->showById($id);
        return view('admin.pages.mac.edit' ,compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  MContentRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MContentRequest $request, $id)
    {
        try {
            $this->mContentRepository->edit($request , $id);

            return update_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  MacRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update2(MacRequest $request)
    {
        try {
            $this->macRepository->edit($request);

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
        MContent::findOrFail($id)->delete();

        return redirect()->back();
    }
}
