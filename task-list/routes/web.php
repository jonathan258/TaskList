<?php

use App\Http\Requests\TaskRequest;
use \App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

// Redirect home to the tasks index page
Route::get('/', function () {
    return redirect()->route('tasks.index');
});

// Route to show all tasks
Route::get('/tasks', function () {
    return view('index', [
        'tasks' => Task::latest()->paginate(10)
    ]);
})->name('tasks.index');

// Route to show the create task form
Route::view('/tasks/create', 'create')
->name('tasks.create');

// Route to show the edit task form
Route::get('/tasks/{task}/edit', function (Task $task) {
    return view('edit', ['task' => $task]);
})->name('tasks.edit');

// Route to show a single task
Route::get('/tasks/{task}', function (Task $task) {
    return view('show', ['task' => $task]);
})->name('tasks.show');

// Route to store a new task
Route::post('/tasks', function (TaskRequest $request) {
    $task =Task::create($request->validated());
    // Redirect to the correct route name
    return redirect()->route('tasks.show', ['id' => $task->id])
        ->with('success', 'Task created successfully!');
})->name('tasks.store');

// Route to update a task
Route::put('/tasks/{task}', function (Task $task, TaskRequest $request) {

    $task->update(   $data = $request->validated());

    return redirect()->route('tasks.show', $task)
    ->with('success', 'Task updated successfully!');
})->name('tasks.update');

//remove recod from the db
Route::delete('/task/{task}', function (Task $task) {
    $task->delete();

    return redirect()->route('tasks.index', $task)
    ->with('success','Task deleted successfully!');
})->name('task.destroy');

//when the task is completed
// Route to toggle task completion
Route::put('tasks/{task}/toggle-complete', function (Task $task) {
    $task->toggleComplete();

    return redirect()->back()->with('success', 'Task updated successfully!');
})->name('tasks.toggle-complete');  // Add the name here
