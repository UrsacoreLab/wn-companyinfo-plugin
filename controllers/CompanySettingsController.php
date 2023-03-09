<?php

namespace UrsacoreLab\CompanyInfo\Controllers;

use Backend\Classes\Controller;
use UrsacoreLab\CompanyInfo\Models\CompanySettings;
use UrsacoreLab\CompanyInfo\Resources\CompanyResource;
use UrsacoreLab\StaticVars\Classes\Additional;

class CompanySettingsController extends Controller
{
    public function list(): CompanyResource|array
    {
        $debug = config('app.debug'); // If APP_DEBUG = true - show additional information on Frontend

        $settings = CompanySettings::instance();

        if (isset($settings)) {
            return CompanyResource::make($settings)
                ->additional(Additional::success($debug, null, 'statuses.synced'));
        }

        return Additional::error($debug);
    }
}
