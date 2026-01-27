<h1>My Tasks</h1>

<ul>
    @foreach ($tasks as $task)
        <li>{{ $task->title }}</li>
        <li>{{ $task->description}}</li>
        <li>{{ $task->priority}}</li>
    @endforeach
</ul>
