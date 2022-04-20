@extends('layout.index')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tambah Permintaan NIK Naker</h1>
        </div>
    </section>

    <form action="{{ route('nik.naker.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <button class="btn btn-primary btn-md">Simpan</button>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama Naker</label>
                            <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}" {{ $errors->has('nama') ? 'is-invalid' : '' }}>
                            <span class="text-danger text-small">
                                {{ $errors->first('nama') }}
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="tmp_lahir">Tempat Lahir</label>
                            <input type="text" name="tmp_lahir" id="tmp_lahir" class="form-control" value="{{ old('tmp_lahir') }}" {{ $errors->has('tmp_lahir') ? 'is-invalid' : '' }}>
                            <span class="text-danger text-small">
                                {{ $errors->first('tmp_lahir') }}
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="{{ old('tgl_lahir') }}" {{ $errors->has('tgl_lahir') ? 'is-invalid' : '' }}>
                            <span class="text-danger text-small">
                                {{ $errors->first('tgl_lahir') }}
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="kelamin">Jenis Kelamin</label><br>
                            <input type="radio" name="kelamin" id="kelamin" value="L"> L
                            <input type="radio" name="kelamin" id="kelamin" value="P"> P

                            <span class="text-danger text-small">
                                {{ $errors->first('kelamin') }}
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control"></textarea>
                            <span class="text-danger text-small">
                                {{ $errors->first('alamat') }}
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="ktp">NIK KTP</label>
                            <input type="number" name="ktp" id="ktp" class="form-control" value="{{ old('ktp') }}" {{ $errors->has('ktp') ? 'is-invalid' : '' }}>
                            <span class="text-danger text-small">
                                {{ $errors->first('ktp') }}
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="kk">NIK KK</label>
                            <input type="number" name="kk" id="kk" class="form-control" value="{{ old('kk') }}" {{ $errors->has('kk') ? 'is-invalid' : '' }}>
                            <span class="text-danger text-small">
                                {{ $errors->first('kk') }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="bpjs">No BPJS</label>
                            <input type="number" name="bpjs" id="bpjs" class="form-control" value="{{ old('bpjs') }}" {{ $errors->has('bpjs') ? 'is-invalid' : '' }}>
                            <span class="text-danger text-small">
                                {{ $errors->first('bpjs') }}
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="npwp">NPWP</label>
                            <input type="number" name="npwp" id="npwp" class="form-control" value="{{ old('npwp') }}" {{ $errors->has('npwp') ? 'is-invalid' : '' }}>
                            <span class="text-danger text-small">
                                {{ $errors->first('npwp') }}
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="noHp">No HP</label>
                            <input type="number" name="noHp" id="noHp" class="form-control" value="{{ old('noHp') }}" {{ $errors->has('noHp') ? 'is-invalid' : '' }}>
                            <span class="text-danger text-small">
                                {{ $errors->first('noHp') }}
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="nama_keluarga">Nama Keluarga Bisa Dihubungi</label>
                            <input type="number" name="nama_keluarga" id="nama_keluarga" class="form-control" value="{{ old('nama_keluarga') }}" {{ $errors->has('nama_keluarga') ? 'is-invalid' : '' }}>
                            <span class="text-danger text-small">
                                {{ $errors->first('nama_keluarga') }}
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="noHpKeluarga">No HP Keluarga</label>
                            <input type="number" name="noHpKeluarga" id="noHpKeluarga" class="form-control" value="{{ old('noHpKeluarga') }}" {{ $errors->has('noHpKeluarga') ? 'is-invalid' : '' }}>
                            <span class="text-danger text-small">
                                {{ $errors->first('noHpKeluarga') }}
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" {{ $errors->has('email') ? 'is-invalid' : '' }}>
                            <span class="text-danger text-small">
                                {{ $errors->first('email') }}
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="witel">Witel</label>
                            <input type="text" name="witel" id="witel" class="form-control" value="{{ old('witel') ?? 'TARAKAN' }}" {{ $errors->has('witel') ? 'is-invalid' : '' }}>
                            <span class="text-danger text-small">
                                {{ $errors->first('witel') }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="pendidikan">Pendidikan</label>
                            <select name="pendidikan" id="pendidikan" class="form-control">
                                <option value="" class="text-muted">Pilih Pendidikan</option>
                                @foreach ($pendidikans as $pendidikan)
                                    <option value="{{ $pendidikan->id }}">{{ $pendidikan->pendidikan }}</option>                                    
                                @endforeach
                            </select>
                            
                            <span class="text-danger text-small">
                                {{ $errors->first('pendidikan') }}
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="direktorat">Direktorat</label>
                            <select name="direktorat" id="direktorat" class="form-control">
                                <option value="" class="text-muted">Pilih Direktorat</option>
                                @foreach ($direktorats as $direktorat)
                                    <option value="{{ $direktorat->id }}">{{ $direktorat->direktorat }}</option>                                    
                                @endforeach
                            </select>
                            
                            <span class="text-danger text-small">
                                {{ $errors->first('direktorat') }}
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="posisi">Posisi</label>
                            <select name="posisi" id="posisi" class="form-control">
                                <option value="" class="text-muted">Pilih Posisi</option>
                                @foreach ($posisis as $posisi)
                                    <option value="{{ $posisi->id }}">{{ $posisi->posisi }}</option>                                    
                                @endforeach
                            </select>
                            
                            <span class="text-danger text-small">
                                {{ $errors->first('posisi') }}
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="mitra">Mitra</label>
                            <select name="mitra" id="mitra" class="form-control">
                                <option value="" class="text-muted">Pilih Mitra</option>
                                @foreach ($mitras as $mitra)
                                    <option value="{{ $mitra->id }}">{{ $mitra->mitra }}</option>                                    
                                @endforeach
                            </select>
                            
                            <span class="text-danger text-small">
                                {{ $errors->first('mitra') }}
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="tgl_pengajuan">Tanggal Pengajuan</label>
                            <input type="date" name="tgl_pengajuan" id="tgl_pengajuan" class="form-control" value="{{ old('tgl_pengajuan') }}" {{ $errors->has('tgl_pengajuan') ? 'is-invalid' : '' }}>
                            <span class="text-danger text-small">
                                {{ $errors->first('tgl_pengajuan') }}
                            </span>
                        </div>


                        <div class="form-group">
                            <label for="nik_waspang">NIK Waspang</label>
                            <input type="text" name="nik_waspang" id="nik_waspang" class="form-control" value="{{ old('nik_waspang') }}" {{ $errors->has('nik_waspang') ? 'is-invalid' : '' }}>
                            <span class="text-danger text-small">
                                {{ $errors->first('nik_waspang') }}
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="regional">Regional</label>
                            <input type="text" name="regional" id="regional" class="form-control" value="{{ old('regional') ?? 'KALIMANTAN' }}" {{ $errors->has('regional') ? 'is-invalid' : '' }}>
                            <span class="text-danger text-small">
                                {{ $errors->first('regional') }}
                            </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection