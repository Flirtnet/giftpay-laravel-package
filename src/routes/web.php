<?php
// web.php

use Illuminate\Support\Facades\Route;
use YourNamespace\FlirtnetGift\Controllers\FlirtnetGiftValidationController;

Route::post('/payment/validate', [FlirtnetGiftValidationController::class, 'validatePayment']);
