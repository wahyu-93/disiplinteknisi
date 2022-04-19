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
                            <input type="text" name="pendidikan" id="pendidikan" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Simpan" class="btn btn-primary bnt-md">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card card-statistic-1">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pendidikan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>#</td>
                                    <td>1</td>
                                    <td>aa</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>

@endsection