<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Workshop extends Model
{
    use HasFactory;
    protected $table = 'workshops';
    protected $guarded = ['id'];
    public static function booted()
    {
        static::deleted(function ($guru) {
            if ($guru->dokumentasi) {
                    Storage::disk('public')->delete($guru->dokumentasi);
            }
        });

        static::updating(function ($guru) {
            if ($guru->getOriginal('dokumentasi')) {
                if ($guru->isDirty('dokumentasi')) {
                    Storage::disk('public')->delete($guru->getOriginal('dokumentasi'));
                }
            }
        });
    }
}
