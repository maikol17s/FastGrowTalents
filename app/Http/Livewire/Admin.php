<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Admin extends Component
{
    public $page = 'home';
    public $selectedUser;
    protected $listeners = ['loadPage'];
    public $role_id;
    public $search = '';

    public function loadPage($page)
    {
        $this->page = $page;
    }

    public function render()
    {
        $user = Auth::user();

        $users = User::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('last_name', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->get();

        return view('livewire.admin', [
            'user' => $user,
            'selectedUser' => $this->selectedUser,
            'users' => $users,
        ]);
    }

    public function selectUser($userId)
    {
        $this->selectedUser = User::find($userId);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
        }
    }
}
