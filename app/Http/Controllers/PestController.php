<?php

namespace App\Http\Controllers;

use App\Models\Pest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PestController extends Controller
{
    /**
     * Display all pests for the logged-in user.
     */
    public function index()
    {
        // Retrieve only the pests belonging to the authenticated user
        $pests = Pest::where('user_id', Auth::id())->get();

        return view('dashboard', compact('pests'));
    }

    /**
     * Store a new pest in the database.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Store the uploaded image in the 'public/images' directory
        $imagePath = $request->file('image')->store('images', 'public');

        // Save the pest details to the database, linking it to the authenticated user
        Pest::create([
            'name' => $request->input('name'),
            'image' => $imagePath,
            'user_id' => Auth::id(),
            'likes' => 0, // Initialize likes to 0 by default
        ]);

        return redirect()->route('dashboard')->with('success', 'Pest uploaded successfully!');
    }
}
