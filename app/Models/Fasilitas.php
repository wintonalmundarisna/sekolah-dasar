<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Fasilitas extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public static function booted()
    {
        static::deleted(function ($guru) {
            if ($guru->foto_fasilitas) {
                Storage::disk('public')->delete($guru->foto_fasilitas);
            }
        });

        static::updating(function ($guru) {
            if ($guru->getOriginal('foto_fasilitas')) {
                if ($guru->isDirty('foto_fasilitas')) {
                    Storage::disk('public')->delete($guru->getOriginal('foto_fasilitas'));
                }
            }
        });
    }
}
