<div class="container container-livewire">
    <div>
        <h2 class="title-livewire">UPLOAD PERSONAL INFORMATION</h2>
    </div>
    <form class="form signup" wire:submit.prevent="update" wire:init="loadUserData">
        <div class="first-row">
            <div class="inputBox">
                <input type="text" wire:model="name">
                <i class="fas fa-font"></i>
                <span>NAME</span>
            </div>
            <div class="inputBox">
                <input type="text" wire:model="last_name">
                <i class="fas fa-font"></i>
                <span>LAST NAME</span>
            </div>
        </div>
        <div class="second-row">
            <div class="inputBox">
                <input type="text" wire:model="telephone">
                <i class="fas fa-phone"></i>
                <span>TELEPHONE</span>
            </div>
            <div class="inputBox">
                <input type="email" wire:model="email">
                <i class="fas fa-envelope"></i>
                <span>EMAIL</span>
            </div>
        </div>
        <div class="third-row">
            <div class="selection">
                <i class="fas fa-id-card"></i>
                <select autocomplete="document_type" wire:model="document_type">
                    <option value="" disabled></option>
                    <option value="CC">Cédula Ciudadanía</option>
                    <option value="TI">Tarjeta Identidad</option>
                    <option value="CE">Cédula Extranjería</option>
                    <option value="PA">Pasaporte</option>
                </select>
                <span>DOCUMENT TYPE</span>
                <div class="arrow-down"></div>
            </div>
            <div class="inputBox">
                <input type="text" wire:model="document_number">
                <i class="fas fa-hashtag"></i>
                <span>DOCUMENT NUMBER</span>
            </div>
        </div>
        <div class="second-row">
            <div class="inputBox">
                <input type="text" wire:model="direction">
                <i class="fas fa-location-dot"></i>
                <span>DIRECTION</span>
            </div>
            <div class="selection">
                <select name="references" wire:model="references">
                    <option value="" disabled selected>SELECT GENDER</option>
                    <option value="Male">MALE</option>
                    <option value="Female">FEMALE</option>
                    <option value="Other">OTHER</option>
                    <option value="NotSpecified">NOT SPECIFIED</option>
                </select>
                <i class="fas fa-transgender"></i>
                <span>GENDER</span>
                <div class="arrow-down"></div>
            </div>            
        </div>
        <div class="inputBox">
            <input type="submit" value="UPLOAD DATA" />
        </div>
    </form>
</div>
