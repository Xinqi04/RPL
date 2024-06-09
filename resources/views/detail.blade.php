@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Detail User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
                <div class="row">
                  <!-- left column -->
                  <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Detail User</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form role="form">
                        <div class="card-body">
                          <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <p>{{ $user->email }}</p>
                          </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <p>{{ $user->name }}</p>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama pasien</th>
                                    <th>Tanggal Lahir</th>
                                    <th>No Hp</th>
                                    <th>Photo KTP</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($user->pasiens as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->tanggal_lahir }}</td>
                                    <td>{{ $item->no_hp }}</td>
                                    <td><img src="{{ asset('storage/photo-ktp-pasien/'.$item->image) }}" alt="" width="100"></td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                        </div>
                    </div>
        
                  </div>
                </div>

            </form>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
    <!-- /.content -->
  </div>
@endsection