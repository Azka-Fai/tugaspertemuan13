<div class="card h-100 shadow-sm border-primary">
    <div class="card-body">
        <h5 class="card-title text-primary mb-3">
            <i class="bi bi-book-half me-2"></i> {{ $buku->judul }}
        </h5>

        <div class="mb-3">
            {{-- Sesuaikan $buku->kategori dengan relasi di database Anda, atau ganti jika berupa string biasa --}}
            <span class="badge bg-info text-dark">{{ $buku->kategori ?? 'Umum' }}</span>
        </div>

        <p class="card-text mb-1">
            <small class="text-muted"><i class="bi bi-person me-1"></i> {{ $buku->pengarang }}</small>
        </p>
        <p class="card-text mb-2">
            <small class="text-muted"><i class="bi bi-tag me-1"></i> Rp {{ number_format($buku->harga, 0, ',', '.') }}</small>
        </p>

        <div class="mt-3">
            @if($buku->stok > 0)
                <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Tersedia ({{ $buku->stok }})</span>
            @else
                <span class="badge bg-danger"><i class="bi bi-x-circle me-1"></i> Habis</span>
            @endif
        </div>
    </div>

    @if($showActions)
    <div class="card-footer bg-transparent border-top-0 pb-3">
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="{{ route('buku.show', $buku->id) }}" class="btn btn-sm btn-outline-info">
                <i class="bi bi-eye"></i> Detail
            </a>
            <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-sm btn-outline-warning">
                <i class="bi bi-pencil"></i> Edit
            </a>
        </div>
    </div>
    @endif
</div>