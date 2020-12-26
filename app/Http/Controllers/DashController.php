<?php

namespace App\Http\Controllers;

use App\Models\Ip;
use App\Models\Blog;
use App\Models\Plgn;
use App\Mail\Subs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class DashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $blog = Blog::all();

        $ip = Ip::get()->count();

        return view('dash.home', compact('blog', 'ip'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('dash.post.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
    {
      $this->validate($request, [
        'title' => 'required|min:5',
        'post' => 'required|min:30',
        'kategori' => 'required',
        'penulis' => 'required',
        'img' => 'mimes:jpeg,jpg,png|required|max:2000'
      ]);

      // buat slug url
      $slug = str_slug($request->title, '-');

      // cek slug kembar
      if (Blog::where('slug', $slug)->first() != null) {
        $slug = $slug . '-' . time();
      }

      // penamaan gambar
      $img = time(). '.png';
      // request gambar
      $request->file('img')->storeAs('blog/', $img);

      $create = Blog::create([
        'title' => $request->title,
        'slug' => $slug,
        'post' => $request->post,
        'kategori' => $request->kategori,
        'penulis' => $request->penulis,
        'featured_img' => $img
      ]);

      $plgn = Plgn::all();
      foreach ($plgn as $pl) {
          Mail::to($pl->emails)->send(new Subs($create));
      }

      return redirect('/admin/list')->with('Create_succes', 'Berhasil memposting');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    //   $blogs = Blog::paginate(5);
    //  //  $no = 1;
     //
    //   return view('dash.post.list', compact('blogs'));
    }

    public function daftar()
    {
      // dd('ping');
      $blogs = Blog::orderBy('created_at','desc')->paginate(5);

      return view('dash.post.list', compact('blogs'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $blog = Blog::findOrFail($id);

      if(!$blog) abort(404);

      return view('dash.post.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'title' => 'required|min:5',
        'post' => 'required|min:30',
        'kategori' => 'required',
        'penulis' => 'required',
        'img' => 'mimes:jpeg,jpg,png|required|max:2000'
      ]);

      $update = Blog::findOrFail($id);
      // penamaan gambar
      $img = time(). '.png';
      // request gambar
      // buat slug url
      $slug = str_slug($request->title, '-');

      // cek slug kembar
      if (Blog::where('slug', $slug)->first() != null) {
        $slug = $slug . '-' . time();
      }
      $request->file('img')->storeAs('blog/', $img);
      $update->update([
        'slug' => $slug,
        'title' => $request->title,
        'post' => $request->post,
        'penulis' => $request->penulis,
        'kategori' => $request->kategori,
        'featured_img' => $img
      ]);

      return redirect('admin/list')->with('Update_succes', 'Berhasil di perbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $del = Blog::find($id);
      $del->delete();

      return redirect('/admin/list')->with('Delete_succes', 'Artikel berhasil di hapus');
    }
}
