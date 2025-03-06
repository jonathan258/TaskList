@extends('layouts.app')

@section('title','the list of tast')

@section('content')

    @forelse ($tasks as $task)
    <div>
      <a href="{{ route('task.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
    </div>
  @empty
    <div>There are no tasks!</div>
  @endforelse
@endsection


