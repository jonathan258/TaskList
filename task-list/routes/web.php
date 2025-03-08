<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;


//route that directs the default http to the home page
Route::get('/', function () {
   return redirect()->route('tasks.index');
});

//Route to show all task
Route::get('/tasks', function () {
    return view('index',[
         'tasks' => \App\Models\Task::latest()->get()
]);
})->name('tasks.index');


Route::view('/tasks/create','create')
          ->name('task.create');

//Route to show a single task
Route::get('/{id}', function($id)  {
    return view('show',['task' => \App\Models\Task::findOrFail($id)]);

})->name('task.show');

Route::post('/tasks',function(Request $request) {
    dd($request->all());
})->name('tasks.store');
