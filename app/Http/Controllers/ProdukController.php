<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Type;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index($id){
        $type = Type::find($id);
        $produk = Produk::where('type_id', $id)->get();
        $all_produk = Type::all();
        return view('produk.index',compact('produk','type','all_produk'));
    }

    public function edit(Produk $produk,$id){
        $produk = Produk::find($id);
        $all_produk = Type::all();
        return view('produk.edit',compact('produk','all_produk'));
    }
    
    public function updateproduct(Request $request,$id){
        $this->validate($request,[
            'kode_produk'=>'required|max:5',
            'nama'=>'required',
            'ukuran'=>'required',
            'harga' => 'required',
        ]);
        $produk = Produk::find($id);
        $produk->update($request->all());
        return redirect()->route('types.index')->with('success', 'Produk Berhasil Diubah');
    }

    public function destroy($id){
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('types.index')->with('success', 'Produk Berhasil Dihapus');
    }
}
