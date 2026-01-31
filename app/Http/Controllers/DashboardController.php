<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $totalTasks = Task::forUser($user)->count();

        $completedTasks = Task::forUser($user)->completed()->count();

        $inProgressTasks = Task::forUser($user)->inProgress()->count();
        
        $overdueTasks = Task::forUser($user)->overdue()->count();
        
        $recentTasks = Task::forUser($user)->recent()->get();

        return view('dashboard', compact(
            'totalTasks',
            'completedTasks',
            'inProgressTasks',
            'overdueTasks',
            'recentTasks',
        ));
    }
}
