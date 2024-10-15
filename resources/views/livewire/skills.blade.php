<div class="container container-livewire">
    <div>
        <h2 class="title-livewire">UPLOAD SKILLS</h2>
    </div>

    <form class="form signup" id="skills-form" wire:submit.prevent="create">
        <div class="first-row">
            <div class="selection">
                <select name="skill_id" wire:model="skill_id">
                    <option disabled selected>SELECCIONA TU HABILIDAD</option>
                    @if ($skills)
                        @foreach ($skills as $skill)
                            <option value="{{ $skill->id }}">{{ $skill->skill_name }}</option>
                        @endforeach
                    @endif
                </select>
                <i class="fas fa-brain"></i>
                <span>HABILIDADES</span>
                <div class="arrow-down"></div>
            </div>

            <div class="selection">
                <select name="skill_level" wire:model="skill_level">
                    <option value="" disabled selected>SELECT SKILL LEVEL</option>
                    @for ($i = 0; $i <= 100; $i += 10)
                        <option value="{{ $i }}">{{ $i }}%</option>
                    @endfor
                </select>
                <i class="fas fa-chart-bar"></i>
                <span>LEVEL</span>
                <div class="arrow-down"></div>
            </div>
        </div>

        <div class="inputBox">
            <input type="submit" value="UPLOAD DATA" />
        </div>

    </form>
</div>
