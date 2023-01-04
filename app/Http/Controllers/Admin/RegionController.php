<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegionRequest;
use App\Models\Region;
use App\Repositories\RegionRepository;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public $regionRepository;

    public function __construct(RegionRepository $regionRepository)
    {
        $this->regionRepository = $regionRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = $this->regionRepository->list();

        return view('admin.pages.regions.index' , compact('regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  RegionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegionRequest $request)
    {
        try {
            $this->regionRepository->create($request);

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
        $region = $this->regionRepository->showById($id);
        return view('admin.pages.regions.edit' ,compact('region'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  RegionRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RegionRequest $request, $id)
    {
        try {
            $this->regionRepository->edit($request , $id);

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
        Region::findOrFail($id)->delete();

        return redirect()->back();
    }
}
