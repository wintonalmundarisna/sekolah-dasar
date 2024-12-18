<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KurikulumKelasEnam extends Model
{
    use HasFactory;
    protected $table = 'kurikulum_kelas_enams';
    protected $guarded = ['id'];
}
