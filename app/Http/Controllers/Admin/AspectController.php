<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AspectLogoRequest;
use App\Http\Requests\AspectRequest;
use App\Models\Aspect;
use App\Repositories\AspectLogoRepository;
use App\Repositories\AspectRepository;
use Illuminate\Http\Request;

class AspectController extends Controller
{
    public $aspectRepository , $aspectLogoRepository;

    public function __construct(AspectRepository $aspectRepository , AspectLogoRepository $aspectLogoRepository)
    {
        $this->aspectRepository = $aspectRepository;
        $this->aspectLogoRepository = $aspectLogoRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = $this->aspectRepository->show();
        $images = $this->aspectLogoRepository->list();

        return view('admin.pages.aspects.index' , compact('content' , 'images'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AspectLogoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AspectLogoRequest $request)
    {
        try {
            $this->aspectLogoRepository->create($request);

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
        $image = $this->aspectLogoRepository->showById($id);
        return view('admin.pages.aspects.edit' ,compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AspectLogoRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AspectLogoRequest $request, $id)
    {
        try {
            $this->aspectLogoRepository->edit($request , $id);

            return update_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AspectRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update2(AspectRequest $request)
    {
        try {
            $this->aspectRepository->edit($request);

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
        Aspect::findOrFail($id)->delete();

        return redirect()->back();
    }
}
