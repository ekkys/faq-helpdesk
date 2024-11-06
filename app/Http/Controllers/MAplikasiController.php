<?php

namespace App\Http\Controllers;

use App\Models\MAplikasi;
use Illuminate\Http\Request;

class MAplikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aplikasis = MAplikasi::all();
        return view('aplikasis.index', compact('aplikasis'));
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
    public function show(MAplikasi $mAplikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MAplikasi $mAplikasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MAplikasi $mAplikasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MAplikasi $mAplikasi)
    {
        //
    }
}
