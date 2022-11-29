<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        // Paginate
        $tasks = \App\Models\Task::paginate(10);
        return view('index', [
            'tasks' => $tasks,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
        ]);

        \App\Models\Task::create([
            'description' => $request->description,
        ]);

        return redirect('/');
    }

    public function update(Request $request)
    {
        $task = \App\Models\Task::findOrFail($request->id);
        $task->is_completed = $task->is_completed ? 0 : 1;
        $task->save();

        return redirect('/');
    }

    public function destroy(Request $request)
    {
        $task = \App\Models\Task::findOrFail($request->id);
        $task->delete();

        return redirect('/');
    }

    public function edit(Request $request)
    {
        return view('edit', [
            'task' => \App\Models\Task::findOrFail($request->id),
        ]);
    }

    public function updateTask(Request $request)
    {
        $request->validate([
            'description' => 'required',
        ]);

        $task = \App\Models\Task::findOrFail($request->id);
        $task->is_completed = $request->completed ? 1 : 0;
        $task->description = $request->description;
        $task->save();

        return redirect('/');
    }
}