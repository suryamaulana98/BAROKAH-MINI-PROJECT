<?php

namespace App\Observers;

use App\Models\Izin;
use Faker\Provider\Uuid;

class IzinObserver
{
    public function creating(Izin $izin): void
    {
        $izin->id = Uuid::uuid();
    }
    /**
     * Handle the Izin "created" event.
     */
    public function created(Izin $izin): void
    {
        //
    }

    /**
     * Handle the Izin "updated" event.
     */
    public function updated(Izin $izin): void
    {
        //
    }

    /**
     * Handle the Izin "deleted" event.
     */
    public function deleted(Izin $izin): void
    {
        //
    }

    /**
     * Handle the Izin "restored" event.
     */
    public function restored(Izin $izin): void
    {
        //
    }

    /**
     * Handle the Izin "force deleted" event.
     */
    public function forceDeleted(Izin $izin): void
    {
        //
    }
}
