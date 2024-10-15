<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Offer;
use App\Models\Postulations;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PostulationsController extends Controller
{
    public function store(User $user, Offer $offer): RedirectResponse
    {
        if (!$user || !$offer) {
            return redirect()->back()->with('error', 'User or offer not found.');
        }

        $newPostulation = new Postulations();
        $newPostulation->user_id = $user->id; 
        $newPostulation->offer_id = $offer->id;
        $newPostulation->save();

        return redirect()->back()->with('message', 'Application for the vacancy ' . $offer->id . ' successfully submitted.');
    }
}
