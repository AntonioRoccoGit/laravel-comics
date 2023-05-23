@extends('layouts.app-layout')

@php
    $activeItem = 'comics';
@endphp

@section('content')
    {{-- JUMBOTRON --}}
    @include('partials.jumbotron')
    @include('partials.content')
@endsection
