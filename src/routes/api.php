<?php
// api.php

use Illuminate\Support\Facades\Route;
use YourNamespace\FlirtnetGift\Controllers\FlirtnetGiftWebhookController;

Route::post('/webhook', [FlirtnetGiftWebhookController::class, 'handleWebhook']);
