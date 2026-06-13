@extends('template')
@section('title', 'Data DVD')
@section('konten')

    <a href="/dvd" class="btn btn-secondary mb-4">Kembali</a>

    @foreach ($dvd as $d)
        <div class="card">
            <div class="card-header">
                Form Edit Data DVD
            </div>

            <div class="card-body">
                <form action="/dvd/update" method="post">
                    {{ csrf_field() }}

                    <input type="hidden" name="kodedvd" value="{{ $d->kodedvd }}">

                    <div class="row mb-3">
                        <label for="merkdvd" class="col-sm-2 col-form-label">Merk DVD</label>
                        <div class="col-sm-10">
                            <input type="text" name="merkdvd" id="merkdvd"
                                class="form-control" maxlength="30" required
                                value="{{ $d->merkdvd }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="stockdvd" class="col-sm-2 col-form-label">Stok DVD</label>
                        <div class="col-sm-10">
                            <input type="number" name="stockdvd" id="stockdvd"
                                class="form-control" min="0" required
                                value="{{ $d->stockdvd }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="offset-sm-2 col-sm-10">
                            <input type="submit" value="Simpan Data" class="btn btn-primary">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    @endforeach

@endsection
