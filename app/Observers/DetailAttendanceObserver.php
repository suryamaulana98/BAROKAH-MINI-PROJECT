<?php

namespace App\Observers;

use App\Models\DetailAttendance;
use Faker\Provider\Uuid;

class DetailAttendanceObserver
{
    function creating(DetailAttendance $detailAttendance): void {
        $detailAttendance->id = Uuid::uuid();
    }
}
