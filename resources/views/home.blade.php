@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <h3>Dòng title mới</h3>
    <p>This is the content section.</p>
@endsection