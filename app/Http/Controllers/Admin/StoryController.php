<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoryRequest;
use App\Models\Story;
use App\Repositories\StoryRepository;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public $storyRepository;

    public function __construct(StoryRepository $storyRepository)
    {
        $this->storyRepository = $storyRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories = $this->storyRepository->list();

        return view('admin.pages.stories.index' , compact('stories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoryRequest $request)
    {
        try {
            $this->storyRepository->create($request);

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
        $story = $this->storyRepository->showById($id);
        return view('admin.pages.stories.edit' ,compact('story'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StoryRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoryRequest $request, $id)
    {
        try {
            $this->storyRepository->edit($request , $id);

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
        Story::findOrFail($id)->delete();

        return redirect()->back();
    }
}
