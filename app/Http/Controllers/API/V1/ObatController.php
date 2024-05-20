<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Obat;
use App\Http\Requests\StoreObatRequest;
use App\Http\Requests\UpdateObatRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Check if there is a 'q' query parameter in the request
        $query = $request->query('name');

        if ($query) {
        // If there is a 'q' parameter, perform the search
            $obats = Obat::where('nama obat', 'like', "%{$query}%")->get();
        } else {
        // If there is no 'q' parameter, return all drugs
            $obats = Obat::all();
        }

        // Return a JSON response with the drugs
        return response()->json($obats);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreObatRequest $request)
    {

    // Create a new drug instance using the validated data
    $obat = new Obat();
    $obat->nama_obat = $request->nama_obat;
    $obat->jenis_obat = $request->jenis_obat;
    $obat->penyakit = $request->penyakit;
    $obat->save();


    // Return a JSON response with the created drug data and status code 201
    return response()->json($obat, 201);
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $obat = Obat::find($id);

        if (!$obat) {
            return response()->json(['message' => 'Obat not found'], 404);
        }

        return response()->json($obat);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateObatRequest $request, Obat $obat)
    {
        $validated = $request->validated();

        $obat->update($validated);

        return response()->json($obat);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $obat = Obat::find($id);
        $obat->delete();

        return response()->json('Data have been deleted succesfully');
    }


}