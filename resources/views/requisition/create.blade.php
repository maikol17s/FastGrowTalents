@extends('layouts.app')

@section('title', 'REQUISITION')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">

    <div class="container">
        <form class="form signup" method="POST" action="{{ route('requisition.store') }}">
            @csrf

            <h2>CREATE REQUISITION</h2>

            <div class="selection">
                <select name="company_id" required>
                    <option value="" disabled selected></option>
                    @forelse ($companies as $company)
                        <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                    @empty
                        <option value="" disabled>Not registered companies.</option>
                    @endforelse
                </select>
                <i class="fas fa-building"></i>
                <span>COMPANY</span>
                <div class="arrow-down"></div>
            </div>

            <div class="inputBox">
                <input type="text" name="occupation_description" required="required">
                <i class="fas fa-briefcase"></i>
                <span>OCUPATION DESCRIPTION</span>
            </div>

            <div class="inputBox">
                <input type="text" name="candidate_talents" required="required">
                <i class="fas fa-user-tie"></i>
                <span>CANDIDATE TALENTS</span>
            </div>

            <div class="inputBox">
                <input type="text" name="responsibilities" required="required">
                <i class="fas fa-tasks"></i>
                <span>RESPONSABILITIES</span>
            </div>

            <div class="inputBox">
                <input type="text" name="selection_criteria" required="required">
                <i class="fas fa-check-circle"></i>
                <span>CRITERIA</span>
            </div>

            <div class="inputBox">
                <input type="text" name="justification" required="required">
                <i class="fas fa-comment-alt"></i>
                <span>JUSTIFICATION</span>
            </div>

            <div class="inputBox">
                <input type="submit" value="CREATE REQUISITION" />
            </div>

        </form>
    </div>
@endsection
