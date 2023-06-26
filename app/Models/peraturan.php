<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peraturan extends Model
{
    use HasFactory;

    protected $table = 'peraturans';
    protected $guarded = ['id'];
}
