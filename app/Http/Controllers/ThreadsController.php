<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;
use App\Http\Requests\ThreadsRequest;
    
class ThreadsController extends Controller
{
    public function index(Request $request) {
        $threads = Thread::latest()->get();
        return view('thread-top')->with('threads', $threads);
    }

    
    public function create(Request $request) {

        return view('thread-create')->with('user_id', '111');
    }

    public function save(ThreadsRequest $request) {
        $thread = new Thread();
        $thread->title = $request->thread_title;
        //$thread->user_id = 1;
        $thread->category_id = 100;
        $thread->save();
        return redirect('/');
    }

    public function confirm(Thread $thread) {
        return view('thread-confirm')->with('thread', $thread);
    }

    public function delete(Request $request) {
        $thread = Thread::findOrFail($request->id);
        Thread::destroy($thread->id);
        return redirect('/');
    }

    public function content(Request $request) {
        $thread_id = $request->thread_id;
        $threads = Thread::latest()->get();
        return view('thread-content')->with([
            'threads' => $threads,
            'thread_id' => $thread_id]);
    }
}
