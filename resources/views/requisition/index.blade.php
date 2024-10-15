@extends('layouts.app')

@section('title', 'REQUISITIONS')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <main class="main-container">

        <div class="container">
            <h2 class="title">REQUISITIONS</h2>
            <div class="one-container">
                <form action="" method="GET" class="search-form">
                    <div class="group">
                        <i class="fas fa-search icon" aria-hidden="true"></i>
                        <input placeholder="Search" type="search" class="input">
                    </div>
                </form>
                <div class="search-button">
                    <button type="button" onclick="window.location.href='{{ route('requisition.create') }}'">
                        ADD
                    </button>
                </div>
            </div>
        </div>

        <div class="container-table">
            <table class="table-container">
                <thead>
                    <tr>
                        <th>REQUISITION CODE</th>
                        <th>COMPANY NAME</th>
                        <th>OCCUPATION DESCRIPTION</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($requisitions as $requisition)
                        <tr>
                            <td>{{ $requisition->id }}</td>
                            <td>{{ $requisition->company->company_name}}</td>
                            <td>{{ $requisition->occupation_description }}</td>

                            <td class="field-actions">
                                <div>
                                    <form method="POST" action="{{ route('requisition.destroy', $requisition->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete-btn">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                                <button class="update-btn" onclick="location.href='{{ route('requisition.edit', $requisition->id) }}'">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                                <button class="show-btn" onclick="location.href='{{ route('requisition.show', $requisition->id) }}'">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">No data.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>
@endsection
