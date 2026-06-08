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

    <div class="btn-group-vertical d-grid gap-2">
        <a href="{{ route('buku.show', $buku->id) }}" class="btn btn-sm btn-info text-white">
            <i class="bi bi-eye"></i> Detail
        </a>
        <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-sm btn-warning">
            <i class="bi bi-pencil"></i> Edit
        </a>
        
    {{-- Delete Button dengan SweetAlert --}}
    <form action="{{ route('buku.destroy', $buku->id) }}" 
        method="POST" 
        class="d-inline delete-form">
        @csrf
        @method('DELETE')
        <button type="button" class="btn btn-sm btn-danger w-100 btn-delete" 
                data-judul="{{ $buku->judul }}">
            <i class="bi bi-trash"></i> Hapus
        </button>
    </form>

    </div>
</div>