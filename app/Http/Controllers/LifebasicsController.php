<?php

namespace App\Http\Controllers;

use App\lifebasics;
use Illuminate\Http\Request;

class LifebasicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		return view('life-basics.index');
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
     * @param  \App\lifebasics  $lifebasics
     * @return \Illuminate\Http\Response
     */
    public function show(lifebasics $lifebasics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lifebasics  $lifebasics
     * @return \Illuminate\Http\Response
     */
    public function edit(lifebasics $lifebasics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lifebasics  $lifebasics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lifebasics $lifebasics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lifebasics  $lifebasics
     * @return \Illuminate\Http\Response
     */
    public function destroy(lifebasics $lifebasics)
    {
        //
    }
}
