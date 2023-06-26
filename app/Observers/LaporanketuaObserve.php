<?php

namespace App\Observers;

use App\Models\Laporanketua;
use Faker\Provider\Uuid;

class LaporanketuaObserve
{
    function creating(Laporanketua $laporanketua): void
    {
        $laporanketua->id = Uuid::uuid();
    }
    /**
     * Handle the Laporanketua "created" event.
     */
    public function created(Laporanketua $laporanketua): void
    {
        //
    }

    /**
     * Handle the Laporanketua "updated" event.
     */
    public function updated(Laporanketua $laporanketua): void
    {
        //
    }

    /**
     * Handle the Laporanketua "deleted" event.
     */
    public function deleted(Laporanketua $laporanketua): void
    {
        //
    }

    /**
     * Handle the Laporanketua "restored" event.
     */
    public function restored(Laporanketua $laporanketua): void
    {
        //
    }

    /**
     * Handle the Laporanketua "force deleted" event.
     */
    public function forceDeleted(Laporanketua $laporanketua): void
    {
        //
    }
}
