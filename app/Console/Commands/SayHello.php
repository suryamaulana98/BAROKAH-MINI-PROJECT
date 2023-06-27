<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SayHello extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'say:hello {nama}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Menampilkan hello user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info("Hello " . $this->argument('nama'));
    }
}
