@extends('layouts.app')

@section('title', 'OFFER DETAILS')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">

    <main class="main-container">
        <div class="container-table">
            <table class="table-container">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>COMPANY</th>
                        <th>OCCUPATION</th>
                        <th>SKILLS</th>
                        <th>MONTHS EXPERIENCE</th>
                        <th>WORK DAY</th>
                        <th>CONTRACT TYPE</th>
                        <th>SALARY</th>
                        <th>ACADEMIC LEVEL</th>
                        <th>UBICATION</th>
                        <th>START DATE</th>
                        <th>CLOSING DATE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $offer->id }}</td>
                        <td>{{ $offer->company->company_name }}</td>
                        <td>{{ $offer->occupation->occupation_name }}</td>
                        <td>{{ $offer->skill->skill_name }}</td>
                        <td>{{ $offer->months_experience }}</td>
                        <td>{{ $offer->workday->workday }}</td>
                        <td>{{ $offer->contract_type->contract_type }}</td>
                        <td>{{ $offer->salary->salary_range }}</td>
                        <td>{{ $offer->academic_level->academic_level }}</td>
                        <td>{{ $offer->ubication->municipality_name }}</td>
                        <td>{{ $offer->start_date }}</td>
                        <td>{{ $offer->closing_date }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <button class="back-btn" onclick="history.go(-1);">
            <i class="fas fa-arrow-left"></i> BACK
        </button>
    </main>
@endsection
