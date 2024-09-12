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
        <th>Delete</th>
        <th>Edit</th>
      </tr>

      @foreach($todos as $key=> $todo)


      <tr>
        <td>{{$todos->firstItem() + $key}}</td>
        <td>{{$todo->title}}
          <p class="m-0">{{$todo->created_at->diffForHumans()}}</p>
        </td>
        <td>{{$todo->detail}}</td>
        <td>{{$todo->author}}</td>
        <td>
            <a href="{{route('todo.status',$todo->id)}}">
              <span class="badge bg-{{$todo->is_complete ? 'success' : 'warning text-dark' }}">
                {{$todo->is_complete ? 'Complete' : 'Pending' }}
            </a>
          </td>
        </span>
        <td><a class="btn btn-danger w-100" href="{{route('todo.delete',$todo->id)}}">Delete</a></td>
        @if (!$todo->is_complete)
          <td><a class="btn btn-primary w-100" href="{{route('todo.edit',$todo->id)}}">Edit</a></td>
        @endif



      </tr>
      @endforeach


    </table>

    <span>{{ $todos->links() }}</span>
  </div>
</div>















@endsection


@section('title','-All-Todo')