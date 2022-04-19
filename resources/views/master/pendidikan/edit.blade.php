@extends('layout.index')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Pendidikan</h1>
        </div>
    </section>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-statistic-1">
                <div class="card-body">
                    <form action="{{ route('pendidikan.update', [$pendidikan]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="pendidikan">Pendidikan</label>
                            <input type="text" name="pendidikan" id="pendidikan" class="form-control" {{ $errors->has('pendidikan') ? 'is-invalid' : '' }} value="{{ $pendidikan->pendidikan ?? old('pendidikan') }}">
                            <span class="text-danger text-small">
                                {{ $errors->first('pendidikan') }}
                            </span>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Update" class="btn btn-primary bnt-md">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection