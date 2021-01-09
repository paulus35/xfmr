<?php

namespace App\Http\Controllers;

use App\Models\Xfmr;
use Illuminate\Http\Request;

class XfmrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('xfmr.index');
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
     * @param  \App\Models\Xfmr  $xfmr
     * @return \Illuminate\Http\Response
     */
    public function show(Xfmr $xfmr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Xfmr  $xfmr
     * @return \Illuminate\Http\Response
     */
    public function edit(Xfmr $xfmr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Xfmr  $xfmr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Xfmr $xfmr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Xfmr  $xfmr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Xfmr $xfmr)
    {
        //
    }
}
