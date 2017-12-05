@extends('layouts.master')

@section('title', 'Tutorials')

@section('content')

    @if(session('success'))
        {{session('success')}} <br><br><br>
    @endif
    @foreach($tutorials as $tutorial)
        <a onMouseOver="this.style.color:'#ff0000'" onmouseout="this.style.color:'white'" style="text-decoration: none; font-size: 24px; color: white;" href="/skills_assessment/{{$tutorial->id}}">{{$tutorial->name}}</a> <br>
    @endforeach
@endsection
