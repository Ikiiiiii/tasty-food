<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    function show(){
        $data['contact'] = Contact::all();
        return view('admin.dataKontak',$data);
    }

    function create(Request $req){
        Contact::create([
            'subject' => $req->subject,
            'name' => $req->name,
            'email' => $req->email,
            'message' => $req->message
        ]);
        return redirect('kontak');
    }

    function delete($id){
        $contact = Contact::where('id',$id)->first();
        $contact->delete();
        return redirect('admin/kontak');
    }
}
