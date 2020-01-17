




@extends('tasks.layout')

@section('content')

<div class="jumbotron text-center">
    <h1 class="display-4">Welcome to Our TodoApp</h1>
    <p class="lead">This is a simple TodoApp is developed by Lalit.</p>
  
</div>


<div class="container">
 <!-- //validation errors here -->
 @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            

            <h2 class="display-5">Edit task</h2>
<form action="/tasks/{{$task->id}}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
    <input class="form-control" type="text" name="name" value="{{$task->name}}">
</div>
<div class="form-group">
    <input class="form-control" type="text" name="discription" value="{{$task->discription}}">
</div>

    <input class="btn btn-danger" type="submit" value="submit">
</form>

                @endsection()