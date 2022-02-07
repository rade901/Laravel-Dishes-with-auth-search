<?php

namespace App\Http\Controllers;

use App\Models\dish_tag;
use App\Http\Requests\Storedish_tagRequest;
use App\Http\Requests\Updatedish_tagRequest;

class DishTagController extends Controller
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
     * @param  \App\Http\Requests\Storedish_tagRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storedish_tagRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dish_tag  $dish_tag
     * @return \Illuminate\Http\Response
     */
    public function show(dish_tag $dish_tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dish_tag  $dish_tag
     * @return \Illuminate\Http\Response
     */
    public function edit(dish_tag $dish_tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedish_tagRequest  $request
     * @param  \App\Models\dish_tag  $dish_tag
     * @return \Illuminate\Http\Response
     */
    public function update(Updatedish_tagRequest $request, dish_tag $dish_tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dish_tag  $dish_tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(dish_tag $dish_tag)
    {
        //
    }
}
