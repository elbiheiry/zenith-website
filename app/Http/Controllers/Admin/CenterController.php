<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CenterRequest;
use App\Models\Center;
use App\Repositories\CenterRepository;
use Illuminate\Http\Request;

class CenterController extends Controller
{
    public $centerRepository;

    public function __construct(CenterRepository $centerRepository)
    {
        $this->centerRepository = $centerRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centers = $this->centerRepository->list();

        return view('admin.pages.centers.index' , compact('centers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CenterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CenterRequest $request)
    {
        try {
            $this->centerRepository->create($request);

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
        $center = $this->centerRepository->showById($id);
        return view('admin.pages.centers.edit' ,compact('center'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CenterRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CenterRequest $request, $id)
    {
        try {
            $this->centerRepository->edit($request , $id);

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
        Center::findOrFail($id)->delete();

        return redirect()->back();
    }
}
