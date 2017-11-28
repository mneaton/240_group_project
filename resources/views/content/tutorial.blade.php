@extends('layouts.master')

@section('title', $tutorial->name)

@section('content')
    @foreach($sections as $section)
        <a href="/tutorials/{{$tutorial->id}}/section/{{$section->section_id}}">{{$section->body}}</a> <br>
    @endforeach
@endsection
