<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        \App\Console\Commands\SendEmail::class,
    ];

    protected function schedule(Schedule $schedule)
    {
        // Run the 'send:email' command daily at 9:46 AM
        $schedule->command('send:email')->dailyAt('10:02');
    }

    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
