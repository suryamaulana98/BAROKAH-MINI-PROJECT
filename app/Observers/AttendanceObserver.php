<?php

namespace App\Observers;

use App\Models\Attendance;
use Faker\Provider\Uuid;

class AttendanceObserver
{
    public function creating(Attendance $attendance): void
    {
        $attendance->id = Uuid::uuid();
    }
}
