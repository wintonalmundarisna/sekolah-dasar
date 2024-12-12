<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasDua extends Model
{
    use HasFactory;
    protected $table = 'kelas_duas';
    protected $guarded = ['id'];
}
