<?php

namespace App\Http\Controllers;

use App\Models\FieldTrip;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFieldTripRequest;
use App\Http\Requests\UpdateFieldTripRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FieldTripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $kategori = $request->kategori;
        $tema = '';
        if ($kategori) {
            $data = DB::table($kategori)->get();
            $tema = $kategori;
        } else {
            $data = FieldTrip::get();
            $tema = 'Field Trip';
        }

        $words = explode('_', $tema);
        $sentenceCaseString = '';
        foreach ($words as $word) {
            if (substr($word, -1) == 's' && $word !== 'mpls') {
                $word = substr($word, 0, -1);
            }
            $sentenceCaseString .= ucfirst($word) . ' ';
        }

        $sentenceCaseString = trim($sentenceCaseString);

        return view('gallery', [
            'data' => $data,
            'tema' => $sentenceCaseString
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFieldTripRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FieldTrip $fieldTrip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FieldTrip $fieldTrip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFieldTripRequest $request, FieldTrip $fieldTrip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FieldTrip $fieldTrip)
    {
        //
    }
}
