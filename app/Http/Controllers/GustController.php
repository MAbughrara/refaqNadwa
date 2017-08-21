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
        $x=$gusts->where('age','15-25')->count();
        $y=$gusts->where('age','25-45')->count();
        $z=$gusts->where('age','45-65')->count();

        $male=$gusts->where('gender','ذكر')->count();
        $female=$gusts->where('gender','أنثى')->count();
        return view('index',compact('gusts','x','y','z','male','female'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
        ]);

        $gust=Gust::create(
            ['name'=>request('name'),
           'age'=>request('age'),
                'gender'=>request('gender'),
                'phone'=>((request('pre').request('phone')))
            ]
        );
        flash('تم إضافة الزائر بنجاح')->success();
        return redirect('/');
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
