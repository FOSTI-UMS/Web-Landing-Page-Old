<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Blog</title>
</head>
<body>
  @if (session('sub_suc'))
    <div class="alert alert-success">
      {{ session('sub_suc') }}
    </div>
  @endif
    <form class="navbar-form" role="search" action="/blog" method="get">
      <div class="input-group add-on">
        <input class="form-control" placeholder="Search" name="search" id="search" type="text">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
        </div>
      </div>
    </form>
    <h1 align='center'>Welcome to Blog</h1>
    Terbaru:
    @foreach ($terbaru as $baru)
      <li>
        <ul>
          <a href="/blog/{{ $baru->slug }}">{{ $baru->title }}</a><br>
        </ul>
      </li>
    @endforeach
    <hr>
    Category:
    <li>
      Belum ada
    </li>
    <hr>
    <hr>
    @forelse ($blogs as $blog)
      <li>
        Judul:  <a href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a><br>
        <p>Dibuat pada {{date('d'.'/'.'m'.'/'.'Y', strtotime($blog->created_at))}} at {{ date('g:ia', strtotime($blog->created_at))}}</p>
        <img src="{{ asset('storage/blog/'. $blog->featured_img) }}" alt="" width="150">
        <p>{!! str_limit($blog->post, 40) !!}</p>        


      </li>
    @empty
      Kosong
    @endforelse($blogs as $blog)

    {{-- @if (count($blogs) == 0)
      <h3>Kosong</h3>
    @endif --}}

    {{ $blogs->links() }}
    <div class="row">
      <div class="col-sm-4">
      	<div class="single">
      	<h2>Subscribe to our Newsletter</h2>
      	<form class="" action="/blog" method="post">
          <div class="input-group">
                 <input type="email" name="subs" class="form-control" placeholder="Enter your email">
                 <span class="input-group-btn">
                   <input type="submit" class="btn btn-default" name="submit" value="Subscribe">
                 </span>
          </div>
          {{ csrf_field() }}
      	</form>
      	</div>
      </div>
    </div>

</body>
</html>
