<?php

namespace App\Observers;

use App\Models\Feedback;
use Faker\Provider\Uuid;

class FeedbackObserver
{

    public function creating(Feedback $feedback): void {
        $feedback->id = Uuid::uuid();
    }

    /**
     * Handle the Feedback "created" event.
     */
    public function created(Feedback $feedback): void
    {
        //
    }

    /**
     * Handle the Feedback "updated" event.
     */
    public function updated(Feedback $feedback): void
    {
        //
    }

    /**
     * Handle the Feedback "deleted" event.
     */
    public function deleted(Feedback $feedback): void
    {
        //
    }

    /**
     * Handle the Feedback "restored" event.
     */
    public function restored(Feedback $feedback): void
    {
        //
    }

    /**
     * Handle the Feedback "force deleted" event.
     */
    public function forceDeleted(Feedback $feedback): void
    {
        //
    }
}
