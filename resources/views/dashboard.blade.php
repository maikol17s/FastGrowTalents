@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/postulation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin_users.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homeAdmin.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/form.css') }}">

    @if (Auth::user()->role->role_name == 'Administrator')
        <livewire:admin />
    @endif

    @if (Auth::user()->role->role_name == 'Recruiter')
        <livewire:welcome />
    @endif

    @if (Auth::user()->role->role_name == 'Candidate')
        <livewire:show-offers />
    @endif

    @livewireScripts
    
@endsection
