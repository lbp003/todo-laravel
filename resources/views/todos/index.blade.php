@extends('layouts/app')

@section('title')
    Todo List
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h1 class="text-center">ToDos</h1>
            </div>
            <div class="col-8 card-body">
                <ul class="list-group">
                    @foreach ($todos as $todo)
                        <li class="list-group-item">{{ $todo->name }}
                            @if(!$todo->completed)
                                <a class="btn btn-warning btn-sm float-right ml-2" href="todos/{{ $todo->id }}/complete">Complate</a>
                            @endif
                            <a class="btn btn-primary btn-sm float-right" href="todos/{{ $todo->id }}">View</a>
                        </li>   
                    @endforeach
                </ul>
            </div> 
        </div>
    </div>
@endsection
       
