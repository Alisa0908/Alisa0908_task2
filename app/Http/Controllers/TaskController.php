<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function show($id)   
    {
        $task = Task::find($id);
        return view('tasks.show', compact('task'));
    }

    public function store(Request $request)
    {
        $task = new Task;

        $task->title = $request->title;
        $task->body = $request->body;

        $task->save();
        return redirect('/tasks');
    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $task = Task::find($id);

        $task->title = $request->title;
        $task->body = $request->body;
        $task->save();

        return redirect('/tasks');
    }

    public function destroy($id)    
    {
        $task = Task::find($id);
        $task->delete();

        return redirect('/tasks');
    }
}
