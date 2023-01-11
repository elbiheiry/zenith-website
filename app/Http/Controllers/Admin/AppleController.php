<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppleRequest;
use App\Http\Requests\AppleContentRequest;
use App\Models\Apple;
use App\Repositories\AppleContentRepository;
use App\Repositories\AppleRepository;
use Illuminate\Http\Request;

class AppleController extends Controller
{
    public $appleContentRepository , $appleRepository;

    public function __construct(AppleContentRepository $appleContentRepository , AppleRepository $appleRepository)
    {
        $this->appleContentRepository = $appleContentRepository;
        $this->appleRepository = $appleRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = $this->appleRepository->list();
        $apple = $this->appleContentRepository->show();

        return view('admin.pages.apple.index' , compact('contents' , 'apple'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AppleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AppleRequest $request)
    {
        try {
            $this->appleRepository->create($request);

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
        $content = $this->appleRepository->showById($id);
        return view('admin.pages.apple.edit' ,compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AppleRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AppleRequest $request, $id)
    {
        try {
            $this->appleRepository->edit($request , $id);

            return update_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AppleContentRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update2(AppleContentRequest $request)
    {
        try {
            $this->appleContentRepository->edit($request);

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
        Apple::findOrFail($id)->delete();

        return redirect()->back();
    }
}
