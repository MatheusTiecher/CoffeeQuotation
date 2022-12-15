<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserQuotationRequest;
use App\Http\Requests\UpdateUserQuotationRequest;
use App\Models\UserQuotation;

class UserQuotationController extends Controller
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
     * @param  \App\Http\Requests\StoreUserQuotationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserQuotationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserQuotation  $userQuotation
     * @return \Illuminate\Http\Response
     */
    public function show(UserQuotation $userQuotation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserQuotation  $userQuotation
     * @return \Illuminate\Http\Response
     */
    public function edit(UserQuotation $userQuotation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserQuotationRequest  $request
     * @param  \App\Models\UserQuotation  $userQuotation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserQuotationRequest $request, UserQuotation $userQuotation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserQuotation  $userQuotation
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserQuotation $userQuotation)
    {
        //
    }
}
