<?php

namespace App\Http\Controllers;

use App\retirementbasics;
use Illuminate\Http\Request;

class RetirementbasicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //	
		return view('retirement-basics.index');
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
     * @param  \App\retirementbasics  $retirementbasics
     * @return \Illuminate\Http\Response
     */
    public function show(retirementbasics $retirementbasics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\retirementbasics  $retirementbasics
     * @return \Illuminate\Http\Response
     */
    public function edit(retirementbasics $retirementbasics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\retirementbasics  $retirementbasics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, retirementbasics $retirementbasics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\retirementbasics  $retirementbasics
     * @return \Illuminate\Http\Response
     */
    public function destroy(retirementbasics $retirementbasics)
    {
        //
    }
}
