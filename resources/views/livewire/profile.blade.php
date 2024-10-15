<div class="MainContainer">

    <div class="sidebar">
        <h2>PROFILE</h2>
        <ul>
            <li>
                <a wire:click.prevent="$emit('loadPage', 'personal-information')">
                    <div class="option">
                        <p>PERSONAL <br> INFORMATION</p>
                        <i class="fas fa-user"></i>
                    </div>
                </a>
            </li>
            <li>
                <a wire:click.prevent="$emit('loadPage', 'experience')">
                    <div class="option">
                        <p>EXPERIENCE</p>
                        <i class="fas fa-briefcase"></i>
                    </div>
                </a>
            </li>
            <li>
                <a wire:click.prevent="$emit('loadPage', 'education')">
                    <div class="option">
                        <p>EDUCATION</p>
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                </a>
            </li>
            <li>
                <a wire:click.prevent="$emit('loadPage', 'language')">
                    <div class="option">
                        <p>LANGUAGE</p>
                        <i class="fas fa-language"></i>
                    </div>
                </a>
            </li>
            <li>
                <a wire:click.prevent="$emit('loadPage', 'skills')">
                    <div class="option">
                        <p>SKILL</p>
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                </a>
            </li>
            <div class="additional-options">
                <li>
                    <a wire:click.prevent="$emit('loadPage', 'redirectViewResume')">
                        <div class="option">
                            <i class="fas fa-file-alt"></i>
                            <p>VIEW MY PROFILE</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a wire:click.prevent="redirectHome">
                        <div class="option">
                            <i class="fas fa-home"></i>
                            <p>RETURN TO HOME</p>
                        </div>
                    </a>
                </li>
            </div>
        </ul>
    </div>

    <div class="MainContentArea">
        @if ($page == 'personal-information')
            <livewire:personal-details />
        @elseif ($page == 'experience')
            <livewire:experiences />
        @elseif ($page == 'education')
            <livewire:educations />
        @elseif ($page == 'language')
            <livewire:languages />
        @elseif ($page == 'skills')
            <livewire:skills />
        @elseif ($page == 'redirectViewResume')
            <livewire:show-profile />
        @endif

    </div>

</div>

@livewireScripts

<script>
    document.addEventListener('livewire:load', function() {
        Livewire.on('loadPage', page => {
            Livewire.emit('loadPage', page);
        });
    });
</script>
