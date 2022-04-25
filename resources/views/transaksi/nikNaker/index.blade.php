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
                    
                    <a href="" class="btn btn-success btn-md mb-2">Kirim Email</a>

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
                                    <th>Aksi</th>
                                    <th>Status Naker</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Tgl Lahir</th>
                                    <th>Tempat Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>No KTP</th>
                                   
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
                                            <form action="{{ route('nik.naker.delete', [$naker->id]) }}" method="POST">
                                                @csrf
                                                @method('delete')

                                                {{-- <a href="{{ route('nik.naker.edit', [$naker]) }}" class="btn btn-success btn-sm">
                                                    <span>
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </span>
                                                </a> --}}
                                                
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <span>
                                                        <i class="fas fa-trash-alt"></i>
                                                    </span>
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <span class="badge badge-danger mb-1 mt-1">
                                                Proses NIK
                                            </span>

                                            <span>
                                                <a href="" class="badge badge-success mt-1 mb-1">
                                                    Kirim
                                                </a>
                                            </span>
                                        </td>
                                        <td>{{ $naker->nik }}</td>
                                        <td>{{ $naker->nama }}</td>
                                        <td>{{ $naker->tgl_lahir }}</td>
                                        <td>{{ $naker->tempat_lahir }}</td>
                                        <td>{{ $naker->jenis_kelamin }}</td>
                                        <td>{{ $naker->alamat }}</td>
                                        <td>{{ $naker->no_ktp}}</td>
                                        
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