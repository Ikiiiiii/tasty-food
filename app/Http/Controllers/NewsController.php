<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    //
    function show(){
        $data['news'] = News::all();
        return view('admin.dataBerita',$data);
    }

    function tampil(){
        $data['news'] = News::all();
        return view('berita',$data);
    }

    function detail($id){
        $data['news'] = News::find($id);
        return view('detail.newspost', $data);
    }

    function add(){
        $data = [
            'action' => url('admin/berita/create'),
            'news' => (object)[
                'judul' => '',
                'deskripsi' => '',
                'foto' => ''
            ],
        ];
        return view('admin.createBerita',$data);
    }
    
    function create(Request $req){
        News::create([
            'judul' => $req->judul,
            'deskripsi' => $req->deskripsi,
            'foto' => $req->file('foto')->store('foto')
        ]);
        return redirect('admin/berita')->with('success', 'Data Berhasil Ditambahkan!');
    }

    function edit($id){
        $data['news'] = News::find($id);
        $data['action'] = url('admin/berita/update').'/'.$data['news']->id;
        $data['tombol'] = 'Update';
        $data['judul'] = 'Edit Data';
        $data['sub'] = 'Edit data berita';
        return view('admin.createBerita', $data);
    }

    function update(Request $req){
        if($req->file('foto')){
            $file = $req->file('foto')->store('foto');
        }else{
            $file = DB::row('foto');
        }
        News::where('id',$req->id)->update([
            'judul' => $req->judul,
            'deskripsi' => $req->deskripsi,
            'foto' => $file
        ]);
        return redirect('admin/berita')->with('success', 'Data Berhasil Di Edit!');
    }

    function delete($id){
        $news = News::where('id',$id)->first();
        $news->delete();
        Storage::delete($news->foto);
        return redirect('admin/berita');
    }


}
