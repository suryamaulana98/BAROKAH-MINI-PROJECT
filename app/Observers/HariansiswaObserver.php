<?php

namespace App\Observers;

use App\Models\Hariansiswa;
use Faker\Provider\Uuid;

class HariansiswaObserver
{
    function creating(Hariansiswa $hariansiswa): void
    {
        $hariansiswa->id = Uuid::uuid();
    }
}
