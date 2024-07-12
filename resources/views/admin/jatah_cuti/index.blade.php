@include('admin.header')
@include('admin.sidebar')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard Jatah Cuti</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard Jatah Cuti</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header bg-info">
          <h3 class="card-title">Daftar Jatah Cuti Pegawai</h3>

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
          
          <a href="{{ route('jatah_cuti.create') }}" class="btn btn-primary mb-3">Tambah Jatah Cuti</a>
          @if(session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
          @endif
          <table class="table table-hover">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Tahun</th>
                      <th>Jumlah</th>
                      <th>NIP</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($jatahCuti as $j)
                      <tr>
                          <td>{{ $j->id }}</td>
                          <td>{{ $j->tahun }}</td>
                          <td>{{ $j->jumlah }}</td>
                          <td>{{ $j->nip }}</td>
                          <td>
                              <a href="{{ route('jatah_cuti.edit', $j->id) }}" class="btn btn-warning btn-sm">Edit</a>
                              <form action="{{ route('jatah_cuti.destroy', $j->id) }}" method="POST" style="display:inline-block;">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus jatah cuti ini?')">Hapus</button>
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

  @include('admin.footer')