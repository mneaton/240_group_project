@extends('layouts.master')

@section('title', $section->name . ' - ' . $section->section_id)

@section('content')
    {{ $section->body }}
@endsection
