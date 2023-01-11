<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProcessRequest;
use App\Models\Process;
use App\Repositories\ProcessRepository;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    public $processRepository;

    public function __construct(ProcessRepository $processRepository)
    {
        $this->processRepository = $processRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $processes = $this->processRepository->list();

        return view('admin.pages.processes.index' , compact('processes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProcessRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProcessRequest $request)
    {
        try {
            $this->processRepository->create($request);

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
        $process = $this->processRepository->showById($id);
        return view('admin.pages.processes.edit' ,compact('process'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProcessRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProcessRequest $request, $id)
    {
        try {
            $this->processRepository->edit($request , $id);

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
        Process::findOrFail($id)->delete();

        return redirect()->back();
    }
}
