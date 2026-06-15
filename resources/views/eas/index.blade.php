@extends('template')
@section('title', 'Kode Soal tagihan_air')
@section('konten')

    <h2>Data Tagihan Air</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="/eas/input" class="btn btn-primary">Input Tagihan Baru </a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>No Meteran</th>
            <th>Penggunaan (m³)</th>
            <th>Total Tagihan</th>
        </tr>

        @forelse($eas as $row)
            @php
                $penggunaan = $row->MeterAkhir - $row->MeterAwal;
                $totalTagihan = $penggunaan * 5000;
            @endphp
            <tr>
                <td>{{ $row->ID }}</td>
                <td>{{ $row->NoMeteran }}</td>
                <td>{{ number_format($penggunaan, 0, ',', '.') }}</td>
                <td>{{ number_format($totalTagihan, 0, ',', '.') }}</td>
            </tr>

        @empty
            <tr>
                <td colspan="6">Belum ada data.</td>
            </tr>
        @endforelse
        </tbody>
    </table>

@endsection
