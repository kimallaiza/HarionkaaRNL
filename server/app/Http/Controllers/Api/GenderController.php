<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    public function StoreGender(Request $request) {
        $validated = $request->validate([
            'gender' => ['required', 'min:4', 'max10']
        ]);

        Gender::create([
            'gender' => $validated['gender']
        ]);

        return response()->json([
            'message' => 'Gender Successfully Added.'
        ], 200);
    }
}
