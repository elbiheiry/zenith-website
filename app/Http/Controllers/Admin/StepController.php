<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StepRequest;
use App\Models\Step;
use App\Repositories\StepRepository;
use Illuminate\Http\Request;

class StepController extends Controller
{
    public $stepRepository;

    public function __construct(StepRepository $stepRepository)
    {
        $this->stepRepository = $stepRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $steps = $this->stepRepository->list();

        return view('admin.pages.steps.index' , compact('steps'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StepRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StepRequest $request)
    {
        try {
            $this->stepRepository->create($request);

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
        $step = $this->stepRepository->showById($id);
        return view('admin.pages.steps.edit' ,compact('step'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StepRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StepRequest $request, $id)
    {
        try {
            $this->stepRepository->edit($request , $id);

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
        Step::findOrFail($id)->delete();

        return redirect()->back();
    }
}
