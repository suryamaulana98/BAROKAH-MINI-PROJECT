<?php

namespace App\Observers;

use App\Models\Laporanjurnal;
use Faker\Provider\Uuid;

class LaporanjurnalObserver
{
    function creating(Laporanjurnal $laporanjurnal): void
    {
        $laporanjurnal->id = Uuid::uuid();
    }
}
