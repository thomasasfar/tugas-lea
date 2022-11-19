<?php

namespace App\Http\Controllers;

use App\Models\DataUangMasuk;
use Illuminate\Http\Request;

class AdminMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DataUangMasuk::all();
        return view('admin.datamasuk', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create-datamasuk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DataUangMasuk::create([
            'bulan' => $request->bulan,
            'jumlah' => $request->jumlah,
        ]);
        return redirect(route("data-masuk.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, DataUangMasuk $data_masuk)
    {
        $lists = [
            "Januari",
            "Februari",
            "Maret",
            "April",
            "May",
            "Juni",
            "Juli",
            "Agustus",
            "September",
            "Oktober",
            "November",
            "Desember",
        ];
        return view('admin.edit-datamasuk', compact('data_masuk', 'lists'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataUangMasuk $data_masuk)
    {
        $data_masuk->update([
            'jumlah' => $request->jumlah,
            'bulan' => $request->bulan,
        ]);
        return redirect(route("data-masuk.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataUangMasuk $data_masuk)
    {
        $data_masuk->delete();
        return redirect(route("data-masuk.index"));
    }
}