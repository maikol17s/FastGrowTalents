<div class="container container-livewire">
    <div>
        <h2 class="title-livewire">UPLOAD LANGUAGE</h2>
    </div>

    <form class="form signup" wire:submit.prevent="create">
        <div class="first-row">
            <div class="inputBox">
                <input type="text" name="language_name" wire:model="language_name">
                <i class="fas fa-language"></i>
                <span>LANGUAGE NAME</span>
                @error('name')
                    <h5>{{ $message }}</h5>
                @enderror
            </div>

            <div class="selection">
                <i class="fas fa-language"></i>
                <select name="language_level" wire:model="level">
                    <option disabled selected>SELECT LANGUAGE</option>
                    <option value="Beginner">BEGINNER (A1 - A2)</option>
                    <option value="Intermediate">INTERMEDIATE (B1 - B2)</option>
                    <option value="Advanced">ADVANCED (C1 - C2)</option>
                </select>
                <span>LANGUAGE LEVEL</span>
                <div class="arrow-down_1"></div>
                @error('language_level')
                    <h5>{{ $message }}</h5>
                @enderror
            </div>

            {{-- <div class="date">
                <label for="certificate_archive" class="file-container">
                    <input type="file" name="certificate_archive" class="custom-file-input"
                        wire:model="certificate_archive">
                    <i class="fas fa-folder"></i>
                    <span class="file-name">CERTIFICATE ARCHIVE</span>
                </label>
                @error('certificate_archive')
                    <h5>{{ $message }}</h5>
                @enderror
            </div> --}}
        </div>

        <div class="inputBox">
            <input type="submit" value="UPLOAD DATA" />
        </div>
    </form>

</div>
