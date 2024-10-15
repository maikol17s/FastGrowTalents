@extends('layouts.app')

@section('title', 'REQUISITION DETAILS')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">

    <main class="main-container">
        <div class="container-table">
            <table class="table-container">
                <thead>
                    <tr>
                        <th>ID REQUISITION</th>
                        <th>COMPANY NAME</th>
                        <th>OCCUPATION DESCRIPTION</th>
                        <th>CANDIDATE TALENTS</th>
                        <th>RESPONSABILITIES</th>
                        <th>CRITERIA</th>
                        <th>JUSTIFICATION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $requisition->id }}</td>
                        <td>{{ $requisition->company->company_name }}</td>
                        <td>{{ $requisition->occupation_description }}</td>
                        <td>{{ $requisition->candidate_talents }}</td>
                        <td>{{ $requisition->responsibilities }}</td>
                        <td>{{ $requisition->selection_criteria }}</td>
                        <td>{{ $requisition->justification }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <button class="back-btn" onclick="history.go(-1);">
            <i class="fas fa-arrow-left"></i> BACK
        </button>
    </main>
@endsection
