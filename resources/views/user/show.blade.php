@extends('layouts.app')

@section('title', 'USER DETAILS')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">

    <main class="main-container">
        <div class="container-table">
            <table class="table-container">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>LAST NAME</th>
                        <th>PHONE</th>
                        <th>EMAIL</th>
                        <th>DOCUMENT TYPE</th>
                        <th>DOCUMENT NUMBER</th>
                        <th>ROLE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->telephone }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->document_type }}</td>
                        <td>{{ $user->document_number }}</td>
                        <td>{{ $user->role->role_name }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <button class="back-btn" onclick="history.go(-1);">
            <i class="fas fa-arrow-left"></i> BACK
        </button>
    </main>
@endsection
