@extends('template')
@section('title', 'Data Nilai Kuliah')
@section('konten')

    <h2>Data Nilai Kuliah</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('nilaikuliah.create') }}">Tambah Data</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>

        @forelse($nilaikuliah as $row)
            @php
                if ($row->NilaiAngka <= 40) {
                    $huruf = 'D';
                } elseif ($row->NilaiAngka <= 60) {
                    $huruf = 'C';
                } elseif ($row->NilaiAngka <= 80) {
                    $huruf = 'B';
                } else {
                    $huruf = 'A';
                }

                $bobot = $row->NilaiAngka * $row->SKS;
            @endphp

            <tr>
                <td>{{ $row->ID }}</td>
                <td>{{ $row->NRP }}</td>
                <td>{{ $row->NilaiAngka }}</td>
                <td>{{ $row->SKS }}</td>
                <td>{{ $huruf }}</td>
                <td>{{ $bobot }}</td>
            </tr>

        @empty
            <tr>
                <td colspan="6">Belum ada data.</td>
            </tr>
        @endforelse
        </tbody>
    </table>

@endsection
