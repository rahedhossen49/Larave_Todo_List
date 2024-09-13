@extends('Frontend.TodoLayout')

@section('content')

<style>
  .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

</style>

 <div class="col-lg-5 mx-auto">
  <div class="card mt-5">
@if (session()->has('message'))
<div class="alert alert-success">{{session('message')}}</div>
@endif
  <div class="card-header bg-dark text-white">
    <h4 class="text-center">Your Todo List</h4>
  </div>
    <div class="card-body">
      <form action="{{route('todo.store')}}" method="POST">
        @csrf
      </div>
      <label for="">Enter Your Title</label>
        <input type="text" name="title" value="{{old('title')}}" class="form-control my-2" placeholder="Todo Title">
        @error('title')
          <span class="text-danger">{{$message}}</span>
        @enderror
        <label for="">Enter Your Detail</label>
        <textarea name="detail" id="" class="form-control my-2" placeholder="Tode Details">{{old('detail')}}</textarea>
        @error('detail')
        <span class="text-danger">{{$message}}</span>
      @enderror
        <label for="">Enter Your Name</label>
        <input type="text" name="author" value="{{old('author')}}" class="form-control my-2" placeholder="Author">
        @error('author')
        <span class="text-danger">{{$message}}</span>
      @enderror
        <button type="submit" class="btn btn-primary my-3">Add Todo</button
      </form>

  </div>
 </div>






@endsection


@section('title','-Add-Todo')
