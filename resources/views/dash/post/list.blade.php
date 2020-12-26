@extends('layouts.dash')
@section('content')

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        @if (session('Update_succes'))
            <div class="alert alert-success" role="alert">
                {{ session('Update_succes') }}
            </div>
        @endif
        @if (session('Delete_succes'))
            <div class="alert alert-success" role="alert">
                {{ session('Delete_succes') }}
            </div>
        @endif
        @if (session('Create_succes'))
            <div class="alert alert-success" role="alert">
                {{ session('Create_succes') }}
            </div>
        @endif
        <h1>
          Daftar Artikel
          <small>Silahkan</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-files-o"></i>Post</a></li>
          <li class="active">List Post</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Daftar Artikel</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Isi</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                  </tr>
                  </thead>
                  <tbody>

                  <tr>
                    @foreach ($blogs as $blog)
                    <td>{{ $blog->id }}</td>
                    <td><a href="/blog/{{ $blog->slug }}">{{ $blog->title }}</td>
                    <td>{{ $blog->kategori }}</td>
                    <td>{!! str_limit($blog->post, 40) !!}</td>
                    <td>

                      {{-- <form method="post" action="/admin/{{$blog->id}}/edit" >

                        {{csrf_field()}}
                        <input class="btn btn-success" type="submit" value="EDIT">
                        <input type="hidden" name="_method" value="put">

                      </form> --}}<a href="/admin/{{$blog->id}}/edit" role="button" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                      <form class="" action="/admin/{{ $blog->id }}" method="post">
                        {{-- <input class="btn btn-danger" type="submit" name="delete" value="DELETE"> --}}
                        <button class="btn btn-danger" type="submit" name="delete" value="DELETE"><i class="fa fa-trash"></i></button>
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="delete">
                    </form>
                  </td>
                  </tr>
                  @endforeach
                  </tbody>

                </table>
                {{ $blogs->links() }}


              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
