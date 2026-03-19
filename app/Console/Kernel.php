<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
protected function schedule(Schedule $schedule)
{
    // Daily pick at 9:00 AM Pakistan time
    $schedule->command('notifications:send daily_pick')
             ->dailyAt('09:00')
             ->timezone('Asia/Karachi');

    // Continue reminders at 10:00 AM Pakistan time
    $schedule->command('notifications:send continue_reminder')
             ->dailyAt('10:00')
             ->timezone('Asia/Karachi');
}


    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
