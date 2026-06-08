@extends('template')
@section('title', 'Keranjang Belanja')
@section('konten')
    <h3>Keranjang Belanja</h3>
    <form action="/keranjang-belanja/store" method="POST">
    @csrf

    <div class="form-group mb-3">
        <label>Kode Barang</label>
        <input type="text" name="KodeBarang" class="form-control" required>
    </div>

    <div class="form-group mb-3">
        <label>Jumlah Pembelian</label>
        <input type="text" name="Jumlah" class="form-control" required>
    </div>

    <div class="form-group mb-3">
        <label>Harga per Item</label>
        <input type="text" name="Harga" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">
        Simpan
    </button>

    <a href="/keranjang-belanja/" class="btn btn-secondary">
        Kembali
    </a>
</form>
@endsection
