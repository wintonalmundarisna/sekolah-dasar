<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KurikulumKelasTiga extends Model
{
    use HasFactory;
    protected $table = 'kurikulum_kelas_tigas';
    protected $guarded = ['id'];
}
