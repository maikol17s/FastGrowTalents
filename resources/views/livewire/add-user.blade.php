<div class="container container-livewire">
    <form class="form signup" wire:submit.prevent="create">
        @csrf
        <h2>ADD USER</h2>

        <div class="inputBox">
            @error('document_number')
                <h5>{{ $message }}</h5>
            @enderror
            @error('document_type')
                <h5>{{ $message }}</h5>
            @enderror
        </div>

        <div class="first-row">
            <div class="inputBox">
                <input type="text" name="name" wire:model="name" autofocus />
                <i class="fas fa-user-circle"></i>
                <span>NAME</span>
                @error('name')
                    <h5>{{ $message }}</h5>
                @enderror
            </div>
            <div class="inputBox">
                <input type="text" name="last_name" wire:model="last_name" />
                <i class="fas fa-font"></i>
                <span>LAST NAME</span>
                @error('last_name')
                    <h5>{{ $message }}</h5>
                @enderror
            </div>
        </div>

        <div class="second-row">
            <div class="inputBox">
                <input type="text" name="telephone" wire:model="telephone" />
                <i class="fas fa-phone"></i>
                <span>TELEPHONE</span>
                @error('telephone')
                    <h5>{{ $message }}</h5>
                @enderror
            </div>
            <div class="inputBox">
                <input type="email" name="email" wire:model="email" />
                <i class="fas fa-envelope"></i>
                <span>EMAIL</span>
                @error('email')
                    <h5>{{ $message }}</h5>
                @enderror
            </div>
        </div>

        <div class="third-row">
            <div class="selection">
                <i class="fas fa-id-card"></i>
                <select name="document_type" wire:model="document_type">
                    <option value="CC">Cédula Ciudadanía</option>
                    <option value="TI">Tarjeta Identidad</option>
                    <option value="CE">Cédula Extranjería</option>
                    <option value="PA">Pasaporte</option>
                </select>
                <span>DOCUMENT TYPE</span>
                <div class="arrow-down"></div>
            </div>

            <div class="inputBox">
                <input type="text" name="document_number" wire:model="document_number" />
                <i class="fas fa-address-card"></i>
                <span>DOCUMENT NUMBER</span>
            </div>
        </div>

        <div class="quarter-row">
            <div class="inputBox">
                <input type="password" name="password" wire:model="password" />
                <i class="fas fa-unlock-alt"></i>
                <span>PASSWORD</span>
                @error('password')
                    <h5>{{ $message }}</h5>
                @enderror
            </div>
        </div>

        <div class="inputBox">
            <input type="submit" value="ADD USER" />
        </div>

    </form>
</div>
