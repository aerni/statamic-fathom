<?php

use Aerni\Fathom\GetFathomLink;

/*
|--------------------------------------------------------------------------
| CP routes
|--------------------------------------------------------------------------
*/

Route::redirect('visit/fathom', GetFathomLink::handle())->name('fathom');
