@include('pegawai.header')
@include('pegawai.sidebar')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Jatah Cuti Anda</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="card-title">Detail Jatah Cuti</h3>
            </div>
            <div class="card-body">
                @if ($jatahCuti)
                    <p>Tahun: {{ $jatahCuti->tahun }}</p>
                    <p>Jumlah Cuti: {{ $jatahCuti->jumlah }} hari</p>
                @else
                    <p>Jatah cuti belum diatur.</p>
                @endif
            </div>
        </div>
    </section>
</div>

@include('pegawai.footer')
