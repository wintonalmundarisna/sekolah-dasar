<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PesertaDidik extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // ketika terjadi sesuatu pada model ini, maka hapus gambar di storage
    // di laravel doc namanya model event
    public static function booted()
    {
        static::deleted(function (Model $pesertaDidik) {
            Storage::disk('public')->delete($pesertaDidik->foto);
        });

        static::updating(function (Model $pesertaDidik) {
            if ($pesertaDidik->isDirty('foto')) {
                Storage::disk('public')->delete($pesertaDidik->getOriginal('foto'));
            }
        });
    }
}
