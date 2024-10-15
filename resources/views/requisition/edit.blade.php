@extends('layouts.app')

@section('title', 'REQUISITION UPDATE')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">

    <div class="container">
        <form class="form signup" method="POST" action="{{ route('requisition.update', ['requisition' => $requisition->id]) }}">
            @csrf
            @method('PATCH')

            <h2>UPDATE REQUISITION</h2>

            <div class="selection">
                <select name="company_id" required>
                    <option value="" disabled></option>
                    @forelse ($companies as $company)
                        <option value="{{ $company->id }}" {{ old('company_id') == $company->id ? 'selected' : '' }}>{{ $company->company_name }}</option>
                    @empty
                        <option value="" disabled>Not registered companies.</option>
                    @endforelse
                </select>
                <i class="fas fa-building"></i>
                <span>COMPANY</span>
                <div class="arrow-down"></div>
            </div>
            
            <div class="inputBox">
                <input type="text" name="occupation_description" value="{{ $requisition->occupation_description }}" required>
                <i class="fas fa-briefcase"></i>
                <span>OCUPATION DESCRIPTION</span>
            </div>

            <div class="inputBox">
                <input type="text" name="candidate_talents" value="{{ $requisition->candidate_talents }}" required>
                <i class="fas fa-user-tie"></i>
                <span>CANDIDATE TALENTS</span>
            </div>

            <div class="inputBox">
                <input type="text" name="responsibilities" value="{{ $requisition->responsibilities }}" required>
                <i class="fas fa-tasks"></i>
                <span>RESPONSABILITIES</span>
            </div>

            <div class="inputBox">
                <input type="text" name="selection_criteria" value="{{ $requisition->selection_criteria }}" required>
                <i class="fas fa-check-circle"></i>
                <span>CRITERIA</span>
            </div>

            <div class="inputBox">
                <input type="text" name="justification" value="{{ $requisition->justification }}" required>
                <i class="fas fa-comment-alt"></i>
                <span>JUSTIFICATION</span>
            </div>

            <div class="inputBox">
                <input type="submit" value="UPDATE REQUISITION" />
            </div>

        </form>
    </div>
@endsection
