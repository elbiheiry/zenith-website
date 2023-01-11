<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\JamfContentRequest;
use App\Http\Requests\JamfStepRequest;
use App\Models\JamfStep;
use App\Repositories\JamfContentRepository;
use App\Repositories\JamfStepRepository;
use Illuminate\Http\Request;

class JamfController extends Controller
{
    public $jamfContentRepository , $jamfStepRepository;

    public function __construct(JamfContentRepository $jamfContentRepository , JamfStepRepository $jamfStepRepository)
    {
        $this->jamfContentRepository = $jamfContentRepository;
        $this->jamfStepRepository = $jamfStepRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $steps = $this->jamfStepRepository->list();
        $content = $this->jamfContentRepository->show();

        return view('admin.pages.jamf.index' , compact('content' , 'steps'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  JamfStepRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JamfStepRequest $request)
    {
        try {
            $this->jamfStepRepository->create($request);

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
        $content = $this->jamfStepRepository->showById($id);
        return view('admin.pages.jamf.edit' ,compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  JamfStepRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JamfStepRequest $request, $id)
    {
        try {
            $this->jamfStepRepository->edit($request , $id);

            return update_response();
        } catch (\Throwable $th) {
            return error_response();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  JamfContentRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update2(JamfContentRequest $request)
    {
        try {
            $this->jamfContentRepository->edit($request);

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
        JamfStep::findOrFail($id)->delete();

        return redirect()->back();
    }
}
