<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota=Anggota::latest()->paginate(10);
		return view('anggota.index', compact('anggota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anggota = new Anggota();
		return view('anggota.create', compact('anggota'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tglJam=date('Y-m-d h:i:s');
		//cek validasi
		request()->validate(Anggota::$rules);
		//mulai transaksi
		\DB::beginTransaction();
		try
		{
			//simpan ke tabel kota
			\DB::table('anggota')->insert(['nama'=>$request->nama,
										   'alamat'=>$request->alamat,
										   'tempat_lahir'=>$request->tempat_lahir,
										   'tanggal_lahir'=>$request->tanggal_lahir,
										   'jenis_kelamin'=>$request->jenis_kelamin,
										   'status'=>$request->status,
										   'telepon'=>$request->telepon,
										   'keterangan'=>$request->keterangan,
										   'created_at'=>$tglJam]);
			//jika tidak ada kesalahan commit/simpan
			\DB::commit();
			return redirect()->route('anggota.index')->with('success', 'anggota created successfully.');
		} 
		catch (\Throwable $e) 
		{
			//jika terjadi kesalahan batalkan semua
			\DB::rollback();
			return redirect()->route('anggota.index')->with('success', 'Penyimpanan dibatalkan semua, ada kesalahan......');
		}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anggota =Anggota::find($id);
		return view('anggota.show', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anggota =Anggota::find($id);
		return view('anggota.edit', compact('anggota'));
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
        $tglJam=date('Y-m-d h:i:s');
		request()->validate(Anggota::$rules);
		//mulai transaksi
		\DB::beginTransaction();
		try
		{
			\DB::table('anggota')->where('id',$id)->update(['nama'=>$request->nama,
															'alamat'=>$request->alamat,
															'tempat_lahir'=>$request->tempat_lahir,
															'tanggal_lahir'=>$request->tanggal_lahir,
															'status'=>$request->status,
															'telepon'=>$request->telepon,
															'keterangan'=>$request->keterangan,
															'updated_at'=>$tglJam]);
			//$anggota->update($request->all());
			\DB::commit();
			return redirect()->route('anggota.index')->with('success', 'Anggota updated successfully');
		}
		catch (\Throwable $e) 
		{
			//jika terjadi kesalahan batalkan semua
			\DB::rollback();
			return redirect()->route('anggota.index')->with('success', 'Anggota Batal diubah, ada kesalahan');
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
        //mulai transaksi
		\DB::beginTransaction();
		try
		{
			//hapus rekaman tabel kota
			$anggota =Anggota::find($id)->delete();
			\DB::commit();
			return redirect()->route('anggota.index')->with('success', 'anggota deleted successfully');
		} 
		catch (\Throwable $e) 
		{
			//jika terjadi kesalahan batalkan semua
			\DB::rollback();
			return redirect()->route('anggota.index')->with('success', 'anggota ada kesalahan hapus batal... ');
		}
    }
}
