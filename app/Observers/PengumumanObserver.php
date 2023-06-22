<?php

namespace App\Observers;

use App\Models\Pengumuman;
use Faker\Provider\Uuid;

class PengumumanObserver
{
    public function creating(Pengumuman $pengumuman): void {
        $pengumuman->id = Uuid::uuid();
    }
    /**
     * Handle the Pengumuman "created" event.
     */
    public function created(Pengumuman $pengumuman): void
    {
        //
    }

    /**
     * Handle the Pengumuman "updated" event.
     */
    public function updated(Pengumuman $pengumuman): void
    {
        //
    }

    /**
     * Handle the Pengumuman "deleted" event.
     */
    public function deleted(Pengumuman $pengumuman): void
    {
        //
    }

    /**
     * Handle the Pengumuman "restored" event.
     */
    public function restored(Pengumuman $pengumuman): void
    {
        //
    }

    /**
     * Handle the Pengumuman "force deleted" event.
     */
    public function forceDeleted(Pengumuman $pengumuman): void
    {
        //
    }
}
