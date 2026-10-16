<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    use HasFactory;

    /**
     * Nama tabel di database.
     *
     * @var string
     */
    protected $table = 'destinasi';

    /**
     * Atribut yang dapat diisi secara mass-assignment.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'deskripsi',
        'lokasi',
        'harga_tiket',
        'gambar',
    ];

    /**
     * Tipe casting atribut.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'harga_tiket' => 'decimal:2',
    ];

    /**
     * Helper URL gambar dengan fallback ke gambar default.
     */
    public function getGambarUrlAttribute(): string
    {
        if (empty($this->gambar)) {
            return asset('images/curug.jpg');
        }

        if (str_starts_with($this->gambar, 'http://') || str_starts_with($this->gambar, 'https://')) {
            return $this->gambar;
        }

        // Cek jika file tersimpan di storage uploads
        if (file_exists(public_path('uploads/' . $this->gambar))) {
            return asset('uploads/' . $this->gambar);
        }

        // Cek jika file tersimpan di folder images
        if (file_exists(public_path('images/' . $this->gambar))) {
            return asset('images/' . $this->gambar);
        }

        return asset($this->gambar);
    }
}
