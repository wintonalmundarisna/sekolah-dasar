<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KurikulumKelasLima extends Model
{
    use HasFactory;
    protected $table = 'kurikulum_kelas_limas';
    protected $guarded = ['id'];
}
