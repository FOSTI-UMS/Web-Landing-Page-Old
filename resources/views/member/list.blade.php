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
          Daftar Anggota
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
                <h3 class="box-title">Daftar Anggota</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Nim</th>
                    {{-- <th>Posisi</th> --}}
                    <th>Angkatan</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($members as $member)
                  <tr>
                    <td>{{ $member->id }}</td>
                    <td>{{ $member->nama }}</td>
                    <td>{{ $member->nim }}</td>
                    {{-- <td>{{ $member->jabatan}}</td> --}}
                    <td>{{ $member->angkatan }}</td>

                  </tr>
                  @endforeach
                  </tbody>

                </table>
                {{-- {{ $blogs->links() }} --}}


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
