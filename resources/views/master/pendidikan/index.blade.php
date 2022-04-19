@extends('layout.index')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Pendidikan</h1>
        </div>
    </section>
    <div class="row">
        <div class="col-md-4">
            <div class="card card-statistic-1">
                <div class="card-body">
                    <form action="{{ route('pendidikan.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="pendidikan">Pendidikan</label>
                            <input type="text" name="pendidikan" id="pendidikan" class="form-control" {{ $errors->has('pendidikan') ? 'is-invalid' : '' }} value="{{ old('pendidikan') }}">
                            <span class="text-danger text-small">
                                {{ $errors->first('pendidikan') }}
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
                            <th>Pendidikan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($pendidikans as $pendidikan)
                            <tr>
                                <td>#</td>
                                <td>{{ $pendidikan->pendidikan }}</td>
                                <td>
                                    <form action="{{ route('pendidikan.destroy', [$pendidikan->id]) }}" method="POST">
                                        @csrf
                                        @method('delete')

                                        <a href="{{ route('pendidikan.edit', [$pendidikan->id]) }}" class="btn btn-success btn-sm">
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