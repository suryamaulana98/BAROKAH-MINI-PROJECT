<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal_piket extends Model
{
    use HasFactory;
    
    protected $table = 'jadwal_piket';
    protected $guarded = ['id'];
}
