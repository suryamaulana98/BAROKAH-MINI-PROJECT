<?php

namespace App\Observers;

use App\Models\Sekolah;
use Faker\Provider\Uuid;

class SekolahObserver
{
    public function creating(Sekolah $sekolah): void
    {
        $sekolah->id = Uuid::uuid();
    }
    /**
     * Handle the Sekolah "created" event.
     */
    public function created(Sekolah $sekolah): void
    {

    }

    /**
     * Handle the Sekolah "updated" event.
     */
    public function updated(Sekolah $sekolah): void
    {
        //
    }

    /**
     * Handle the Sekolah "deleted" event.
     */
    public function deleted(Sekolah $sekolah): void
    {
        //
    }

    /**
     * Handle the Sekolah "restored" event.
     */
    public function restored(Sekolah $sekolah): void
    {
        //
    }

    /**
     * Handle the Sekolah "force deleted" event.
     */
    public function forceDeleted(Sekolah $sekolah): void
    {
        //
    }
}
