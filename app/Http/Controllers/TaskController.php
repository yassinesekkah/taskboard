<?php

namespace App\Http\Controllers;


class TaskController extends Controller
{
    public function index()
    {

        $tasks = auth()->user()
            ->tasks()
            ->orderBy('deadline')
            ->paginate(10);
        
        //  dd($tasks);

        return view('tasks.board', compact('tasks'));
    }
}
