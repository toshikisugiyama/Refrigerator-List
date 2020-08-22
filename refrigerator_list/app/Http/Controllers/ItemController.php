<?php

namespace App\Http\Controllers;

use App\Item;
use App\Refrigerator;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Item::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $max_row = Refrigerator::find($request->refrigerator_id)->rows;
        $request->validate([
            'row' => "max:$max_row"
        ]);
        Item::create([
            'refrigerator_id' => $request->refrigerator_id,
            'row' => $request->row,
            'column' => $request->column,
            'name' => $request->name,
            'expiration_date' => $request->expiration_date,
            'photo_url' => $request->photo_url
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return Item::find($item->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $max_row = Refrigerator::find($request->refrigerator_id)->rows;
        $request->validate([
            'row' => "max:$max_row"
        ]);
        Item::find($item->id)->update([
            'row' => $request->row,
            'column' => $request->column,
            'name' => $request->name,
            'expiration_date' => $request->expiration_date,
            'photo_url' => $request->photo_url
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        Item::find($item->id)->delete();
    }
}
