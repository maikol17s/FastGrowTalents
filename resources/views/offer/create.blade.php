@extends('layouts.app')

@section('title', 'OFFER CREATE')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">

    <div class="container">
        <form class="form signup" action="{{ route('offer.store') }}" method="POST">
            @csrf
            <h2>CREATE OFFER</h2>
            <div class="first-row">
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
                <div class="selection">
                    <select name="occupation_id" required>
                        <option value="" disabled selected></option>
                        @forelse ($occupations as $occupation)
                            <option value="{{ $occupation->id }}">{{ $occupation->occupation_name }}</option>
                        @empty
                            <p></p>
                        @endforelse
                    </select>
                    <i class="fas fa-briefcase"></i>
                    <span>OCCUPATION</span>
                    <div class="arrow-down"></div>
                </div>
                <div class="selection">
                    <select name="contract_type_id" required>
                        <option value="" disabled selected></option>
                        @forelse ($contracts as $contract)
                            <option value="{{ $contract->id }}">{{ $contract->contract_type }}</option>
                        @empty
                            <p></p>
                        @endforelse
                    </select>
                    <i class="fas fa-file-contract"></i>
                    <span>CONTRACT</span>
                    <div class="arrow-down"></div>
                </div>
            </div>
            <div class="second-row">
                <div class="selection">
                    <select name="skill_id" required>
                        <option value="" disabled selected></option>
                        @forelse ($skills as $skill)
                            <option value="{{ $skill->id }}">{{ $skill->skill_name }}</option>
                        @empty
                            <p></p>
                        @endforelse
                    </select>
                    <i class="fas fa-file-contract"></i>
                    <span>SKILLS</span>
                    <div class="arrow-down"></div>
                </div>
                <div class="inputBox">
                    <input type="text" name="months_experience" required="required">
                    <i class="far fa-calendar-days"></i>
                    <span>MONTHS EXPERIENCE</span>
                </div>
                <div class="selection">
                    <select name="salary_id" required>
                        <option value="" disabled selected></option>
                        @forelse ($salary_ranges as $salary_range)
                            <option value="{{ $salary_range->id }}">{{ $salary_range->salary_range }}</option>
                        @empty
                            <p></p>
                        @endforelse
                    </select>
                    <i class="fas fa-money-bill"></i>
                    <span>SALARY</span>
                    <div class="arrow-down"></div>
                </div>
            </div>
            <div class="third-row">
                <div class="selection">
                    <select name="workday_id" required="required">
                        <option value="" disabled selected></option>
                        @forelse ($workdays as $workday)
                            <option value="{{ $workday->id }}">{{ $workday->workday }}</option>
                        @empty
                            <p></p>
                        @endforelse
                    </select>
                    <i class="fas fa-clock"></i>
                    <span>WORK DAY</span>
                    <div class="arrow-down"></div>
                </div>
                <div class="selection">
                    <select name="academic_level_id" required="required">
                        <option value="" disabled selected></option>
                        @forelse ($studies as $study)
                            <option value="{{ $study->id }}">{{ $study->academic_level }}</option>
                        @empty
                            <p></p>
                        @endforelse
                    </select>
                    <i class="fas fa-graduation-cap"></i>
                    <span>LEVEL ACADEMIC</span>
                    <div class="arrow-down"></div>
                </div>
                <div class="selection">
                    <select name="ubication_id" required="required">
                        <option value="" disabled selected></option>
                        @forelse ($municipalities as $municipality)
                            <option value="{{ $municipality->id }}">{{ $municipality->municipality_name }}</option>
                        @empty
                            <p></p>
                        @endforelse
                    </select>
                    <i class="fas fa-compass"></i>
                    <span>UBICATION</span>
                    <div class="arrow-down"></div>
                </div>
            </div>
            <div class="quarter-row">
                <div class="date">
                    <input type="date" name="start_date" required="required">
                    <i class="far fa-calendar-days"></i>
                    <span>START</span>
                </div>
                <div class="date">
                    <input type="date" name="closing_date" required="required">
                    <i class="far fa-calendar-days"></i>
                    <span>CLOSE</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="requisition_id" required="required">
                    <i class="fas fa-comment-alt"></i>
                    <span>REQUISITION</span>
                </div>
            </div>
            <div class="inputBox">
                <input type="submit" value="CREATE OFFER" />
            </div>
            <div class="backBox">
                <a class="back" href=" {{ route('offer.index') }}"><i class="fas fa-arrow-left"></i> BACK</a>
            </div>
        </form>
    </div>
@endsection
