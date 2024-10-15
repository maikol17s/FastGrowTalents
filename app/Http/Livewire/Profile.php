<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Profile extends Component
{
    public $page = '';

    protected $listeners = ['loadPage'];

    public function loadPage($page)
    {
        $this->page = $page;
    } 

    public function render()
    {
        return view('livewire.profile');
    }

    public function redirectHome()
    {
        return redirect()->to('dashboard');
    }
}
