@extends('layout')
@section('content')
<div class="container">
    
<form method="post" action="/tasks/create">
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
@endsection('content')
