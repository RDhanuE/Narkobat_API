<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorestokRequest;
use App\Http\Requests\UpdatestokRequest;
use App\Http\Resources\StockResource;
use App\Models\stok;
use App\Models\apotik;
use App\Models\obat;
use Illuminate\Http\Request;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stok = Stok::with(['obat', 'apotik'])->get();

        // $data = $stok->map(function ($stok) {
        //     return [
        //         'id' => $stok->id,
        //         'stok' => $stok->stok,
        //         'obat_name' => $stok->obat->nama_obat,  
        //         'apotik_name' => $stok->apotik->nama_apotik,
        //     ];
        // });

        return StockResource::collection($stok);
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
    public function store(StorestokRequest $request)
    {
        $obat = $request->nama_obat;
        $obat = Obat::where('nama_obat', 'like', "%" .$obat. "%")->first();
        $apotik = $request->get('apotik');
        
        $stok = Stok::where('id_obat', $obat->id)->where('id_apotik', $apotik->id)->first();
        if ($stok){
            $stok->stok += $request->stok;
            $stok->save();
        }
        else{
            $stok = new stok();
            $stok -> id_obat = $obat -> id;
            $stok -> id_apotik = $apotik -> id;
    
            $stok -> stok = $request->stok;
            $stok -> save();
        }

        return response()->json($stok);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $stok = Stok::with(['obat', 'apotik'])->find($id);

        // $data = [
        //         'id' => $stok->id,
        //         'stok' => $stok->stok,
        //         'obat_name' => $stok->obat->nama_obat,  
        //         'apotik_name' => $stok->apotik->nama_apotik,
        //     ];
        return new StockResource($stok);
    }

    public function show_apotik($id)
    {
        $stok = Stok::with(['obat', 'apotik'])->where('id_apotik', $id)->get();

        // $data = [
        //         'id' => $stok->id,
        //         'stok' => $stok->stok,
        //         'obat_name' => $stok->obat->nama_obat,  
        //         'apotik_name' => $stok->apotik->nama_apotik,
        //     ];
        return StockResource::collection($stok);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(stok $stok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatestokRequest $request, stok $stok)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $stok = stok::find($id);
        $stok->delete();

        return response()->json('Stok deleted succesfully');
    }

    public function add(Request $request, $id){
        $stok = stok::find($id);
        $jumlah = $request -> jumlah;

        $request->validate([
            'jumlah' => 'required|integer|min:1'
        ]);

        $stok->stok += $jumlah;
        $stok->save();

        return response()->json($stok);
    }

    public function reduce(Request $request, $id){
        $stok = stok::find($id);
        $jumlah = $request -> jumlah;

        $request->validate([
            'jumlah' => 'required|integer|min:1'
        ]);

        $stok->stok -= $jumlah;
        $stok->save();

        return response()->json($stok);
    }
}
