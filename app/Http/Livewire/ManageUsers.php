<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Http\Request;

class ManageUsers extends Component
{
    public $users;
    public $page = '';
    public $role_id;
    

    protected $listeners = ['loadPage'];

    public function loadPage($page)
    {
        $this->page = $page;
    }

    public function mount()
    {
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.manage-users');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('user.show', compact('user'));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
        }
    
        return redirect()->back(); 
    }
    
    public function changeRole(Request $request, $id)
    {
        $request->validate([
            'role_id' => 'required' 
        ]);
    
        $user = User::findOrFail($id);
        $user->role_id = $request->role_id;
        $user->save();
    
        session()->flash('message', '¡User role updated successfully!');
        
        return redirect()->route('dashboard');
    }    
    
}
