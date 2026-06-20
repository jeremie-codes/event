<?php

namespace App\Http\Controllers;

use App\Models\Guest;

class InviteController extends Controller
{
    public function index()
    {
        return view('invites.index');
    }

    public function show(Guest $guest)
    {
        return view('invites.show', compact('guest'));
    }
}
