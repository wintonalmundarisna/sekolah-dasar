<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class SkPenerimaanPpdb extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public static function booted()
    {
        static::deleted(function ($sk) {
            Storage::disk('public')->delete($sk->surat_keputusan);
        });

        static::updating(function ($sk) {
            if ($sk->isDirty('surat_keputusan')) {
                Storage::disk('public')->delete($sk->getOriginal('surat_keputusan'));
            }
        });
    }
}
