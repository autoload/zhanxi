<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>任务列表</h1>
<ul>
    @foreach ($cTasks as $task)
        <li>
            <a href="/tasks/{{ $task->id }}">{{ $task->name }}</a>
        </li>
    @endforeach
</ul>
<h1>任务列表</h1>
<ul>
    @foreach ($uTasks as $task)
        <li>
            <a href="/tasks/{{ $task->id }}">{{ $task->name }}</a>
        </li>
    @endforeach
</ul>
</body>
</html>