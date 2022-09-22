<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function store(Request $request) {
        $validated = $request->validate([
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'email' => ['required', 'email:rfc,dns', 'string', 'unique:users', 'max:255'],
            'phone' => ['string', 'max:14', 'nullable'],
            'city' => ['string', 'max:255', 'nullable'],
            'uf' => ['string', 'max:2', 'nullable']
        ]);

        return response()->json([
            'message' => $validated
        ]);
    }
}
