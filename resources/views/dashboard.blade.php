@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container py-4">
    <h2 class="mb-4"><i class="bi bi-speedometer2"></i> Dashboard Perpustakaan</h2>

    <div class="mb-4">
        <a href="{{ route('buku.index') }}" class="btn btn-primary me-2"><i class="bi bi-book"></i> Kelola Buku</a>
        <a href="{{ route('anggota.index') }}" class="btn btn-success me-2"><i class="bi bi-people"></i> Kelola Anggota</a>
    </div>

    <div class="row mb-4">
        <div class="col-md-6 mb-3">
            <div class="card border-primary h-100">
                <div class="card-header bg-primary text-white">Statistik Buku</div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Total Buku <span class="badge bg-primary rounded-pill">{{ $totalBuku }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Buku Tersedia <span class="badge bg-success rounded-pill">{{ $bukuTersedia }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Buku Habis <span class="badge bg-danger rounded-pill">{{ $bukuHabis }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card border-success h-100">
                <div class="card-header bg-success text-white">Statistik Anggota</div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Total Anggota <span class="badge bg-success rounded-pill">{{ $totalAnggota }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Anggota Aktif <span class="badge bg-primary rounded-pill">{{ $anggotaAktif }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Anggota Nonaktif <span class="badge bg-secondary rounded-pill">{{ $anggotaNonaktif }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-header">5 Buku Terbaru</div>
                <div class="card-body p-0">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Penerbit</th>
                                <th>Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($bukuTerbaru as $buku)
                            <tr>
                                <td>{{ $buku->judul }}</td>
                                <td>{{ $buku->penerbit }}</td>
                                <td>{{ $buku->stok }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="text-center">Belum ada data buku.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-header">5 Anggota Terbaru</div>
                <div class="card-body p-0">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($anggotaTerbaru as $anggota)
                            <tr>
                                <td>{{ $anggota->nama }}</td>
                                <td>{{ $anggota->status }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="2" class="text-center">Belum ada data anggota.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection