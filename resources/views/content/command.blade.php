@extends('layouts.master')

@section('title', $command->command)

@section('content')
    {{$command->command}}
    {{$command->id}}
    {{$command->description}}
@endsection
