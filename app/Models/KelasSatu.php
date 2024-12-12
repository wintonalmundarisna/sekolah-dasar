<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasSatu extends Model
{
    use HasFactory;
    protected $table = 'kelas_satus';
    protected $guarded = ['id'];
    
}
