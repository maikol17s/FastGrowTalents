<div class="container container-livewire">
    <div>
        <h2 class="title-livewire">UPLOAD EXPERIENCE</h2>
    </div>
    <form class="form signup" wire:submit.prevent="create">
        <div class="first-row">
            <div class="inputBox">
                <input type="text" name="company_name" required="required" wire:model="company_name">
                <i class="fas fa-building"></i>
                <span>COMPANY NAME</span>
                @error('company')
                    <h5>{{ $message }}</h5>
                @enderror
            </div>
            <div class="date">
                <input type="date" name="start_date" required="required" wire:model="start_date">
                <i class="fas fa-calendar-days"></i>
                <span>JOB START DATE</span>
                @error('start_date')
                    <h5>{{ $message }}</h5>
                @enderror
            </div>
            <div class="date">
                <input type="date" name="end_date" required="required" wire:model="end_date">
                <i class="fas fa-calendar-days"></i>
                <span>JOB END DATE</span>
                @error('end_date')
                    <h5>{{ $message }}</h5>
                @enderror
            </div>
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

        <div class="inputBox">
            <input type="submit" value="UPLOAD DATA" />
        </div>
    </form>
</div>
