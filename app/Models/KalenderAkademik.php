<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class KalenderAkademik extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public static function booted()
    {
        static::deleted(function ($sk) {
            Storage::disk('public')->delete($sk->kalender);
        });

        static::updating(function ($sk) {
            if ($sk->isDirty('kalender')) {
                Storage::disk('public')->delete($sk->getOriginal('kalender'));
            }
        });
    }
}
