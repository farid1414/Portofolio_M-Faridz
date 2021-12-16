<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\Post;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Pesan;
use File;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $profil = Profil::find(1);
        return view('/index',compact('profil'));
    }
    public function blog()
    {
        $post =Post::all();
        return view('/blog',compact('post'));
    }
    public function about()
    {
        $profil = Profil::find(1);
        return view('/about',compact('profil'));
    }
    public function contact()
    {
        return view('/contact');
    }
    public function buatProfil()
    {
        return view('/profil');
    }
    public function postProfil(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|max:255',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:5048',
            'jurusan' => 'required',
            'bio' => 'required',
            'tentang' => 'required',
            'bio' => 'required',
            'github' => 'required',
            'fb' => 'required',
            'ln' => 'required',
        ]);

        $gambar = $request->gambar;
        $new_gambar = time() . ' - ' . $gambar->getClientOriginalName();
        Profil::create([
            'nama' => $request->nama,
            'gambar' => $new_gambar,
            'jurusan' =>$request->jurusan,
            'bio' =>$request->bio,
            'tentang' =>$request->tentang,
            'github' =>$request->github,
            'fb' =>$request->fb,
            'ln' =>$request->ln,
        ]);

        $gambar->move('img/', $new_gambar);
        return redirect('/');
    }

    public function editProfil()
    {
        $profil = Profil::find(1);

        return view('/edit_profil',compact('profil'));
    }

    public function postEdit(Request $request, $id)
    {
        $profil =Profil::find($id);

        $this->validate($request, [
            'nama' => 'required|max:255',
            'jurusan' => 'required',
            'bio' => 'required',
            'tentang' => 'required',
            'bio' => 'required',
            'github' => 'required',
            'fb' => 'required',
            'ln' => 'required',
        ]);


        if ($request->has('gambar')) {
            $path = "img/";
            File::delete($path  .  $profil->gambar);
            $gambar = $request->gambar;
            $new_gambar = time() . ' - ' . $gambar->getClientOriginalName();
            $gambar->move('img/', $new_gambar);

            $data = [
                'nama' => $request->nama,
                'gambar' => $new_gambar,
                'jurusan' =>$request->jurusan,
                'bio' =>$request->bio,
                'tentang' =>$request->tentang,
                'github' =>$request->github,
                'fb' =>$request->fb,
                'ln' =>$request->ln,
            ];
        } else {
            $data = ([
                'nama' => $request->nama,
                'jurusan' =>$request->jurusan,
                'bio' =>$request->bio,
                'tentang' =>$request->tentang,
                'github' =>$request->github,
                'fb' =>$request->fb,
                'ln' =>$request->ln,
            ]);
        }

        $profil->update($data);
        return redirect('/')->with('sukses','Profil portofolio anda berhasil diperbarui');
    }

    public function blogSaya()
    {
        $post =Post::all();
        return view('/blog_saya',compact('post'));
    }
    public function createBlog()
    {
        $kategori = Kategori::all();
        return view ('/buat_blog',compact('kategori'));
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }

    public function postBlog(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'kategoris_id' => 'required',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:5048',
            'body' => 'required',
        ]);

        $cuplikan = Str::limit(strip_tags($request->body),150,'...');
        $gambar = $request->gambar;
        $new_gambar = time() . ' - ' . $gambar->getClientOriginalName();

        Post::create([
            'users_id' => 1,
            'judul' =>$request->judul,
            'slug' =>$request->slug,
            'kategoris_id' =>$request->kategoris_id,
            'gambar' =>$new_gambar,
            'cuplikan' =>$cuplikan,
            'body' =>$request->body,
        ]);

        $gambar->move('img/', $new_gambar);

        return redirect ('/')->with('sukses','Post Berhasil');
    }

    public function read (Post $post)
    {
        // $post =Post::find($post);

        return view('/read',compact('post'));
    }

    public function readKategori($id)
    {
        $kategori =Kategori::find($id);

        return view('/read_kategori',compact('kategori'));
    }

    public function postRegis(Request $request)   
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:6|alpha_num',
        ]);
        $pass = $request->password;

        // tambbah data ke user 
        $user = new \App\Models\User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($pass);
        $user->remember_token = Str::random(60);
        $user->save();

        return redirect('/login')->with('sukses', 'Registrasi Anda berhasil silahkan login');
    }
    public function postLogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/');
        }
        return Redirect::back()->with('gagal', 'Email atau kata sandi anda salah');
    }
    public function logout()
    {
        Auth::logout();
        return Redirect('/');
    }
    public function login()
    {
        return view('/login');
    }
    public function registrasi()
    {
        return view('/registrasi');
    }

    public function postPesan(Request $request)
    {
        Pesan::create([
            'users_id' => Auth()->user()->id,
            'subjek' =>$request->subjek,
            'pesan' =>$request->pesan,
        ]);
        return redirect ('/');

    }
}