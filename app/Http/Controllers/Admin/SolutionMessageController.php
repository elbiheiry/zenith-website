<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SolutionMessage;
use App\Repositories\SolutionMessageRepository;
use Illuminate\Http\Request;

class SolutionMessageController extends Controller
{
    public $messageRepository;

    public function __construct(SolutionMessageRepository $messageRepository)
    {
        $this->messageRepository =$messageRepository;
    }

    public function index(Request $request)
    {
        $messages = $this->messageRepository->list();

        if ($request->ajax()) {
            $messages = $this->messageRepository->listAjax($request);

            return view( 'admin.pages.messages.templates.messages', compact( 'messages' ) );
        }

        return view('admin.pages.solution_messages.index' ,compact('messages'));
    }

    public function show($id)
    {
        $message = SolutionMessage::findOrFail($id);
        $data = $this->messageRepository->showById($message);
        
        return view('admin.pages.solution_messages.show' ,compact('data'));
    }

    public function destroy($id)
    {
        $message = SolutionMessage::findOrFail($id);
        $message->delete();

        return redirect()->route('admin.solution_message.index');
    }
}
