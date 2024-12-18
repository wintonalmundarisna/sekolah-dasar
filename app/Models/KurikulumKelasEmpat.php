<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KurikulumKelasEmpat extends Model
{
    use HasFactory;
    protected $table = 'kurikulum_kelas_empats';
    protected $guarded = ['id'];
}
