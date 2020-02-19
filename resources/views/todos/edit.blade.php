@extends('layouts/app')

@section('title')
    Edit Todo
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h1 class="text-center">Edit Todo</h1>
            </div>
            <div class="col-8 card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/{{ $todo->id }}/update-todo" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ $todo->name }}">
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea type="text" name="description" class="form-control" id="description" placeholder="Description" rows="5">{{ $todo->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
            </div> 
        </div>
    </div>
@endsection
       
