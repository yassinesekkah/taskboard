<?php

namespace App\Http\Controllers;


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
}
