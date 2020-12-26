<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Ip;
use App\Models\Plgn;

class BlogController extends Controller
{
  public function index(Request $request)
  {
    // ambil ip visitor
    $a = $request->ip();
    // ngecek di db udah ada belum
    $cek = Ip::where('ip', $a)->get();
    // dd($cek);
    if (count($cek) == 0) {
      Ip::create([
        'ip' => $a,
      ]);
    }

    //bagian recent post
    $terbaru = Blog::orderBy('created_at', 'desc')->take(3)->get();

    // bagian search dan paginate
    $search = urlencode($request->input('search'));
    $blogs = Blog::when($search, function($query) use ($request) {
      $search = urlencode($request->input('search'));
      $query->where('title', 'like', '%'.$search.'%');
    })->orderBy('created_at','desc')->paginate(3);

    $blogs->appends($request->only('search'));

    return view('blogs.index', compact('blogs', 'terbaru'));
  }

  public function subs(Request $request)
  {

    $a = $request->subs;
    // ngecek di db udah ada belum
    $cek = Plgn::where('emails', $a)->get();
    // dd($cek);
    if (count($cek) == 0) {
      $subs = Plgn::create([
        'emails' => $request->subs,
      ]);
    }

    return redirect('/blog')->with('sub_suc', 'Terima kasih sudah berlangganan');
  }

  public function show($slug)
  {

    $blog = Blog::where('slug', $slug)->first();
    if(empty($blog)) abort(404);

    //bagian recent post
    $terbaru = Blog::orderBy('created_at', 'desc')->take(3)->get();

    return view('blogs.single', compact('blog', 'terbaru'));

  }
}
