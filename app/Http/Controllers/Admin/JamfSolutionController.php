<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\JamfSolutionRequest;
use App\Models\JamfSolution;
use App\Repositories\JamfSolutionRepository;
use Illuminate\Http\Request;

class JamfSolutionController extends Controller
{
    public $jamfSolutionRepository;

    public function __construct(JamfSolutionRepository $jamfSolutionRepository)
    {
        $this->jamfSolutionRepository = $jamfSolutionRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = $this->jamfSolutionRepository->list();

        return view('admin.pages.jamf.solutions.index' , compact('contents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  JamfSolutionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JamfSolutionRequest $request)
    {
        try {
            $this->jamfSolutionRepository->create($request);

            return add_response();
        } catch (\Throwable $th) {
            dd($th->getMessage());
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
        $content = $this->jamfSolutionRepository->showById($id);
        return view('admin.pages.jamf.solutions.edit' ,compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  JamfSolutionRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JamfSolutionRequest $request, $id)
    {
        try {
            $this->jamfSolutionRepository->edit($request , $id);

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
        JamfSolution::findOrFail($id)->delete();

        return redirect()->back();
    }
}
