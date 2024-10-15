@extends('layouts.app')

@section('title', 'USERS')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <main class="main-container">

        <div class="container">
            <h2 class="title">USERS</h2>
            <div class="one-container">
                <form action="" method="GET" class="search-form">
                    <div class="group">
                        <i class="fas fa-search icon" aria-hidden="true"></i>
                        <input placeholder="Search" type="search" class="input">
                    </div>
                </form>
                <div class="search-button">
                    <button type="button" onclick="window.location.href='{{ route('user.create') }}'">ADD</button>
                </div>
            </div>
        </div>

        <div class="container-table">
            <table class="table-container">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>LAST NAME</th>
                        <th>ROLE</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->role->role_name }}</td>

                            <td class="field-actions">
                                <div>
                                    <form method="POST" action="{{ route('user.destroy', $user->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete-btn">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                                <button class="update-btn" onclick="location.href='{{ route('user.edit', $user->id) }}'">
                                    <i class="fas fa-pencil"></i>
                                </button>
                                <button class="show-btn" onclick="location.href='{{ route('user.show', $user->id) }}'">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>
@endsection
