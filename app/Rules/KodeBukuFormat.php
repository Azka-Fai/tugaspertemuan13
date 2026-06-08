<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class KodeBukuFormat implements Rule
{
    public function passes($attribute, $value)
    {
        // Validasi format: BK-[2-4 Huruf Besar]-[3 Angka]
        return preg_match('/^BK-[A-Z]{2,4}-\d{3}$/', $value);
    }

    public function message()
    {
        // Pesan error kustom bahasa Indonesia
        return 'Format kode buku harus: BK-XXX-000 (contoh: BK-PROG-001)';
    }
}