@extends('template')
@section('title', 'Kode Soal tagihan_air')

@section('konten')

    <a href="/eas" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Input Tagihan Baru
        </div>

        <div class="card-body">
            <form action="/eas/store" method="post" onsubmit="return validasiForm()">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="NoMeteran" class="col-sm-2 col-form-label">Nomor Meteran</label>
                    <div class="col-sm-10">
                        <input type="text" name="NoMeteran" id="NoMeteran" class="form-control" maxlength="6">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="MeterAwal" class="col-sm-2 col-form-label">Meter Awal</label>
                    <div class="col-sm-10">
                        <input type="number" name="MeterAwal" id="MeterAwal" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="MeterAkhir" class="col-sm-2 col-form-label">Meter Akhir</label>
                    <div class="col-sm-10">
                        <input type="number" name="MeterAkhir" id="MeterAkhir" class="form-control">
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

    <script>
        function validasiForm() {
            let MeterAwal = document.getElementById('MeterAwal').value;
            let MeterAkhir = document.getElementById('MeterAkhir').value;

            if (isNaN(MeterAwal)) {
                Swal.fire({
                    title: "Input Salah!",
                    text: "Meter Awal harus berupa angka",
                    icon: "error"
                });
                return false;
            }

            if (isNaN(MeterAkhir)) {
                Swal.fire({
                    title: "Input Salah!",
                    text: "Meter Akhir harus berupa angka",
                    icon: "error"
                });
                return false;
            }

            if (MeterAkhir <= (MeterAwal + 20)) {
                Swal.fire({
                    title: "Input Salah!",
                    text: "Meter Akhir harus lebih besar dari Meter Awal + 20",
                    icon: "error"
                });
                return false;
            }
            return true;
        }
    </script>

@endsection
