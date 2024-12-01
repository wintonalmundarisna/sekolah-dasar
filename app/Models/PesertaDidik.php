<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PesertaDidik extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public static function booted()
    {
        static::updating(function (Model $pesertaDidik) {
            if ($pesertaDidik->isDirty('foto')) {
                Storage::disk('public')->delete($pesertaDidik->getOriginal('foto'));
            }
        });

        static::deleted(function (Model $pesertaDidik) {
            Storage::disk('public')->delete($pesertaDidik->foto);
        });
    }
}
