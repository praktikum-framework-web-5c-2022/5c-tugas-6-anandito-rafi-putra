<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    
    public function index(){
        $type = Type::all();
        $all_produk = Type::withCount('produks')->get();
        return view('type.index', compact('type','all_produk'));
    }

    public function create(){
        $all_produk = Type::all();
        return view('type.create',compact('all_produk'));
    }

    public function createproduct(){
        $type = Type::get();
        $all_produk = Type::all();
        return view('produk.create',compact('type','all_produk'));
    }

    public function store(Request $request){
        Type::create($request->all());
        return redirect()->route('types.index')->with('success', 'Tipe Berhasil Ditambahkan');
    }

    public function storeproduct(Request $request){
        $this->validate($request,[
            'kode_produk'=>'required|max:5',
            'nama'=>'required',
            'ukuran'=>'required',
            'harga' => 'required',
        ]);
        Produk::create($request->all());
        return redirect()->route('types.index')->with('success', 'Produk Berhasil Ditambahkan');
    }

    public function destroy($id){
        $type = type::findOrFail($id);
        $type->delete();
        return redirect()->route('types.index')->with('success', 'Tipe Berhasil Dihapus');
    }
}
