<?php

namespace App\Http\Controllers;

use App\SuratMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $masuk=SuratMasuk::paginate(1);
        $masuk=DB::table('SuratMasuk')  ->paginate(2);
        return view('admin/suratmasuk', compact('masuk'));
    }
    public function cari(Request $request)
    {
        $cari = $request->input('cari');

        $masuk = DB::table('suratmasuk')->select()
            ->where('AlamatPengirim', 'LIKE', '%'.$cari.'%')
            ->orwhere('NomorSurat', 'LIKE', '%'.$cari.'%')
            ->orwhere('Perihal', 'LIKE', '%'.$cari.'%')
            // ->orwhere('Foto', 'LIKE', '%'.$cari.'%')
            ->paginate(2);

        return view('admin/suratmasuk', compact('masuk'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/masuk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // \App\SuratMasuk::create($request->all());
        $SuratMasuk = new SuratMasuk;
        $SuratMasuk->AlamatPengirim=$request->AlamatPengirim;
        $SuratMasuk->NomorSurat=$request->NomorSurat;
        $SuratMasuk->Perihal=$request->Perihal;
        
        if($request->hasFile('image')){
            $request->file('image')->move('lte/dist/images/', $request->file('image')->getClientOriginalName());
            $SuratMasuk->Foto = $request->file('image')->getClientOriginalName();
        }
        $SuratMasuk->save();

        return redirect('/suratmasuk');
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
    public function edit($id)
    {
        //
        $item = \App\SuratMasuk::find($id);
        return view('admin/editmasuk', compact('item'));
    }

    public function update(Request $request, $id)
    {
        //
        $SuratMasuk = \App\SuratMasuk::find($id);
        $SuratMasuk->AlamatPengirim=$request->AlamatPengirim;
        $SuratMasuk->NomorSurat=$request->NomorSurat;
        $SuratMasuk->Perihal=$request->Perihal;
        
        //upload new file
        if($request->hasFile('image')){
            $request->file('image')->move('lte/dist/images/', $request->file('image')->getClientOriginalName());
            $SuratMasuk->Foto = $request->file('image')->getClientOriginalName();
            if($request->oldimg != 'nf.png'){
                File::delete('lte/dist/images/'.$request->oldimg);
            }
        }
        $SuratMasuk->save();
        return redirect('/suratmasuk');
    }

    public function destroy($id)
    {
        //

        if($item->Foto != 'default.png'){
            File::delete('lte/dist/images/'.$item->Foto);
        }
    }
 
}
