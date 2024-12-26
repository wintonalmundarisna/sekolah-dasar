<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Alumni extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public static function booted()
    {
        static::deleted(function ($guru) {
            if ($guru->foto) {
                Storage::disk('public')->delete($guru->foto);
            }
        });

        static::updating(function ($guru) {
            if ($guru->getOriginal('foto')) {
                if ($guru->isDirty('foto')) {
                    Storage::disk('public')->delete($guru->getOriginal('foto'));
                }
            }
        });
    }
}
