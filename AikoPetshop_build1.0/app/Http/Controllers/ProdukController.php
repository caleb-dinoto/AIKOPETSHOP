<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Model;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        return view('admin.createproduk');
    }

    public function displayall()
    {
        $produks = Produk::all();
        return view('products', ['produks' => $produks]);
    }

    public function showall()
    {
        $produks = Produk::all();
        return view('admin.dataproduk', ['produks' => $produks]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_produk' => 'required|max:100',
            'link' => 'required',
            'harga' => 'required|max:20',
        ]);

        $path = $request->file('photo')->storePublicly('photos', 'public');
        $ext = $request->file('photo')->extension();

        $produk = new Produk;
        $produk->nama_produk = $request->nama_produk; 
        $produk->link = $request->link; 
        $produk->harga = $request->harga;
        $produk->photo = $path; 
        $produk->save();

        return redirect('/admin/dataproduk')->with('success', 'Berhasil buat!');
    } 

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('admin.editproduk', ['produk' => $produk]);
    }

    public function update(Request $request, $id)
    {
        $path = $request->file('photo')->storePublicly('photos', 'public');
        $ext = $request->file('photo')->extension();

        $produk = Produk::findOrFail($id);
        $produk->nama_produk = $request->nama_produk; 
        $produk->link = $request->link; 
        $produk->harga = $request->harga;
        $produk->photo = $path; 
        $produk->save();

        return redirect('/admin/dataproduk');
    }

    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        return redirect('/admin/dataproduk');
    }
}
