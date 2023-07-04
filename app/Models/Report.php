<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $keyType = 'string';
    public $incrementing = false;
    protected $primaryKey = 'id';
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
