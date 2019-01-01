<?php

namespace App\Http\Controllers;

use App\carriers;
use Illuminate\Http\Request;

class CarriersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		
		return view('carriers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\carriers  $carriers
     * @return \Illuminate\Http\Response
     */
    public function show(carriers $carriers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\carriers  $carriers
     * @return \Illuminate\Http\Response
     */
    public function edit(carriers $carriers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\carriers  $carriers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, carriers $carriers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\carriers  $carriers
     * @return \Illuminate\Http\Response
     */
    public function destroy(carriers $carriers)
    {
        //
    }
}
