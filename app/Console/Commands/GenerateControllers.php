<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateControllers extends Command

   {
   /**
     * The name and signature of the console command.
     *
     * @var string
     */
     protected $signature = 'generate:controllers {name?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Loops into the application"s routes and generates a controller for each registered route';

/**
 * Create a new command instance.
 *
 * @return void
 */
public function __construct()
{
    parent::__construct();
}

/**
 * Execute the console command.
 *
 * @return mixed
 */
public function handle()
{
    //
    $routeCollection = \Route::getRoutes();

    foreach ($routeCollection as $value) {

$name = $value->getName();

        exec('php artisan make:model '.$name.' -m');
    }
}
}


