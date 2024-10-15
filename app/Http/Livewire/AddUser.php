<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AddUser extends Component
{
    public $name;
    public $last_name;
    public $telephone;
    public $email;
    public $document_type = 'CC'; // Establecer el valor por defecto aquí
    public $document_number;
    public $password;
    public $role_id;

    public function render()
    {
        return view('livewire.add-user');
    }

    public function create()
    {
        $validatedData = $this->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:users',
            'document_type' => 'required|string|in:CC,TI,CE,PA',
            'document_number' => 'required|string|max:20|unique:users',
            'password' => 'required|string|min:8|max:255',
            'role_id' => ''
        ]);

        User::create([
            'name' => $validatedData['name'],
            'last_name' => $validatedData['last_name'],
            'telephone' => $validatedData['telephone'],
            'email' => $validatedData['email'],
            'document_type' => $validatedData['document_type'],
            'document_number' => $validatedData['document_number'],
            'password' => Hash::make($validatedData['password']),
            'role_id' => 3
        ]);
    
        return Redirect::to('/dashboard'); 
    }
}
