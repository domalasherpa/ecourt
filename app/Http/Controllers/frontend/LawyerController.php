<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;

use App\Http\Controllers\Controller;
use App\Models\Cases;
use App\Models\Expertise;
use App\Models\Lawyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LawyerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lawyer = User::where('type', "lawyer")->get();
        return view('lawyer', compact('lawyer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function hire(int $id)
    {
        Cases::where('clientId', Auth::user()->id)->orwhere('status', '!==', 'pending')
            ->first()->update(['lawyerId' => $id]);
        Lawyer::where('id', $id)->first()->update(['availability' => 0]);

        return redirect()->route('tolawyer');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $userId)
    {
        //update
        $lawyer = Lawyer::find($userId);
        $lawyer->fee = $request->fee;
        $lawyer->experience = $request->experience;
        $lawyer->save();

        return redirect()->route('account-settings');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function toExpertise()
    {
        $expertise = Expertise::where('id', Auth::user()->id)->get();
        return redirect('/dashboard')->with(['id' => Auth::user()->id, 'expertise' => $expertise]);
    }

    public function addExpertise(Request $request, int $id)
    {
        $lawyer = Expertise::create(
            [
                'id' => $id,
                'expertise' => $request->expertise,
            ]
        );
        $expertise = Expertise::where('id', Auth::user()->id)->get();
        return redirect('/dashboard')->with(['id' => Auth::user()->id, 'expertise' => $expertise]);
    }
}
