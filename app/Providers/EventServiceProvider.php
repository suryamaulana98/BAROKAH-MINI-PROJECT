<?php

namespace App\Providers;

use App\Models\Feedback;
use App\Models\Hariansiswa;
use App\Models\Izin;
use App\Models\Laporanjurnal;
use App\Models\Laporanketua;
use App\Models\Pengumuman;
use App\Models\Sekolah;
use App\Models\User;
use App\Observers\FeedbackObserver;
use App\Observers\HariansiswaObserver;
use App\Observers\IzinObserver;
use App\Observers\LaporanjurnalObserver;
use App\Observers\LaporanketuaObserve;
use App\Observers\PengumumanObserver;
use App\Observers\SekolahObserver;
use App\Observers\UserObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        User::observe(UserObserver::class);
        Feedback::observe(FeedbackObserver::class);
        Pengumuman::observe(PengumumanObserver::class);
        Sekolah::observe(SekolahObserver::class);
        Izin::observe(IzinObserver::class);
        Hariansiswa::observe(HariansiswaObserver::class);
        Laporanketua::observe(LaporanketuaObserve::class);
        Laporanjurnal::observe(LaporanjurnalObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
