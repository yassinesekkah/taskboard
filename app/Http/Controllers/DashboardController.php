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

        $tasksByStatus = [
            'todo' => Task::forUser($user)->where('status', 'todo')->count(),
            'in_progress' => Task::forUser($user)->inProgress()->count(),
            'done' => Task::forUser($user)->completed()->count(),
        ];

        $tasksByPriority = [
            'low' => Task::forUser($user)->where('priority', 'low')->count(),
            'medium' => Task::forUser($user)->where('priority', 'medium')->count(),
            'high' => Task::forUser($user)->where('priority', 'high')->count(),
        ];

        return view('dashboard', compact(
            'totalTasks',
            'completedTasks',
            'inProgressTasks',
            'overdueTasks',
            'recentTasks',
            'tasksByStatus',
            'tasksByPriority',
        ));
    }
}
