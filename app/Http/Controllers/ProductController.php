<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function show(){
        $data['product'] = Product::all(); 
        return view('admin.dataGaleri',$data);
    }

    function tampil(){
        $data['product'] = Product::all();
        return view('galeri',$data);
    }

    function add(){
        $data = [
            'action' => url('admin/galeri/create'),
            'product' => (object)[
                'nama_product' => '',
                'foto_product' => ''
            ],
        ];
        return view('admin.createGaleri',$data);
    }

    function create(Request $req){
        Product::create([
            'nama_product' => $req->nama_product,
            'foto_product' => $req->file('foto_product')->store('foto_product')
        ]);
        return redirect('admin/galeri');
    }

    function edit($id){
        $data['product'] = Product::find($id);
        $data['action'] = url('admin/galeri/update').'/'.$data['product']->id;
        $data['tombol'] = 'Update';
        $data['judul'] = 'Edit Data';
        $data['sub'] = 'Edit data berita';
        return view('admin.createGaleri', $data);
    }

    function update(Request $req){
        if($req->file('foto_product')){
            $file = $req->file('foto_product')->store('foto_product');
        }else{
            $file = DB::row('foto_product');
        }
        Product::where('id',$req->id)->update([
            'nama_product' => $req->nama_product,
            'foto_product' => $file
        ]);
        return redirect('admin/galeri');
    }

    function delete($id){
        $product = Product::where('id',$id)->first();
        $product->delete();
        Storage::delete($product->foto_product);
        return redirect('admin/galeri');
    }
}
