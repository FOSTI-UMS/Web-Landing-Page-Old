@extends('layouts.dash')
@section('content')
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Post
        <small>Edit the article</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-files-o"></i>Post</a></li>
        <li class="active">Create Post</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Judul
                <small></small>
              </h3><label>&nbsp;</label>
              <form action="/admin/{{$blog->id}}" method="post" enctype="multipart/form-data">
              <input type="text" name="title" value="{{ (old('post')) ? old('post') : $blog->title }}" class="form-control" placeholder="Tuliskan Judul">
              @if($errors->has('title'))
                <p> {{ $errors->first('title') }} </p>
              @endif
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">

              <textarea id="post" name="post" rows="10" cols="80" placeholder="Silahkan tulis artikel untuk Fosti">
              {{ (old('post')) ? old('post') : $blog->post }}
              </textarea><br>
                    @if($errors->has('post'))
                       {{ $errors->first('post') }}
                    @endif

                    <div class="row">
                      <div class="col-md-3">
                        Kategori :&nbsp;
                        <select class="" name="kategori">
                          <option value="Berita" selected name = "kategori">Berita</option>
                          <option value="Fosti" selected name = "kategori">Fosti</option>
                          <option value="Tutorial" name = "kategori">Tutorial</option>
                          <option value="Event" name = "kategori">Event</option>
                        </select><br>
                      </div>
                      <div class="col-md-4">
                        Ditulis oleh: &nbsp;
                        <input type="text" name="penulis" value="{{ (old('penulis')) ? old('penulis') : $blog->penulis }}" class="form-control" placeholder="Nama penulis">
                        @if($errors->has('penulis'))
                          <p> {{ $errors->first('penulis') }} </p>
                        @endif
                      </div>
                      <div class="col-md-5">
                        Gambar :&nbsp;
                        <input type="file" name="img" value="">

                        @if($errors->has('img'))
                          <p> {{ $errors->first('img') }} </p>
                        @endif
                        <br>
                      </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">
                    <input class="btn btn-primary btn-flat" type="submit" name="submit" value="Update">
              </form>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
