<link rel="stylesheet" href="{{ asset('css/showProfile.css') }}">

<div class="main-container">
    @forelse ($users as $user)
        @php
            $abilities = $user->abilities ?? [];
            $experiences = $user->experiences ?? [];
            $educations = $user->educations ?? [];
            $languages = $user->languages ?? [];
        @endphp
        <div class="title">
            <div><strong>{{ $user->name }} {{ $user->last_name }} </strong></div>
        </div>
        <div class="separator-line"></div>
        <div class="user-info">
            <div class="user-details">
                <div class="sub-title">
                    <div>PERSONAL INFORMATION</div>
                </div>
                <div><strong>PHONE:</strong> {{ $user->telephone }}</div>
                <div><strong>EMAIL:</strong> {{ $user->email }}</div>
                <div><strong>ADDRESS:</strong> {{ $user->direction }}</div>
                <div><strong>GENDER:</strong> {{ $user->references }}</div>
            </div>
        </div>

        <div class="user-experiences">
            <div class="sub-title">
                <div>EXPERIENCES</div>
            </div>
            @forelse ($experiences as $experience)
                <div>
                    <div><strong>COMPANY:</strong> {{ $experience->company_name }}</div>
                    <div><strong>START DATE:</strong> {{ $experience->start_date }}</div>
                    <div><strong>END DATE:</strong> {{ $experience->end_date }}</div>
                </div>
            @empty
                <div><strong>N/A</strong></div>
            @endforelse
        </div>

        <div class="user-skills">
            <div class="sub-title">
                <div>SKILLS</div>
            </div>
            @forelse ($abilities as $ability)
                <div>
                    <div><strong>{{ $ability->skill->skill_name }} </strong> - {{ $ability->skill_level }} % </div>
                </div>
            @empty
                <div><strong>N/A</strong></div>
            @endforelse
        </div>

        <div class="user-educations">
            <div class="sub-title">
                <div>EDUCATIONS</div>
            </div>
            @forelse ($educations as $education)
                @if (isset($education->academic_level) && isset($education->institution_name))
                    <div>
                        <div><strong>ACADEMIC LEVEL:</strong> {{ $education->academic_level['academic_level'] }}
                        </div>
                        <div><strong>INSTITUTION:</strong> {{ $education->institution_name }}</div>
                    </div>
                @else
                    <div><strong>N/A</strong></div>
                @endif
            @empty
                <div><strong>N/A</strong></div>
            @endforelse
        </div>

        <div class="user-languages">
            <div class="sub-title">
                <div>LANGUAGES</div>
            </div>
            @forelse ($languages as $language)
                <div><strong>{{ strtoupper($language->language_name) }} - {{ strtoupper($language->level) }}</strong>
                </div>
            @empty
                <div><strong>N/A</strong></div>
            @endforelse
        </div>
    @empty
        <div>NO FOUNT USER</div>
    @endforelse
</div>
