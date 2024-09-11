@extends('Frontend.TodoLayout')


@section('content')



<div class="col-lg-8 mx-auto mt-5">

  <div class="table-responsive">
    <table class="table border">
      <tr>
        <th>#</th>
        <th>Title</th>
        <th>Detail</th>
        <th>Author</th>
        <th>Status</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>

      @foreach($todos as $key=> $todo)

      <tr>
        <td>{{++$key}}</td>
        <td>{{$todo->title}}</td>
        <td>{{$todo->detail}}</td>
        <td>{{$todo->author}}</td>
        <td>{{$todo->is_complete ? 'Is Complete' : 'Pending' }}</td>
        <td><a class="btn btn-primary w-100" href="">Edit</a></td>
        <td><a class="btn btn-danger w-100" href="">Delete</a></td>



      </tr>
      @endforeach


    </table>
  </div>
</div>















@endsection


@section('title','-All-Todo')