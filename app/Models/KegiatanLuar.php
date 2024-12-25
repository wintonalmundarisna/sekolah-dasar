<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class KegiatanLuar extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public static function booted()
    {
        static::deleted(function ($data) {
            if ($data->foto_kegiatan) {
                Storage::disk(name: 'public')->delete($data->foto_kegiatan);
            }
        });

        static::updating(function ($data) {
            if ($data->getOriginal('foto_kegiatan')) {
                if ($data->isDirty('foto_kegiatan')) {
                    Storage::disk('public')->delete($data->getOriginal('foto_kegiatan'));
                }
            }
        });
    }
}
