<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KurikulumKelasSatu extends Model
{
    use HasFactory;
    protected $table = 'kurikulum_kelas_satus';
    protected $guarded = ['id'];
}
