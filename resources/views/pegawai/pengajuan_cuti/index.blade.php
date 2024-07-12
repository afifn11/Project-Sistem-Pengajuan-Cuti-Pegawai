@include('pegawai.header')
@include('pegawai.sidebar')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard Pengajuan cuti</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard Pengajuan Cuti</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Daftar Pengajuan Cuti</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <div class="container">
          
          <a href="{{ route('pengajuan_cuti.create') }}" class="btn btn-primary btn-sm mb-3">Tambah Pengajuan Cuti</a>
          @if(session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
          @endif
          <table class="table">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Tanggal Mulai</th>
                      <th>Tanggal Selesai</th>
                      <th>Alasan</th>
                      <th>Status</th>
                      <th>NIP</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($pengajuanCuti as $p)
                      <tr>
                          <td>{{ $p->id }}</td>
                          <td>{{ $p->tanggal_awal }}</td>
                          <td>{{ $p->tanggal_akhir }}</td>
                          <td>{{ $p->ket }}</td>
                          <td>{{ $p->status }}</td>
                          <td>{{ $p->nip }}</td>
                          <td>
                              <a href="{{ route('pengajuan_cuti.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                              <form action="{{ route('pengajuan_cuti.destroy', $p->id) }}" method="POST" style="display:inline-block;">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus pengajuan cuti ini?')">Hapus</button>
                              </form>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('pegawai.footer')