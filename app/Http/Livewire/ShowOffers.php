<?php

namespace App\Http\Livewire;

use App\Models\Offer;
use Livewire\Component;
use App\Models\Postulation;
use App\Models\Postulations;
use Illuminate\Support\Facades\Auth;

class ShowOffers extends Component
{
    public $offers;
    public $selectedOffer;
    public $postulationSuccess = false;

    public function mount()
    {
        $this->offers = Offer::all();
    }

    public function selectOffer($offerId)
    {
        $this->selectedOffer = Offer::find($offerId);
    }

    public function postulate()
    {
        $user = Auth::user();

        if ($this->selectedOffer) {

            $postulation = new Postulations();
            $postulation->user_id = $user->id;
            $postulation->offer_id = $this->selectedOffer->id;


            $postulation->save();
            $this->postulationSuccess = true;
        }
    }

    public function render()
    {
        return view('livewire.show-offers');
    }
}
