<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserQuotationItemRequest;
use App\Http\Requests\UpdateUserQuotationItemRequest;
use App\Models\UserQuotationItem;

class UserQuotationItemController extends Controller
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
     * @param  \App\Http\Requests\StoreUserQuotationItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserQuotationItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserQuotationItem  $userQuotationItem
     * @return \Illuminate\Http\Response
     */
    public function show(UserQuotationItem $userQuotationItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserQuotationItem  $userQuotationItem
     * @return \Illuminate\Http\Response
     */
    public function edit(UserQuotationItem $userQuotationItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserQuotationItemRequest  $request
     * @param  \App\Models\UserQuotationItem  $userQuotationItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserQuotationItemRequest $request, UserQuotationItem $userQuotationItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserQuotationItem  $userQuotationItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserQuotationItem $userQuotationItem)
    {
        //
    }
}
