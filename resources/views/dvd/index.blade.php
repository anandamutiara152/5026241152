@extends('template')
@section('title', 'Data DVD')

@section('konten')
    <a href="/dvd/tambah" class="btn btn-primary">Tambah DVD Baru</a>
    <br />

    <p>Cari Data DVD :</p>
    <form action="/dvd/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Merk DVD .." class="form-control">
        <input type="submit" value="CARI" class="btn btn-light">
    </form>

    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Merk DVD</th>
            <th>Stok DVD</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>

        @foreach ($dvd as $d)
        <tr>
            <td>{{ $d->merkdvd }}</td>
            <td>{{ $d->stockdvd }}</td>
            <td>{{ $d->tersedia }}</td>
            <td>
                <a href="/dvd/edit/{{ $d->kodedvd }}" class="btn btn-warning">Edit</a>
                |
                <a href="/dvd/hapus/{{ $d->kodedvd }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach

    </table>

    {{ $dvd->links() }}
@endsection
