<?php

namespace App\Observers;

use App\Models\Report;
use Faker\Provider\Uuid;

class ReportObsrever
{
    public function creating(Report $report): void
    {
        $report->id = Uuid::uuid();
    }

}
