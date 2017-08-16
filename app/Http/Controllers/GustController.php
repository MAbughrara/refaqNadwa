<?php

namespace App\Http\Controllers;

use App\Gust;
use Illuminate\Http\Request;

class GustController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gusts=Gust::all();

        return view('index',compact('gusts'));
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
     * @param  \App\Gust  $gust
     * @return \Illuminate\Http\Response
     */
    public function show(Gust $gust)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gust  $gust
     * @return \Illuminate\Http\Response
     */
    public function edit(Gust $gust)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gust  $gust
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gust $gust)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gust  $gust
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gust $gust)
    {
        //
    }
}
