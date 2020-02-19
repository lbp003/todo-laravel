@extends('layouts/app')

@section('title')
    Create Todo
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h1 class="text-center">Create Todo</h1>
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
                <form action="/store-todo" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea type="text" name="description" class="form-control" id="description" placeholder="Description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div> 
        </div>
    </div>
@endsection
       
