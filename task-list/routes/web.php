<?php
use \App\Models\Task;
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
         'tasks' => Task::latest()->get()
]);
})->name('tasks.index');


Route::view('/tasks/create','create')
          ->name('task.create');

//Route to show a single task
Route::get('/{id}', function($id)  {
    return view('show',['task' => Task::findOrFail($id)]);

})->name('task.show');

Route::post('/tasks',function(Request $request) {
   $data= $request ->validate([
    'title'=> 'required|max:255',
    'description'=> 'required',
    'long_description'=>'required'
   ]);

   $task = new Task;
   $task -> title = $data['title'];
   $task -> description = $data['description'];
   $task -> long_description = $data['long_description'];

   $task ->save();

   return redirect() -> route('task.show',['id'=> $task->id])
   ->with('success','Task created successfully!') ;
})->name('tasks.store');
