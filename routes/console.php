<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('migrate_seed', function () {
    Artisan::call('migrate:rollback');
    echo "===Migrate Rollback Done=== \n";
    Artisan::call('migrate');
    echo "===Migrated=== \n";
    Artisan::call('db:seed');
    echo "===Seed Generated=== \n";
});
