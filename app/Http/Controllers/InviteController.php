<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Drink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class InviteController extends Controller
{

    public function index()
    {
        return redirect(asset('images/banner.jpeg'));
    }

    public function show(Guest $guest)
    {
        $drinks = Drink::all();

        return view('invites.index', compact(
            'guest',
            'drinks'
        ));
    }

    public function respond(Request $request, Guest $guest)
    {
        $validated = $request->validate([
            'status' => 'required|in:present,absent',
            'comment' => 'nullable|string|max:1000',
            'drinks' => 'required_if:status,present|array|max:3',
            'drinks.*' => 'exists:drinks,id',
        ]);

        $isPresent = $validated['status'] === 'present';

        $guest->update([
            'status' => $validated['status'],
            'comment' => $isPresent ? null : ($validated['comment'] ?? null),
            'responded_at' => now(),
        ]);

        if ($isPresent) {

            $guest->drinks()->sync(
                $validated['drinks'] ?? []
            );
        } else {

            $guest->drinks()->detach();
        }

        return back()->with(
            'success',
            'Merci pour votre réponse ❤️'
        );
    }
}
