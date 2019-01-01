<?php

namespace App\Http\Controllers;

use App\lifeincome;
use Illuminate\Http\Request;

class LifeincomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		return view('life-income.index');
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
     * @param  \App\lifeincome  $lifeincome
     * @return \Illuminate\Http\Response
     */
    public function show(lifeincome $lifeincome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lifeincome  $lifeincome
     * @return \Illuminate\Http\Response
     */
    public function edit(lifeincome $lifeincome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lifeincome  $lifeincome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lifeincome $lifeincome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lifeincome  $lifeincome
     * @return \Illuminate\Http\Response
     */
    public function destroy(lifeincome $lifeincome)
    {
        //
    }
}
