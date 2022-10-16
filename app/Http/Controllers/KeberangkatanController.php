<?php

namespace App\Http\Controllers;

use App\Models\Keberangkatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeberangkatanController extends Controller
{
    public function index()
    {
        $keberangkatan = DB::table('keberangkatans')->paginate(10);
        return view('keberangkatan', ['keberangkatans' => $keberangkatan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        DB::table('keberangkatans')->insert([
            'asal' => $request->asal,
            'tujuan' => $request->tujuan,
            'tgl_berangkat' => $request->tgl_berangkat,
            'nama_maskapai' => $request->nama_maskapai,
            'harga' => $request->harga,
        ]);
        
        return redirect('/keberangkatan')->with('success','Keberangkatan Telah Ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keberangkatan  $keberangkatan
     * @return \Illuminate\Http\Response
     */
    public function show(Keberangkatan $keberangkatan)
    {
        //
    }

    public function edit($id)
    {
		$keberangkatan = DB::table('keberangkatans')->where('id', $id)->get();

		return view('edit',['keberangkatans' => $keberangkatan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keberangkatan  $keberangkatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Keberangkatan $keberangkatan)
    {
        DB::table('keberangkatans')->where('id',$request->id)->update([
            'asal' => $request->asal,
            'tujuan' => $request->tujuan,
            'tgl_berangkat' => $request->tgl_berangkat,
            'nama_maskapai' => $request->nama_maskapai,
            'harga' => $request->harga,
        ]);

        return redirect('/keberangkatan')->with('success','Keberangkatan Telah Diubah.');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Keberangkatan  $keberangkatan
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        DB::table('keberangkatans')->where('id',$id)->delete();

        return redirect('/keberangkatan')->with('success','keberangkatan Telah Dihapus.');
    }
}
