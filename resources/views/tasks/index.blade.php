<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>📋 Personal Task Manager</h1>

        <a href="{{ route('tasks.create') }}" class="btn btn-primary">
            + Add Task
        </a>
    </div>

    <div class="card shadow">
        <div class="card-body">

            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Task</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Due Date</th>
                        <th width="180">Actions</th>
                    </tr>
                </thead>

                <tbody>
                @forelse($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->task_name }}</td>
                        <td>{{ $task->description }}</td>

                        <td>
                            @if($task->status == 'Completed')
                                <span class="badge bg-success">
                                    Completed
                                </span>
                            @else
                                <span class="badge bg-warning text-dark">
                                    Pending
                                </span>
                            @endif
                        </td>

                        <td>{{ $task->due_date }}</td>

                        <td>
                            <a href="{{ route('tasks.edit', $task->id) }}"
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('tasks.destroy', $task->id) }}"
                                  method="POST"
                                  style="display:inline;">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">
                            No tasks found
                        </td>
                    </tr>
                @endforelse
                </tbody>

            </table>

        </div>
    </div>

</div>

</body>
</html>