@include('pegawai.header')
@include('pegawai.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard Pegawai</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="card-title">Pengajuan Cuti Anda</h3>
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
                            <th>Tanggal Awal</th>
                            <th>Tanggal Akhir</th>
                            <th>Jumlah</th>
                            <th>Alasan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengajuanCuti as $cuti)
                            <tr>
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
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

@include('pegawai.footer')
