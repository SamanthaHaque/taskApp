@extends('layouts.app')


@section('contents')
<div class="container">
   <h1>Hello, {{ Auth::user()->name }}</h1>
  </div>
  
@endsection