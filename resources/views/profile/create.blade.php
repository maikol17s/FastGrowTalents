@extends('layouts.app')

@section('title', 'PROFILE CREATE')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin_users.css') }}">
     <link rel="stylesheet" href="{{ asset('css/form.css') }}">

    <livewire:profile />

@endsection
