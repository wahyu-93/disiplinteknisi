@extends('layout.index')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Posisi</h1>
        </div>
    </section>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-statistic-1">
                <div class="card-body">
                    <form action="{{ route('posisi.update', [$posisi]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="posisi">Posisi</label>
                            <input type="text" name="posisi" id="posisi" class="form-control" {{ $errors->has('posisi') ? 'is-invalid' : '' }} value="{{ $posisi->posisi ?? old('posisi') }}">
                            <span class="text-danger text-small">
                                {{ $errors->first('posisi') }}
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