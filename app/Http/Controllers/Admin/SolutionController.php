<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SolutionRequest;
use App\Models\Solution;
use App\Repositories\SolutionRepository;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    public $solutionRepository;

    public function __construct(SolutionRepository $solutionRepository)
    {
        $this->solutionRepository = $solutionRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solutions = $this->solutionRepository->list();

        return view('admin.pages.solutions.index' , compact('solutions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SolutionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SolutionRequest $request)
    {
        try {
            $this->solutionRepository->create($request);

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
        $solution = $this->solutionRepository->showById($id);
        return view('admin.pages.solutions.edit' ,compact('solution'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SolutionRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SolutionRequest $request, $id)
    {
        try {
            $this->solutionRepository->edit($request , $id);

            return update_response();
        } catch (\Throwable $th) {
            dd($th->getMessage());
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
        Solution::findOrFail($id)->delete();

        return redirect()->back();
    }
}
