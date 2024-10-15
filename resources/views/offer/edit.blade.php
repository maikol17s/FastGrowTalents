@extends('layouts.app')

@section('title', 'OFFER EDIT')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">

    <div class="container">
        <form class="form signup" method="POST" action="{{ route('offer.update', ['offer' => $offer->id]) }}">

            @method('PATCH')
            @csrf

            <h2>UPDATE OFFER</h2>

            <div class="first-row">
                <div class="selection">
                    <select name="company_id" required>
                        <option value="" disabled selected></option>
                        @forelse ($companies as $company)
                            <option value="{{ $company->id }}" {{ $company->id == $offer->company_id ? 'selected' : '' }}>
                                {{ $company->company_name }}</option>
                        @empty
                            <option value="" disabled>Not registered companies.</option>
                        @endforelse
                    </select>
                    <i class="fas fa-building"></i>
                    <span class="date">COMPANY</span>
                    <div class="arrow-down"></div>
                </div>

                <div class="selection">
                    <select name="occupation_id" required>
                        <option value="" disabled selected></option>
                        @forelse ($occupations as $occupation)
                            <option value="{{ $occupation->id }}"
                                {{ $occupation->id == $offer->occupation_id ? 'selected' : '' }}>
                                {{ $occupation->occupation_name }}</option>
                        @empty
                            <p></p>
                        @endforelse
                    </select>
                    <i class="fas fa-briefcase"></i>
                    <span class="date">OCCUPATION</span>
                    <div class="arrow-down"></div>
                </div>

                <div class="selection">
                    <select name="contract_type_id" required>
                        <option value="" disabled selected></option>
                        @forelse ($contracts as $contract)
                            <option value="{{ $contract->id }}"
                                {{ $contract->id == $offer->contract_type_id ? 'selected' : '' }}>
                                {{ $contract->contract_type }}</option>
                        @empty
                            <p>Not registered contracts.</p>
                        @endforelse
                    </select>
                    <i class="fas fa-file-contract"></i>
                    <span class="date">CONTRACT</span>
                    <div class="arrow-down"></div>
                </div>
            </div>

            <div class="second-row">

                <div class="selection">
                    <select name="skill_id" required>
                        <option value="" disabled selected></option>
                        @forelse ($skills as $skill)
                            <option value="{{ $skill->id }}" {{ $skill->id == $offer->skill_id ? 'selected' : '' }}>
                                {{ $skill->skill_name }}</option>
                        @empty
                            <p>Not registered skills.</p>
                        @endforelse
                    </select>
                    <i class="fas fa-money-bill"></i>
                    <span class="date">SKILLS</span>
                    <div class="arrow-down"></div>
                </div>

                <div class="inputBox">
                    <input type="text" name="months_experience" required="required"
                        value="{{ $offer->months_experience }}">
                    <i class="far fa-calendar-days"></i>
                    <span class="date">MONTHS EXPERIENCE</span>
                </div>

                <div class="selection">
                    <select name="salary_id" required>
                        <option value="" disabled selected></option>
                        @forelse ($salary_ranges as $salary_range)
                            <option value="{{ $salary_range->id }}"
                                {{ $salary_range->id == $offer->salary_id ? 'selected' : '' }}>
                                {{ $salary_range->salary_range }}</option>
                        @empty
                            <p>Not registered salaries.</p>
                        @endforelse
                    </select>
                    <i class="fas fa-money-bill"></i>
                    <span class="date">SALARY</span>
                    <div class="arrow-down"></div>
                </div>
            </div>

            <div class="third-row">

                <div class="selection">
                    <select name="workday_id" required="required">
                        <option value="" disabled selected></option>
                        @forelse ($workdays as $workday)
                            <option value="{{ $workday->id }}"
                                {{ $workday->id == $offer->workday_id ? 'selected' : '' }}>
                                {{ $workday->workday }}</option>
                        @empty
                            <p>Not registered workdays.</p>
                        @endforelse
                    </select>
                    <i class="fas fa-clock"></i>
                    <span class="date">WORKDAY</span>
                    <div class="arrow-down"></div>
                </div>

                <div class="selection">
                    <select name="academic_level_id" required="required">
                        <option value="" disabled selected></option>
                        @forelse ($studies as $study)
                            <option value="{{ $study->id }}"
                                {{ $study->id == $offer->academic_level_id ? 'selected' : '' }}>
                                {{ $study->academic_level }}
                            </option>
                        @empty
                            <p>Not registered studies.</p>
                        @endforelse
                    </select>
                    <i class="fas fa-graduation-cap"></i>
                    <span class="date">ACADEMIC</span>
                    <div class="arrow-down"></div>
                </div>

                <div class="selection">
                    <select name="ubication_id" required="required">
                        <option value="" disabled selected></option>
                        @forelse ($municipalities as $municipality)
                            <option value="{{ $municipality->id }}"
                                {{ $municipality->id == $offer->ubication_id ? 'selected' : '' }}>
                                {{ $municipality->municipality_name }}</option>
                        @empty
                            <p>Not registered municipalities.</p>
                        @endforelse
                    </select>
                    <i class="fas fa-compass"></i>
                    <span class="date">UBICATION</span>
                    <div class="arrow-down"></div>
                </div>
            </div>

            <div class="quarter-row">

                <div class="inputBox">
                    <input type="date" name="start_date" required="required" value="{{ $offer->start_date }}">
                    <i class="far fa-calendar-days"></i>
                    <span class="date">STAR</span>
                </div>
                <div class="inputBox">
                    <input type="date" name="closing_date" required="required" value="{{ $offer->closing_date }}">
                    <i class="far fa-calendar-days"></i>
                    <span class="date">CLOSING</span>
                </div>
            </div>

            <div class="inputBox">
                <input type="submit" value="UPDATE OFFER" />
            </div>

            <div class="backBox">
                <a class="back" href=" {{ route('offer.index') }}">BACK</a>
            </div>
        </form>
    </div>
@endsection
