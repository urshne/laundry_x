<?php

namespace App\Http\Controllers;

use App\Models\laundry;
use App\Http\Requests\StorelaundryRequest;
use App\Http\Requests\UpdatelaundryRequest;

class LaundryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorelaundryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorelaundryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\laundry  $laundry
     * @return \Illuminate\Http\Response
     */
    public function show(laundry $laundry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\laundry  $laundry
     * @return \Illuminate\Http\Response
     */
    public function edit(laundry $laundry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelaundryRequest  $request
     * @param  \App\Models\laundry  $laundry
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelaundryRequest $request, laundry $laundry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\laundry  $laundry
     * @return \Illuminate\Http\Response
     */
    public function destroy(laundry $laundry)
    {
        //
    }
}
