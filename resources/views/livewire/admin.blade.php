<div class="MainContainer">
    <div class="sidebar">
        <h2>ADMIN</h2>
        <ul>
            <li>
                <a wire:click.prevent="$emit('loadPage', 'home')">
                    <div class="option">
                        <p>HOME</p>
                        <i class="fas fa-home"></i>
                    </div>
                </a>
            </li>
            <li>
                <a wire:click.prevent="$emit('loadPage', 'manage-users')">
                    <div class="option">
                        <p>MANAGE USERS <br> AND ROLES</p>
                        <i class="fas fa-users-cog"></i>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}" class="sub-menu-link"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit(); ">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <div class="option">
                        <p>LOG OUT</p>
                        <i class="fas fa-sign-out-alt"></i>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="MainContentArea">
        @if ($page === 'manage-users')
            @include('livewire.manage-users')
        @endif

        @if ($page === 'home')
            <livewire:home-admin />
        @endif

        @if ($page === 'add-user')
            <livewire:add-user />
        @endif
    </div>
</div>
