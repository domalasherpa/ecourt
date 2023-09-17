<?php

namespace App\Http\Controllers\frontend2;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CitizenController extends Controller
{
    public function citizen(){
        $lawyers = User::all();
        return view('citizen', compact('lawyers'));
    }
}
