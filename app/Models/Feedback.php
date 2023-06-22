<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Feedback extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $guarded = ['id'];
    protected $keyType = 'string';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
