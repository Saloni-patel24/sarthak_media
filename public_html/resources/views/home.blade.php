@extends('layouts.app')
@yield('title')
<title>Home</title>

@section('content')


<h1>Home : {{ Auth::user()->name }}</h1>


@endsection
