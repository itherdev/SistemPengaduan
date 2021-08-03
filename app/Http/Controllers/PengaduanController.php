<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduan = DB::table('pengaduan')->paginate(10);
        return view('pengaduan.pengaduan', ['pengaduan' => $pengaduan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('pengaduan.pengaduan-tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('pengaduan')->insert([
            [
                'nam_pelapor' => $request->nam_pelapor,
                'email_pelapor' => $request->email_pelapor,
                'phone_pelapor' => $request->phone_pelapor,
                'alama_pelapor' => $request->alama_pelapor,

                'name_pelaku' => $request->name_pelaku,
                'telp_pelaku' => $request->telp_pelaku,
                'alamat_pelaku' => $request->alamat_pelaku,
                'bukti' => $request->bukti,
                'jenis_narkoba' => $request->jenis_narkoba,
                'peran_pelaku' => $request->peran_pelaku,
                'profesi_pelaku' => $request->profesi_pelaku,
                'alamat_kejadian' => $request->alamat_kejadian,
                'tanggal_kejadian' => $request->tanggal_kejadian,
                'waktu_kejadian' => $request->waktu_kejadian,
                'isi_pengaduan' => $request->isi_pengaduan
                // 'info_pengaduan' => $request->info_pengaduan

            ],

        ]);

        return redirect()->route('pengaduan')->with('message', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengaduan = DB::table('pengaduan')->where('id', $id)->first();
        return view('pengaduan.pengaduan-detail', ['pengaduan' => $pengaduan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $pengaduan = DB::table('pengaduan')->where('id', $id)->first();
        return view('pengaduan.pengaduan-edit', ['pengaduan' => $pengaduan]);
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
        // $this->_validation($request);
        DB::table('pengaduan')->where('id', $id)->update([
                'nam_pelapor' => $request->nam_pelapor,
                'email_pelapor' => $request->email_pelapor,
                'phone_pelapor' => $request->phone_pelapor,
                'alama_pelapor' => $request->alama_pelapor,

                'name_pelaku' => $request->name_pelaku,
                'telp_pelaku' => $request->telp_pelaku,
                'alamat_pelaku' => $request->alamat_pelaku,
                'bukti' => $request->bukti,
                'jenis_narkoba' => $request->jenis_narkoba,
                'peran_pelaku' => $request->peran_pelaku,
                'profesi_pelaku' => $request->profesi_pelaku,
                'alamat_kejadian' => $request->alamat_kejadian,
                'tanggal_kejadian' => $request->tanggal_kejadian,
                'waktu_kejadian' => $request->waktu_kejadian,
                'isi_pengaduan' => $request->isi_pengaduan
                // 'info_pengaduan' => $request->info_pengaduan

        ]);
        return redirect()->route('pengaduan')->with('message', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pengaduan')->where('id', $id)->delete();

        return redirect()->back()->with('message', 'Data berhasil dihapus');
    }
}
