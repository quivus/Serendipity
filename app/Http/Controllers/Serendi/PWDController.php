<?php

namespace App\Http\Controllers\Serendi;

use Illuminate\Http\Request;
use App\Models\PWDRegistration;
use App\Models\SerendipityUser;
use App\Http\Controllers\Controller;

class PWDController extends Controller
{
    //

    public function store(Request $request)
{
    // Validate the request
    $validated = $request->validate([
        'pwd_id' => 'required|string|unique:pwd_registrations,pwd_id',
        'disability_type' => 'required|string|in:physical,visual,hearing,mental,others',
        'pwd_id_photo' => 'required|image|nullable',
    ]);

    try {
        // Handle file upload
        $photoPath = null;
        if ($request->hasFile('pwd_id_photo')) {
            $photoPath = $request->file('pwd_id_photo')->store('pwd_ids', 'public');
        }

        // Create PWD registration record
        $pwdRegistration = PWDRegistration::create([
            'pwd_id' => $validated['pwd_id'],
            'disability_type' => $validated['disability_type'],
            'pwd_id_photo' => $photoPath,
            'user_id' => auth()->SerendipityUser::id, // If using authentication
            'status' => 'pending', // Initial status
            'discount_rate' => 20.00, // 20% standard PWD discount
        ]);

        return redirect()->route('pwd.show', $pwdRegistration->id)
            ->with('success', 'PWD Registration submitted successfully. Please wait for verification.');

    } catch (\Exception $e) {
        return back()->with('error', 'There was an error processing your registration. Please try again.')
            ->withInput();
    }
}
}
