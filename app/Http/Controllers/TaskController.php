<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function show($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.show', compact('task'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|min:3|max:255|unique:tasks',
            'description' => 'nullable|max:500',
        ]);

        $task = new Task();
        $task->title = $validateData['title'];
        $task->description = $validateData['description'];
        $task->is_completed = false;
        $task->save();

        return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
    }
}
