
<?php

namespace App\Http\Controllers;

use App\Models\KelasSatu;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKelasSatuRequest;
use App\Http\Requests\UpdateKelasSatuRequest;
use App\Http\Controllers\Request;

class KelasSatuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKelasSatuRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(KelasSatu $kelasSatu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KelasSatu $kelasSatu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKelasSatuRequest $request, KelasSatu $kelasSatu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KelasSatu $kelasSatu)
    {
        //
    }
}
