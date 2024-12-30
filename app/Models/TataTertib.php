<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class TataTertib extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public static function booted()
    {
        static::deleted(function ($sk) {
            Storage::disk('public')->delete($sk->dokumen);
        });

        static::updating(function ($sk) {
            if ($sk->isDirty('dokumen')) {
                Storage::disk('public')->delete($sk->getOriginal('dokumen'));
            }
        });
    }
}
