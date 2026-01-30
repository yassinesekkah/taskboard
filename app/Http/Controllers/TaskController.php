<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Symfony\Component\HttpFoundation\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();
         ///search
        $search = $request->query('search');

        $tasks = [
            'todo' => $user->tasks()
                ->where('status', 'todo')
                ///search
                ->search($search)
                ->orderBy('deadline')
                ->paginate(5, ['*'], 'todo'),

            'doing' => $user->tasks()
                ->where('status', 'in_progress')
                ///search
                ->search($search)
                ->orderBy('deadline')
                ->paginate(5, ['*'], 'doing'),

            'done' => $user->tasks()
                ->where('status', 'done')
                ///search
                ->search($search)
                ->orderBy('deadline')
                ->paginate(5, ['*'], 'done'),
        ];

        return view('tasks.board', compact('tasks'));
    }

    public function store(Request $request)
    {

        try {
            $validated = $request->validate([
                "title" => 'required|string|max:255',
                "description" => 'nullable|string|max:255',
                "priority" => 'required|in:low,medium,high',
                "deadline" => 'nullable|date'
            ]);

            auth()->user()->tasks()->create([
                "title" => $validated['title'],
                "description" => $validated['description'] ?? null,
                "priority" =>  $validated['priority'],
                "deadline" =>  $validated['deadline'] ?? null,
                "status" => 'todo' // default dyalo 
            ]);

            return redirect()
                ->route('tasks')
                ->with('success', 'Task created successfully');
        } catch (\Exception $e) {
            return back()
                ->with("error", 'Failed to create task');
        }
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        try {
            $validated = $request->validate([
                "title" => 'required|string|max:255',
                "description" => 'nullable|string|max:255',
                "priority" => 'required|in:low,medium,high',
                "deadline" => 'nullable|date'
            ]);

            if ($task->user_id !== auth()->id()) {
                abort(403);
            }

            $task->update([
                "title" => $validated['title'],
                "description" => $validated['description'] ?? null,
                "priority" =>  $validated['priority'],
                "deadline" =>  $validated['deadline'] ?? null,
            ]);

            return redirect()
                ->route('tasks')
                ->with('success', 'Task updated successfully');
        } catch (\Exception $e) {
            return back()
                ->with("error", 'Failed to update task');
        }
    }

    public function updateStatus(Request $request, Task $task)
    {
        if ($task->user_id !== auth()->id()) {
            abort(403);
        }

        $validated = $request->validate([
            'status' => 'required|in:todo,in_progress,done',
        ]);

        $task->update([
            'status' => $validated['status'],
        ]);

        return back()->with('success', 'status updated successfully');
    }

    public function destroy(Task $task)
    {
        if ($task->user_id !== auth()->id()){
            abort(403);
        }

        $task->delete();

        return back()->with('success', 'Task deleted successfully');
    }

    public function indexBacklog(Request $request)
    {   
        $search = $request->search;
        $priority = $request->priority;

        $tasks = auth()->user()
                        ->tasks()
                        ->search($search)
                        ->priority($priority)
                        ->orderBy('created_at', 'desc')
                        ->paginate(10);

        return view('tasks.backlog', compact('tasks'));
    }
}
