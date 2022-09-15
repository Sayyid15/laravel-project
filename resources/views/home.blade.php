@extends('layouts web')
@section('title','home')
@section('content')
    <h1>{{$title}}</h1>
    <p>{{$text}}</p>
    <a href="{{route('about')}}">About</a>
@endsection
