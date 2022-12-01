<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;
class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiket = Tiket::all();
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
        $table = Tiket::create([
        "nama" => $request->nama,
        "alamat" => $request->alamat,
        "jenis_konser" => $request->jenis_konser,
        "set_tempatduduk" => $request->set_tempatduduk,
        "harga" => $request->harga,
        "date_of_konser" => $request->date_of_konser
    ]);
        $table = new tiket();
        $table->nama = $request->nama ? $request->nama : $table->nama;
        $table->alamat = $request->alamat ? $request->alamat : $table->alamat;
        $table->jenis_konser = $request->jenis_konser ? $request->jenis_konser : $table->jenis_konser;
        $table->set_tempatduduk = $request->set_tempatduduk ? $request->set_tempatduduk : $table->set_tempatduduk;
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
        $table = Tiket::find($id);
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
        $table = Tiket::find($id);
        if ($table){
            $table->nama = $request->nama ? $request->nama : $table->nama;
            $table->alamat = $request->alamat ? $request->alamat : $table->alamat;
            $table->jenis_konser = $request->jenis_konser ? $request->jenis_konser : $table->jenis_konser;
            $table->set_tempatduduk = $request->set_tempatduduk ? $request->set_tempatduduk : $table->set_tempatduduk;
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
        $table = Tiket::find($id);
        if ($table){
            $table->delete();
            return ["message" => "Delete succes"];
        }else{
            return ["message" => "Data not found"];
        }
    }
}
