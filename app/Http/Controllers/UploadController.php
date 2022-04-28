<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;

class UploadController extends Controller
{
    public function index()
    {
        $upload = Upload::all();

        return view('explore', compact('uploads'));
    }
    public function search(Request $request)
    {
        $shares = Share::where('Name', 'LIKE', '%'.$request->search.'%')->orWhere('Description', 'LIKE', '%'.$request->search.'%')->get();
     
        return view('explore', compact('shares'));
    }

    public function item($id)
    {
        $data = Upload::find($id);
        $email = $data->Email_of_user;
        $itemuser = Upload::where('Email_of_user', $email)->inRandomOrder()->limit(6)->get();

        return view('item', compact('data', 'itemuser'));
    }

    public function download($id)
    {
        $data = Upload::find($id);

        return response()->download('upload_image/'.$data->file);
    }

    public function tambahupload()
    {
        return view('tambahupload');
    }


    public function simpanupload(Request $request)
    {
        $request->validate([
            'file' => 'required',
            'file.*' => 'mimes:jpg,jpeg,png|max:5000'
        ]);

        if ($request->hasfile('file')) {            
            $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('file')->getClientOriginalName());
            $request->file('file')->move(public_path('upload_image'), $filename);
             $share = share::create([
            'file' => $filename,
            'Name' => $request->name,
            'Description' => $request->description,
            'Category' => $request->category,
            'Name_of_user' => $request->Name_of_user,
            'Email_of_user' => $request->Email_of_user
        ]);
            echo'Success';
        }else{
            echo'Gagal';
        }

        return redirect()->route('explore');
    }
}
