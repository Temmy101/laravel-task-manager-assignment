<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task List</title>
</head>
<body>
    <h1>Tasks</h1>
    <ul> 


        @if (session('success'))
            <div style="color: green;">
                {{ session('success') }}
            </div>

        @endif

        @foreach ($tasks as $task)
            <li>
                <a href="/tasks/{{ $task['id'] }}">
                    {{ $task->title }}
                </a>



                <p>{{ $task->description }}</p>
                <p>Status: {{ $task->is_completed ? "Complete" : "Incomplete" }}</p>

              @if (!$task->is_completed)
                <form action="{{ route('tasks.complete', $task) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit">Mark Complete</button>
                </form>

             @endif

            </li>

        @endforeach

    </ul>
</body>
</html>
