<div class="container-main">
    <div class="container-second">
        <div class="one-container">
            <div class="group">
                <i class="fas fa-search icon" style="color: black"></i>
                <input wire:model="search" placeholder="Search" type="search" class="input">
            </div>
            <div class="search-button">
                <button wire:click.prevent="$emit('loadPage', 'add-user')">ADD</button>
            </div>
        </div>
    </div>
    <div class="container-table">
        <table>
            <thead>
                <tr>
                    <th>USER NAME</th>
                    <th>LAST NAME</th>
                    <th>EMAIL</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @if ($users->isEmpty())
                    <tr>
                        <td colspan="4">NO DATA RELATED TO SEARCH FOUND.</td>
                    </tr>
                @else
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ strtoupper($user->name) }}</td>
                            <td>{{ strtoupper($user->last_name) }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="field-actions">
                                <div class="changeRol">
                                    <form method="POST"
                                          action="{{ route('user.changeRole', ['user' => $user->id]) }}">
                                        @csrf
                                        @method('PUT')
                                        <span><b>ROLE: </b></span>
                                        <select name="role_id">
                                            <option value="" disabled>SELECT ROLE</option>
                                            <option value="1" {{ $user->role_id == 1 ? 'selected' : '' }}>
                                                ADMINISTRATOR</option>
                                            <option value="2" {{ $user->role_id == 2 ? 'selected' : '' }}>
                                                RECRUITER
                                            </option>
                                            <option value="3" {{ $user->role_id == 3 ? 'selected' : '' }}>
                                                CANDIDATE
                                            </option>
                                        </select>
                                        <button type="submit"><i class="fas fa-exchange-alt"></i> CHANGE &nbsp;
                                            ROLE</button>
                                    </form>
                                </div>
                                <div>
                                    <button wire:click="destroy({{ $user->id }})" class="delete-btn">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                                <button onclick="window.location='{{ route('user.show', $user->id) }}'"
                                        class="show-btn">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
