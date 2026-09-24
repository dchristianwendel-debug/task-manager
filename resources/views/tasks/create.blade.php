<!DOCTYPE html>
<html>
<head>
    <title>Add Task</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h3>Add New Task</h3>
        </div>

        <div class="card-body">

            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Task Name</label>
                    <input type="text"
                           name="task_name"
                           class="form-control"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description"
                              class="form-control"
                              rows="4"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select">
                        <option value="Pending">Pending</option>
                        <option value="Completed">Completed</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Due Date</label>
                    <input type="date"
                           name="due_date"
                           class="form-control">
                </div>

                <button type="submit" class="btn btn-success">
                    Save Task
                </button>

                <a href="{{ route('tasks.index') }}"
                   class="btn btn-secondary">
                    Back
                </a>

            </form>

        </div>
    </div>

</div>

</body>
</html>