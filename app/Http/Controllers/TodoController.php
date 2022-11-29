<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Task;
use Illuminate\Support\Facades\Redirect;

class TodoController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'desc')->paginate(10);
        return view('index', [
            'tasks' => $tasks,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
        ]);

        Task::create([
            'description' => $request->description,
        ]);

        return redirect('/');
    }

    public function update(Request $request)
    {
        $task = Task::findOrFail($request->id);
        $task->is_completed = $task->is_completed ? 0 : 1;
        $task->save();

        return redirect(Redirect::back()->getTargetUrl());
    }

    public function destroy(Request $request)
    {
        $task = Task::findOrFail($request->id);
        $task->delete();

        return redirect(Redirect::back()->getTargetUrl());
    }

    public function edit(Request $request)
    {
        return view('edit', [
            'task' => Task::findOrFail($request->id),
        ]);
    }

    public function updateTask(Request $request)
    {
        $request->validate([
            'description' => 'required',
        ]);

        $task = Task::findOrFail($request->id);
        $task->is_completed = $request->completed ? 1 : 0;
        $task->description = $request->description;
        $task->save();

        return redirect('/');
    }
}