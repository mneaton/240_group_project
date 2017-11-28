@extends('layouts.master')

@section('title', 'Tutorials')

@section('content')

    @foreach($tutorials as $tutorial)
        <a href="/tutorial/{{$tutorial->id}}">{{ $tutorial->name }}</a> <br>
    @endforeach

@endsection
