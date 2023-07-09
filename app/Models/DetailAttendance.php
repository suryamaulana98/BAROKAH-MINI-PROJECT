<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailAttendance extends Model
{
    use HasFactory;

    public $incrementing = false;
    public $keyType = 'char';
    protected $table = 'detail_attendances';
    protected $primaryKey = 'id';

    protected $fillable = ['photo', 'attendance_id', 'status'];

    public function attendance()
    {
        return $this->belongsTo(Attendance::class);
    }
}
