@extends('layouts.app')

@section('title','the list of tast')

@section('content')
     <div>
    <a href="{{ route('tasks.create') }}">Add Task!</a>
  </div>
    @forelse ($tasks as $task)
    <div>
      <a href="{{ route('tasks.show', ['task' => $task->id]) }}">{{ $task->title }}</a>
    </div>
  @empty
    <div>There are no tasks!</div>
  @endforelse
  <!--make the next and previous buttton show -->
  @if ($tasks-> count())
  <div>
  {{$tasks->links() }}
  </div>

  @endif
@endsection


