@extends('layout.index')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Mitra</h1>
        </div>
    </section>
    <div class="row">
        <div class="col-md-4">
            <div class="card card-statistic-1">
                <div class="card-body">
                    <form action="{{ route('mitra.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="mitra">Mitra</label>
                            <input type="text" name="mitra" id="mitra" class="form-control" {{ $errors->has('mitra') ? 'is-invalid' : '' }} value="{{ old('mitra') }}">
                            <span class="text-danger text-small">
                                {{ $errors->first('mitra') }}
                            </span>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Simpan" class="btn btn-primary bnt-md">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>mitra</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($mitras as $mitra)
                            <tr>
                                <td>#</td>
                                <td>{{ ucwords($mitra->mitra) }}</td>
                                <td>
                                    <form action="{{ route('mitra.destroy', [$mitra->id]) }}" method="POST">
                                        @csrf
                                        @method('delete')

                                        <a href="{{ route('mitra.edit', [$mitra->id]) }}" class="btn btn-success btn-sm">
                                            <span>
                                                <i class="fas fa-pencil-alt"></i>
                                            </span>
                                        </a>

                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <span>
                                                <i class="fas fa-trash"></i>
                                            </span>
                                        </button>
                                    </form>
                                </td>
                            </tr>    
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">
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