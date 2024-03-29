<?php

namespace App\Console;

use App\Console\Commands\CalculateApplicantAnswerScore;
use App\Console\Commands\GenerateUserForApplicant;
use App\Console\Commands\MatchingOldApplicant;
use App\Console\Commands\PublishApplicantCampCommand;
use App\Console\Commands\RerollNullJSONAnswer;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        RerollNullJSONAnswer::class,
        CalculateApplicantAnswerScore::class,
        MatchingOldApplicant::class,
        GenerateUserForApplicant::class,
        PublishApplicantCampCommand::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
