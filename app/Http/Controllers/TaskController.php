<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Request;

class TaskController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $tasks = [
            'todo' => $user->tasks()
                ->where('status', 'todo')
                ->orderBy('deadline')
                ->paginate(5, ['*'], 'todo'),

            'doing' => $user->tasks()
                ->where('status', 'in_progress')
                ->orderBy('deadline')
                ->paginate(5, ['*'], 'doing'),

            'done' => $user->tasks()
                ->where('status', 'done')
                ->orderBy('deadline')
                ->paginate(5, ['*'], 'done'),
        ];

        return view('tasks.board', compact('tasks'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "title" => 'required|string|max:255',
            "description" => 'nullable|string|max:255',
            "priority" => 'required|in:low,meduim,high',
            "deadline" => 'nullable|date'
        ]);
        try{
            auth()->user()->tasks()->create([
                "title" => $validated['title'],
                "description" => $validated['description']?? null,
                "priority" =>  $validated['priority'],
                "deadline" =>  $validated['deadline']?? null,
                "statue" => 'todo' // default dyalo 
            ]);

            return redirect()
            ->route('tasks')
            ->with('success', 'Task created successfully');

        }catch(\Exception $e){
            return back()
                ->with("error", 'Failed to create task');
        }
    }
}

