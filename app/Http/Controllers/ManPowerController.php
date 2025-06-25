<?php

namespace App\Http\Controllers;

use App\Models\ManPower;
use Illuminate\Http\Request;

class ManPowerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('pages.manpower', [
            'manpowers' => ManPower::latest()->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Request $request, $id)
    {
        $manpower = ManPower::findOrFail($id);
        return view('pages.manpower-show', compact('manpower'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ManPower $manPower)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ManPower $manPower)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ManPower $manPower)
    {
        //
    }
}
