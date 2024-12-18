<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KurikulumKelasDua extends Model
{
    use HasFactory;
    protected $table = 'kurikulum_kelas_duas';
    protected $guarded = ['id'];
}
