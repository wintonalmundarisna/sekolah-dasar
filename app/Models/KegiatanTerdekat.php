<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class KegiatanTerdekat extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public static function booted()
    {
        static::deleted(function ($data) {
            if ($data->kegiatan_terdekat) {
                Storage::disk(name: 'public')->delete($data->kegiatan_terdekat);
            }
        });

        static::updating(function ($data) {
            if ($data->getOriginal('kegiatan_terdekat')) {
                if ($data->isDirty('kegiatan_terdekat')) {
                    Storage::disk('public')->delete($data->getOriginal('kegiatan_terdekat'));
                }
            }
        });
    }
}
