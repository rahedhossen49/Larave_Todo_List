<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    function todos(){
        $todos = Todo::orderBy('is_complete','ASC')->paginate(5);
        return view('Todos',compact('todos'));
    }





    function TodoStore(Request $request){

        $request->validate([
            'title' => 'required',
            'detail'=>'required',
            'author'=>'required'
        ],
    [

        'title.required'=>'Please Enter Your Title',
        'detail.required'=>'Please Enter Your Detail',
         'author.required'=>"Please Enter Your Name"
    ]);



    $todos = new Todo();
    $todos->title = $request->title;
    $todos->detail = $request->detail;
    $todos->author = $request->author;
    $todos->save();
    return back()->with('message','Todo Added Successfully');

    }


     function EditTodo($id){
        $todo = Todo::findOrFail($id);
        return view('EditTodo',compact('todo'));
     }


    function UpdateTodo(Request $request, $id){
        $todo = Todo::findOrFail($id);

        $todo->title = $request->title;
        $todo->detail = $request->detail;
        $todo->author = $request->author;
        $todo->save();
        notify()->success('Todo List Update Successfully..');
        if ($todo) {
         return to_route('todo.all');
        }
    }


    function UpdateStatus($id){

        $todo = Todo::findOrFail($id);
        $todo->is_complete = true;
        $todo->save();
        notify()->success(" Your $todo->title Todo status has been sucess..");
        return back();

    }



    function deleteTodo($id){
        $todo =Todo::findOrFail($id)->delete();
      if ($todo) {
        notify()->success('Todo List Delete Successfully..');
        return back();
      }

    }
}
