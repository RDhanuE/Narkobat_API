<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\apotik;
use App\Http\Requests\StoreapotikRequest;
use App\Http\Requests\UpdateapotikRequest;
use App\Http\Resources\ApotikResource;
use Illuminate\Http\Request;

class ApotikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $apotik = apotik::all();
        if ($request->has('name')) {
            $name = $request->query('name');
            $apotik = Apotik::where('nama_apotik', 'like', '%' . $name . '%')->get();
        }
        return ApotikResource::collection($apotik);
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
    public function store(StoreapotikRequest $request)
    {
        $apotik = new apotik();
        $apotik->nama_apotik = $request->nama_apotik;
        $apotik->alamat = $request->alamat;
        $apotik->save();
        $plainTextToken = $apotik->createToken('apitoken')->plainTextToken;
        $tokenParts = explode('|', $plainTextToken);
        $token = $tokenParts[1] ?? $plainTextToken;
        $apotik->token = $token;
        $apotik->save();

        return response()->json($apotik);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $apotik = apotik::find($id);
        return new ApotikResource($apotik);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(apotik $apotik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateapotikRequest $request, $id)
    {
        $apotik = apotik::find($id);
        $apotik->nama_apotik = $request->nama_apotik;
        $apotik->alamat = $request->alamat;
        $apotik->save();

        return response()->json($apotik);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $apotik = apotik::find($id);
        $apotik->delete();

        return response()->json('Data have been deleted succesfully');
    }
}
