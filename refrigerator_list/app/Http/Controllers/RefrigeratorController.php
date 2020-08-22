<?php

namespace App\Http\Controllers;

use App\Refrigerator;
use Illuminate\Http\Request;

class RefrigeratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Refrigerator::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Refrigerator::create([
            "user_id" => $request->user_id,
            "rows" => $request->rows
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Refrigerator  $refrigerator
     * @return \Illuminate\Http\Response
     */
    public function show(Refrigerator $refrigerator)
    {
        return Refrigerator::find($refrigerator->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Refrigerator  $refrigerator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Refrigerator $refrigerator)
    {
        Refrigerator::find($refrigerator->id)->update([
            'rows' => $request->rows
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Refrigerator  $refrigerator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refrigerator $refrigerator)
    {
        Refrigerator::find($refrigerator->id)->delete();
    }
}
