<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Guru extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // ketika terjadi sesuatu pada model ini, maka hapus gambar di storage
    // di laravel doc namanya model event
    public static function booted()
    {
        static::deleted(function ($guru) {
            Storage::disk('public')->delete($guru->foto);
        });

        static::updating(function ($guru) {
            if ($guru->isDirty('foto')) {
                Storage::disk('public')->delete($guru->getOriginal('foto'));
            }
        });
    }
}
