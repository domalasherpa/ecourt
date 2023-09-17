<?php

namespace App\Http\Controllers\frontend2;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AttorneyController extends Controller
{
    public function attorney()
    {
        $lawyers = User::all();
        return view('Attorneys', compact('lawyers'));
    }
}
