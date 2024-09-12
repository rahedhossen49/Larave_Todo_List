{{-- @extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found')) --}}


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<style>
  body {
    display: grid;
    place-items: center;
  }
</style>
<body>


  <a href="{{ route('todo.all') }}">
    <img src="https://freefrontend.com/assets/img/html-funny-404-pages/CodePen-404-Page.gif" alt="404 Page">
</a>


</body>
</html>