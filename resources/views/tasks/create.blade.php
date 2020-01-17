
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
            

            <h2 class="display-5">Create task</h2>
            <div class="container">
    
    <form method="post" action="/tasks">
        @csrf
        <div class="form-group">
          <input type="text" name="name" id="" class="form-control" placeholder="Enter your Todo name" aria-describedby="helpId">
        </div>
      <div class="form-group">
        <input type="text-area" name="discription" placeholder="Discription" class="form-control" id="" >
      </div>
     
      <button type="submit" class="btn btn-danger">Submit</button>
    </form>
    
    </div>

                @endsection()
