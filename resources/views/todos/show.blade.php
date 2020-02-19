@extends('layouts/app')

@section('title')
    {{ $todo->name }}
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h1 class="text-center">ToDo</h1>
            </div>
            <div class="col-8 card-body">
                <h3>Details</h3>
                <h5><b>{{ $todo->name }}</b></h5>
                <p>{{ $todo->description }}</p>
                <a class="btn btn-primary btn-sm float-right" href="/todos/{{ $todo->id }}/edit">Edit</a>
                <a class="btn btn-danger btn-sm float-left" href="/todos/{{ $todo->id }}/delete">Delete</a>
            </div> 
        </div>
    </div>
@endsection
        