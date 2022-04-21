@extends('layout.index')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Permintaan NIK Naker</h1>
        </div>
    </section>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-body">
                    <a href="{{ route('nik.naker.create') }}" class="btn btn-primary btn-md mb-2">Tambah</a>
                    
                    <div class="form-group float-right">
                        <form method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari Berdasarkan NIK KTP" name="q">
                                <div class="input-group-prepend">
                                  <button class="btn btn-outline-secondary" type="submit">
                                      <span>
                                          <i class="fas fa-search"></i>
                                      </span>
                                  </button>
                                </div>
                              </div>
                        </form>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Status Naker</th>
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
                                        <td>#</td>
                                        <td>
                                            <span class="badge badge-danger">
                                                Proses NIK
                                            </span>
                                        </td>
                                        <td>{{ $naker->nik }}</td>
                                        <td>{{ $naker->nama }}</td>
                                        <td>{{ $naker->tgl_lahir }}</td>
                                        <td>{{ $naker->tempat_lahir }}</td>
                                        <td>{{ $naker->jenis_kelamin }}</td>
                                        <td>{{ $naker->alamat }}</td>
                                        <td>{{ $naker->no_ktp}}</td>
                                        <td>{{ $naker->no_kk }}</td>
                                        <td>{{ $naker->no_kartu_bpjs }}</td>
                                        <td>{{ $naker->no_npwp }}</td>
                                        <td>{{ $naker->no_hp }}</td>
                                        <td>{{ $naker->no_hp_keluarga }}</td>
                                        <td>{{ $naker->nama_keluarga }}</td>
                                        <td>{{ $naker->email }}</td>
                                        <td>{{ $naker->witel }}</td>

                                        <td>{{ strtoupper($naker->pendidikan->pendidikan) }}</td>
                                        <td>{{ ucwords($naker->direktorat->direktorat) }}</td>
                                        <td>{{ ucwords($naker->mitra->mitra) }}</td>
                                        <td>{{ ucwords($naker->posisiMitra->posisi) }}</td>
                                        
                                        <td>{{ $naker->tgl_pengajuan }}</td>
                                        <td>{{ $naker->nik_waspang }}</td>
                                        <td>{{ $naker->regional }}</td>
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


            
            
        </div>
    </div>

@endsection