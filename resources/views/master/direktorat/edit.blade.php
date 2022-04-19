@extends('layout.index')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Direktorat</h1>
        </div>
    </section>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-statistic-1">
                <div class="card-body">
                    <form action="{{ route('direktorat.update', [$direktorat]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="direktorat">Direktorat</label>
                            <input type="text" name="direktorat" id="direktorat" class="form-control" {{ $errors->has('direktorat') ? 'is-invalid' : '' }} value="{{ $direktorat->direktorat ?? old('direktorat') }}">
                            <span class="text-danger text-small">
                                {{ $errors->first('direktorat') }}
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