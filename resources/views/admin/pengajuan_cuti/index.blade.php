@include('admin.header')
@include('admin.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard Admin</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="card-title">Pengajuan Cuti Pegawai</h3>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Pegawai</th>
                            <th>NIP</th>
                            <th>Tanggal Awal</th>
                            <th>Tanggal Akhir</th>
                            <th>Jumlah</th>
                            <th>Alasan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengajuanCuti as $cuti)
                            <tr>
                                <td>{{ $cuti->pegawai->nama }}</td>
                                <td>{{ $cuti->nip }}</td>
                                <td>{{ $cuti->tanggal_awal }}</td>
                                <td>{{ $cuti->tanggal_akhir }}</td>
                                <td>{{ $cuti->jumlah }}</td>
                                <td>{{ $cuti->ket }}</td>
                                <td>
                                    @if ($cuti->status == 'Y')
                                        <span class="badge badge-success">Disetujui</span>
                                    @elseif ($cuti->status == 'N')
                                        <span class="badge badge-danger">Ditolak</span>
                                    @else
                                        <span class="badge badge-warning">Pending</span>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('pengajuan_cuti.approve', $cuti->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-success">Setujui</button>
                                    </form>
                                    <form action="{{ route('pengajuan_cuti.reject', $cuti->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-danger">Tolak</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

@include('admin.footer')
