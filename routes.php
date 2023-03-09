<?php

use Illuminate\Support\Facades\Route;
use UrsacoreLab\CompanyInfo\Controllers\CompanySettingsController;

Route::get('/api/company-info', [CompanySettingsController::class, 'list']);
