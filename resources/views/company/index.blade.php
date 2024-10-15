@extends('layouts.app')

@section('title', 'COMPANIES')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <main class="main-container">
        <div class="container">
            <h2 class="title">COMPANIES</h2>
            <div class="one-container">
                <form action="" method="GET" class="search-form">
                    <div class="group">
                        <i class="fas fa-search icon" aria-hidden="true"></i>
                        <input placeholder="Search" type="search" class="input">
                    </div>
                </form>
                <div class="search-button">
                    <button type="button" onclick="window.location.href='{{ route('company.create') }}'">ADD</button>
                </div>
            </div>
        </div>
        <div class="container-table">
            <table class="table-container">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>COMPANY NAME</th>
                        <th>NIT</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($companies as $company)
                        <tr>
                            <td>{{ $company->id }}</td>
                            <td>{{ $company->company_name }}</td>
                            <td>{{ $company->nit_number }}</td>

                            <td class="field-actions">
                                <div>
                                    <form method="POST" action="{{ route('company.destroy', $company->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete-btn">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                                <button class="update-btn"
                                    onclick="location.href='{{ route('company.edit', $company->id) }}'">
                                    <i class="fas fa-pencil"></i>
                                </button>
                                <button class="show-btn"
                                    onclick="location.href='{{ route('company.show', $company->id) }}'">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">No data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>
@endsection
