@extends('template')
@section('title', 'Keranjang Belanja')
@section('konten')
    <a href="/keranjang-belanja/beli" class="btn btn-primary">Beli</a>

    <br>
    <table class="table table-striped table-hover table-bordered mt-3">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per item </th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        @forelse ($keranjangBelanja as $k)
            <tr>
                <td>{{ $k->ID }}</td>
                <td>{{ $k->KodeBarang }}</td>
                <td>{{ $k->Jumlah }}</td>
                <td>{{ number_format($k->Harga, 2, ',', '.') }}</td>
                <td>{{ number_format($k->Jumlah * $k->Harga, 2, ',', '.') }}</td>
                <td>
                    <a href="/keranjang-belanja/batal/{{ $k->ID }}" class="btn btn-danger">Batal</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">Keranjang Belanja Kosong</td>
            </tr>
        @endforelse
@endsection
