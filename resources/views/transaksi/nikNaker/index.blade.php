@extends('layout.index')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Permintaan NIK Naker</h1>
        </div>
    </section>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('nik.naker.create') }}" class="btn btn-primary btn-md mb-2">Tambah</a>

            <div class="table-responsive">
                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Tgl Lahir</th>
                            <th>Tempat Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>No KTP</th>
                            <th>NO KK</th>
                            <th>NO BPJS</th>
                            <th>NPWP</th>
                            <th>No HP</th>
                            <th>No HP Keluarga</th>
                            <th>Keluarga Bisa Dihubungi</th>
                            <th>Email</th>
                            <th>Witel</th>
                            <th>Status Naker</th>
                            <th>Pendidikan</th>
                            <th>Direktorat</th>
                            <th>Posisi</th>
                            <th>Mitra</th>
                            <th>Tgl Pengajuan</th>
                            <th>NIK Waspang</th>
                            <th>Regional</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($nakers as $naker)
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="26">
                                    <h5>Data Tidak Ada</h5>    
                                </td>
                            </tr>
                            
                        @endforelse
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>

@endsection