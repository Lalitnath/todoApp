@extends('tasks.layout')

@section('content')

<div class="jumbotron text-center">
    <h1 class="display-4">Welcome to Our TodoApp</h1>
    <p class="lead">This is a simple TodoApp is developed by Lalit.</p>
    <hr class="my-4">
    <p>Here you can create you daily tasks in this app which helps you to recall the tasks. Let's Create</p>
    <a class="btn btn-primary btn-lg" href="/tasks/create" role="button">Create Now</a>
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
            


<div class="container text-center">
    <h1 class="display-4">List of Tasks</h1>

    <div>

        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>created_at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach($allTasks as $t)

                <tr>
                    <td>{{$t->name}}</td>
                    <td> {{$t->discription}}</td>
                    <td>{{$t->created_at->diffForHumans()}}</td>
                    <td>
                        <a href="/tasks/{{$t->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                        
                        <form action="/tasks/{{$t->id}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger btn-sm" value='delete'>
                        </form>

                    </td>
                </tr>

                @endforeach

                </div>
</tbody>
                @endsection()