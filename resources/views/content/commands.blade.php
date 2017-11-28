@extends('layouts.master')

@section('title', 'Commands')

@section('content')
    @foreach($commands as $command)
        <a href="/command/{{$command->id}}">{{  $command->command }}</a> <br>
    @endforeach
@endsection
