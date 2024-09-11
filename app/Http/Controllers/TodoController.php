<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    function todos(){
        $todos = Todo::latest()->get();
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


}
