<div class="container container-livewire">
    <div>
        <h2 class="title-livewire">UPLOAD EDUCATION</h2>
    </div>
    <form class="form signup" wire:submit.prevent="create">
        <div class="first-row">
            <div class="selection">
                <select name="academic_level_id" wire:model="academic_level_id">
                    <option value="" selected disabled>SELECT ACADEMIC LEVEL</option>
                    @if ($studies)
                        @foreach ($studies as $study)
                            <option value="{{ $study->id }}">{{ $study->academic_level }}</option>
                        @endforeach
                    @endif
                </select>
                <i class="fas fa-graduation-cap"></i>
                <span>EDUCACIÓN</span>
                <div class="arrow-down"></div>
            </div>


            <div class="inputBox">
                <input type="text" name="institution_name" wire:model="institution_name">
                <i class="fas fa-school"></i>
                <span>INSTITUTION NAME</span>
                @error('institution_name')
                    <h5>{{ $message }}</h5>
                @enderror
            </div>

            {{-- <div>
                <div class="date">
                    <label for="certificate_archive" class="file-container">
                        <input type="file" name="certificate_archive" class="custom-file-input"
                            wire:model="certificate_archive">
                        <i class="fas fa-folder"></i>
                        <span class="file-name">CERTIFICATE ARCHIVE</span>
                    </label>
                    @error('certificate_archive')
                        <h5>{{ $message }}</h5>
                    @enderror
                </div>
            </div> --}}
        </div>

        <div class="inputBox">
            <input type="submit" value="UPLOAD DATA" />
        </div>

    </form>
</div>
