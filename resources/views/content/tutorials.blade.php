@extends('layouts.master')

@section('title', 'Tutorials')

@section('content')

    @foreach($contexts as $context)
        <a href="/tutorials/{{$type}}/{{$context->id or $context->type}}">{{$context->name or $context->type}}</a> <br>
    @endforeach

@endsection
