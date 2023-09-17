<?php

namespace App\Http\Controllers\frontend2;

use App\Http\Controllers\Controller;
use App\Models\Citizen;
use App\Models\Lawyer;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    public function lawyer()
    {
        $citizens = Citizen::all();

        return view('lawyer', compact('citizens'));
    }
}

