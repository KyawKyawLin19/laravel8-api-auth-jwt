<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function register(Request $request)
    {
        $user = User::create([

        ]);
    }

    public function user()
    {
        return 'Authenticated user';
    }
}
