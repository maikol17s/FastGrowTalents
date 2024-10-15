@extends('layouts.app')

@section('title', 'PROFILES')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <main class="main-container">

        <div class="container">
            <h2 class="title">PROFILES</h2>
            <div class="one-container">
                <form action="" method="GET" class="search-form">
                    <div class="group">
                        <i class="fas fa-search icon" aria-hidden="true"></i>
                        <input placeholder="Buscar" type="search" class="input">
                    </div>
                </form>
                <div class="search-button">
                    <button type="button" onclick="window.location.href='{{ route('profile.create') }}'">ADD</button>
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
                        <th>COMPANY</th>
                        <th>LANGUAGE</th>
                        <th>EDUCATION</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($profiles as $profile)
                        <tr>
                            <td>{{ $profile->id }}</td>
                            <td>{{ $profile->user->name }}</td>
                            <td>{{ $profile->user->last_name }}</td>
                            <td>{{ $profile->experience->company_name }}</td>
                            <td>{{ $profile->language->name }}</td>
                            <td>{{ $profile->education->institution_name }}</td>

                            <td class="field-actions">
                                <div>
                                    <form method="POST" action="{{ route('profile.destroy', $profile->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete-btn">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                                <button class="update-btn"
                                    onclick="location.href='{{ route('profile.edit', $profile->id) }}'">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                                <button class="show-btn"
                                    onclick="location.href='{{ route('profile.show', $profile->id) }}'">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">No data.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>

@endsection
