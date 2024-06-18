@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data User</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            {{-- <a href="{{ route('admin.create') }}" class="btn btn-primary mb-3">Tambah Data</a> --}}
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Pasien</th>
                      <th>Tanggal Lahir</th>
                      <th>No HP</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($dataPasien as $d)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $d->nama }}</td>
                          <td>{{ $d->tanggal_lahir }}</td>
                          <td>{{ $d->no_hp }}</td>
                          {{-- <td>
                            <a href="{{ route('admin.detail',['id' => $d->id]) }}" class="btn btn-primary"><i class="fas fa-eye"></i>Detail</a>
                            <a href="{{ route('admin.edit',['id' => $d->id]) }}" class="btn btn-primary"><i class="fas fa-pen"></i>Edit</a>
                            <a data-toggle="modal" data-target="#modal-hapus-{{ $d->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Hapus</a>
                          </td> --}}
                        </tr> 

                        <div class="modal fade" id="modal-hapus-{{ $d->id }}" tabindex="-1" aria-labelledby="modal-default-label" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title" id="modal-default-label">Konfirmasi Hapus Data</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p>Apakah kamu yakin ingin menghapus data user <b>{{ $d->name }}</b></p>
                              </div>
                              <div class="modal-footer justify-content-between">
                                <form action="{{ route('admin.delete', ['id' => $d->id]) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                                  <button type="submit" class="btn btn-primary">Ya, Hapus</button>

                                </form>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
@endsection