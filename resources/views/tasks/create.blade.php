<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        Create New Task
    </h1>

    <form action="/tasks/store" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}">
            @error('title')
                <div>{{ $message }}</div>
            @enderror
        </div><br>

        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description">{{ old('description') }}</textarea>
            @error('description')
                <div>{{ $message }}</div>
            @enderror
        </div><br>

        <div>
            <label for="sheduled_date">Scheduled Date:</label>
            <input type="date" name="scheduled_date" id="scheduled_date" value="{{ old('scheduled_date') }}">
            @error('scheduled_date')
                <div>{{ $message }}</div>
            @enderror
        </div><br>

        <div>
             <label for="start_time">Start Date:</label>
            <input type="time" name="start_time" id="start_time" value="{{ old('start_time') }}">
            @error('start_time')
                <div>{{ $message }}</div>
            @enderror
        </div><vr><br>

        <div>
             <label for="reminder_time">Reminder Date:</label>
            <input type="time" name="reminder_time" id="reminder_time" value="{{ old('reminder_time') }}">
            @error('reminder_time')
                <div>{{ $message }}</div>
            @enderror
        </div><br>



        <button type="submit">Create Task</button>

    </form>
</body>
</html>
