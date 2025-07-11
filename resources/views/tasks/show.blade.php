<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ $task->title }}</h1>
    <p>Status: {{ $task->is_completed ? "Complete" : "Incomplete" }}</p>
    <p>Description</p>
    <p>{{ $task->description }}</p>
</body>
</html>
