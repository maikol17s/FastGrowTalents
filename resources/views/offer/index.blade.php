@extends('layouts.app')

@section('title', 'OFFERS')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <main class="main-container">

        <div class="container">
            <h2 class="title">OFFERS</h2>
            <div class="one-container">
                <form action="" method="GET" class="search-form">
                    <div class="group">
                        <i class="fas fa-search icon" aria-hidden="true"></i>
                        <input placeholder="Search" type="search" class="input">
                    </div>
                </form>
                <div class="search-button">
                    <button type="button" onclick="window.location.href='{{ route('offer.create') }}'">
                        ADD
                    </button>
                </div>
            </div>
        </div>

        <div class="container-table">
            <table class="table-container">
                <thead>
                    <tr>
                        <th>OFFER CODE</th>
                        <th>OCCUPATION</th>
                        <th>MONTHS EXPERIENCE</th>
                        <th>SALARY</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($offers as $offer)
                        <tr>
                            <td>{{ $offer->id }}</td>
                            <td>{{ $offer->occupation->occupation_name }}</td>
                            <td>{{ $offer->months_experience }}</td>
                            <td>{{ $offer->salary->salary_range }}</td>

                            <td class="field-actions">
                                <div>
                                    <form method="POST" action="{{ route('offer.destroy', $offer->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete-btn">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                                <button class="update-btn" onclick="location.href='{{ route('offer.edit', $offer->id) }}'">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                                <button class="show-btn" onclick="location.href='{{ route('offer.show', $offer->id) }}'">
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
