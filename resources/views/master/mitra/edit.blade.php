@extends('layout.index')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Mitra</h1>
        </div>
    </section>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-statistic-1">
                <div class="card-body">
                    <form action="{{ route('mitra.update', [$mitra]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="mitra">Mitra</label>
                            <input type="text" name="mitra" id="mitra" class="form-control" {{ $errors->has('mitra') ? 'is-invalid' : '' }} value="{{ $mitra->mitra ?? old('mitra') }}">
                            <span class="text-danger text-small">
                                {{ $errors->first('mitra') }}
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