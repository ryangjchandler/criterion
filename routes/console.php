<?php

use App\Console\Commands\InspireCommand;
use Illuminate\Support\Facades\Schedule;

Schedule::command(InspireCommand::class)
    ->everyMinute()
    ->thenPingIf(config('services.inspire.ping_url') !== null, config('services.inspire.ping_url'));
