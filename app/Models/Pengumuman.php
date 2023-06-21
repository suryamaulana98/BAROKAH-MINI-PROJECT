<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pengumuman extends Model
{
    use HasFactory;
    protected $table = 'pengumuman';
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
}
