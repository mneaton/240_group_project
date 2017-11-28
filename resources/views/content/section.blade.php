@extends('layouts.master')

@section('title', $section->name . ' - ' . $section->section_id)

@section('content')
    {{$section->body}}

    <form method="post" action="/tutorials/{{$section->tutorial_id}}/section/{{$section->section_id}}">
        Answer: <input type="text" name="answer">
        <input type="submit">
    </form
@endsection
