<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('product', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display Product Data');
