<?php

namespace App\Http\Controllers;

use App\SuratKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;

class SuratKeluarController extends Controller
{
    
    public function index()
    {
        // pagination
        $keluar=SuratKeluar::paginate(10);

        return view('admin/suratkeluar', compact('keluar'));
    }

    public function create()
    {
        //
        return view('admin/keluar');
    }
    
    public function store(Request $request)
    {
        //
        $SuratKeluar = new SuratKeluar();
        $SuratKeluar->AlamatPenerima=$request->AlamatPenerima;
        $SuratKeluar->Tanggal=$request->Tanggal;
        $SuratKeluar->NomorSurat=$request->NomorSurat;
        $SuratKeluar->Perihal=$request->Perihal;

        if($request->hasFile('image')){
            $request->file('image')->move('lte/dist/images/', $request->file('image')->getClientOriginalName());
            $SuratKeluar->Foto = $request->file('image')->getClientOriginalName();
        }
        $SuratKeluar->save();

        return redirect('/suratkeluar');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $kel = \App\SuratKeluar::find($id);
        return view('admin/editkeluar', compact('kel'));
    }

    public function update(Request $request, $id)
    {
        //
        $SuratKeluar = \App\SuratKeluar::find($id);
        $SuratKeluar->AlamatPenerima=$request->AlamatPenerima;
        $SuratKeluar->NomorSurat=$request->NomorSurat;
        $SuratKeluar->Perihal=$request->Perihal;
    

        //upload new file
        if($request->hasFile('image')){
            $request->file('image')->move('lte/dist/images/', $request->file('image')->getClientOriginalName());
            $SuratKeluar->Foto = $request->file('image')->getClientOriginalName();
            if($request->oldimg != 'nf.png'){
                File::delete('lte/dist/images/'.$request->oldimg);
            }
        }
        $SuratKeluar->save();
        return redirect('/suratkeluar');
    }

    public function destroy($id)
    {
        if($kel->Foto != 'nf.png'){
            File::delete('lte/dist/images/'.$kel->Foto);
        }
    }
    public function carikel(Request $request)
    {
        $carikel = $request->input('carikel');

        $keluar = DB::table('suratkeluar')->select()
        ->where('AlamatPenerima', 'LIKE', '%'.$carikel.'%')
        ->orwhere('NomorSurat', 'LIKE', '%'.$carikel.'%')
        ->orwhere('Perihal', 'LIKE', '%'.$carikel.'%')
        ->get();
        // dd($keluar);
        return view('admin/suratkeluar', compact('keluar'));
    }
}
