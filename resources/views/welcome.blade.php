@extends('layout.app')



@section('sidebar')
    @include('component.sidebar')
@endsection


@section('chat')
    @include('component.chat.chat')
@endsection


@section('auth')
    @include('auth.index')
@endsection
    





