@extends('layouts.master')

@section('title', $command->command)

@section('content')
    <div class="main">
        <div class="text">
            <p>
                {{$command->command}}
                {{$command->id}}
                {{$command->description}}
            </p>
            <p><a href="{{URL::previous()}}">Return to Command List</a></p>
        </div>
    </div>
@endsection