<?php

namespace App\Observers;

use App\Models\Notifikasi;
use Faker\Provider\Uuid;

class NotifikasiObserver
{
    public function creating(Notifikasi $notifikasi): void
    {
        $notifikasi->id = Uuid::uuid();
    }
    /**
     * Handle the Notifikasi "created" event.
     */
    public function created(Notifikasi $notifikasi): void
    {
        //
    }

    /**
     * Handle the Notifikasi "updated" event.
     */
    public function updated(Notifikasi $notifikasi): void
    {
        //
    }

    /**
     * Handle the Notifikasi "deleted" event.
     */
    public function deleted(Notifikasi $notifikasi): void
    {
        //
    }

    /**
     * Handle the Notifikasi "restored" event.
     */
    public function restored(Notifikasi $notifikasi): void
    {
        //
    }

    /**
     * Handle the Notifikasi "force deleted" event.
     */
    public function forceDeleted(Notifikasi $notifikasi): void
    {
        //
    }
}
