<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arsip;
use Carbon\Carbon;
use PDF;

class ArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Arsip::get();

    	//Mengirim variabel data dalam bentuk array kedalama view
    	return view('arsip.index', ['data'=> $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Tampil View Foem Tambah Data Mahasiswa
        return view('arsip.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('dokumen')) {
            $file = $request->file('dokumen');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('dokumen')->move("arsip", $fileName);
            $dokumen = $fileName;
        } else {
            $dokumen = NULL;
        }
        

        Arsip::create([
            'no_surat' => $request->get('no_surat'),
            'kategori' => $request->get('kategori'),
            'judul' => $request->get('judul'),
            'dokumen' => $dokumen
        ]);

		//redirect setelah berhasil simpan data
		return redirect('/')->with('status', 'Data Arsip Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Query ambil data dosen
		$data= Arsip::where('id',$id)->get();
		return view('arsip.show', ['arsip' => $data[0]]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //memanggil model, query dengan kondisi where first
        $data = Arsip::where('id', $id)->first();
        $data->delete();

        //redirect setelah berhasil simpan data
        return redirect('/')->with('status', 'Data Arsip Berhasil Dihapus!');
    }
    
}
