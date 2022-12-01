<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bayaran;
class BayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Bayaran::all();
        return response()->json([
            "message" => "Load data success",
            "data" => $table
        ], 200);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $table = Bayaran::create([
            "jenis_konser" => $request->jenis_konser,
            "jumlah_tiket" => $request->jumlah_tiket,
            "harga" => $request->harga,
            "date_of_konser" => $request->date_of_konser
        ]);
            $table = new bayaran();
            $table->jenis_konser = $request->jenis_konser ? $request->jenis_konser : $table->jenis_konser;
            $table->jumlah_tiket = $request->jumlah_tiket ? $request->jumlah_tiket : $table->jumlah_tiket;
            $table->harga = $request->harga ? $request->harga : $table->harga;
            $table->date_of_konser = $request->date_of_konser ? $request->date_of_konser : $table->date_of_konser;
            $table->save();
    
            // return $table;
            return response()->json([
                "message" => "Store success",
                "data" => $table
            ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $table = Bayaran::find($id);
        if($table){
            return $table;
        }else{
            return ["message" => "Data not found"];
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $table = Bayaran::find($id);
        if ($table){
            $table->jenis_konser = $request->jenis_konser ? $request->jenis_konser : $table->jenis_konser;
            $table->jumlah_tiket = $request->jumlah_tiket ? $request->jumlah_tiket : $table->jumlah_tiket;
            $table->harga = $request->harga ? $request->harga : $table->harga;
            $table->date_of_konser = $request->date_of_konser ? $request->date_of_konser : $table->date_of_konser;
            $table->save();

            return $table;
        }else{
            return ["message" => "Data not found"];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table = Bayaran::find($id);
        if ($table){
            $table->delete();
            return ["message" => "Delete succes"];
        }else{
            return ["message" => "Data not found"];
        }
    }
}
