<?php

use Aerni\Fathom\Http\Controller\FathomController;

/*
|--------------------------------------------------------------------------
| CP routes
|--------------------------------------------------------------------------
*/

Route::get('visit/fathom', [FathomController::class, '__invoke'])->name('fathom');
