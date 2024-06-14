<?php

namespace App\Http\Controllers;
use App\musik;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view("home", ["key" => "home"]);
    }

    public function musik()
    {
        $musik = Musik::orderBy('id', 'desc')->get();
        return view("musik", ["key" => "musik", "ms" => $musik]);
    }

    public function formaddmusik()
    {
        return view("formadd", ["key" => "musik"]);
    }

    public function savemusik(Request $request)
    {
        $file_name= time().'-'.$request->file('poster')->getClientOriginalName();
        $path = $request->file('poster')->storeAs('poster', $file_name, 'public');

        musik::create([
            'title' => $request->title,
            'artist'  => $request->artist,
            'genre'   => $request->genre, 
            'album'   => $request->album,
            'duration'=> $request->duration,  
            'year'    => $request->year, 
            'listener'=> $request->listener, 
            'poster' => $path
        ]);

        return redirect("musik")->with('alert','Data Berhasil di Simpan');
    }

    public function about()
    {
        return view("about", ["key" => "about"]);
    }

    public function faq()
    {
        return view("faq", ["key" => "faq"]);
    }

    public function formeditmusik($id)
    {
        $musik = Musik::find($id);
        return view("form-edit", ["key" => "musik", "ms" => $musik]);
    }

    Public function updatemusik($id, Request $request)
    {
        $musik = Musik::find($id);

        $musik->title = $request->title; 
        $musik->artist = $request->artist;
        $musik->genre = $request->genre; 
        $musik->album = $request->album;
        $musik->duration = $request->duration;
        $musik->year = $request->year;
        $musik->listener = $request->listener;

        if ($request->poster)
        {
            if($musik->poster)
            {
                Storage::disk('public')->delete($musik->poster);
            }

            $file_name= time().'-'.$request->file('poster')->getClientOriginalName();
            $path = $request->file('poster')->storeAs('poster', $file_name, 'public');
            $musik->poster = $path;
        }
        $musik->save();
        return redirect("/musik")->with('alert', 'Data Berhasil di Ubah');
    }

    public function deletemusik($id)
    {
        $musik = Musik::find($id); 

        if($musik->poster)
        {
            Storage::disk('public')->delete($musik->poster);
        }

        $musik->delete();
        return redirect("/musik")->with('alert','Data Berhasil di Hapus');
    }

    public function login()
    {
        return view("login");
    }

    Public function edituser()
    {
        return view("edituser", ["key" => ""]);
    }

    public function updateuser(Request $request)
    {
        if($request->password_baru == $request->konfirmasi_password)
        {
            $user = Auth::user();
            $user->password = bcrypt($request->password_baru);
            $user ->save();
            return redirect("/user")->with("info", "Password Berhasil di Ubah");  
        }
        else 
        {
            return redirect("/user")->with("info", "Password Gagal di Ubah"); 
        }
    }
}
