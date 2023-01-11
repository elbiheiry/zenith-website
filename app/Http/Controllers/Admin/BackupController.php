<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BackupRequest;
use App\Models\Backup;
use App\Repositories\BackupRepository;
use Illuminate\Http\Request;

class BackupController extends Controller
{
    public $backupRepository;

    public function __construct(BackupRepository $backupRepository)
    {
        $this->backupRepository = $backupRepository;
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $backups = $this->backupRepository->list();

        return view('admin.pages.backups.index' , compact('backups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  BackupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BackupRequest $request)
    {
        try {
            $this->backupRepository->create($request);

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
        $backup = $this->backupRepository->showById($id);
        return view('admin.pages.backups.edit' ,compact('backup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  BackupRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BackupRequest $request, $id)
    {
        try {
            $this->backupRepository->edit($request , $id);

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
        Backup::findOrFail($id)->delete();

        return redirect()->back();
    }
}
