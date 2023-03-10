<?php

namespace UrsacoreLab\CompanyInfo\Models;

use Winter\Storm\Database\Model;

class CompanySettings extends Model
{
    use \Winter\Storm\Database\Traits\Validation;

    public $implement = [\System\Behaviors\SettingsModel::class];

    public string $settingsCode = 'ursacorelab_company_info';

    public string $settingsFields = 'fields.yaml';

    public array $rules = [
        'companyName'     => 'string',
        'siteName'        => 'required|string',
        'slogan'          => 'string',
        'postalCode'      => 'integer',
        'addressCountry'  => 'string',
        'addressRegion'   => 'string',
        'addressLocality' => 'string',
        'streetAddress'   => 'string',
        'email'           => 'required|email',
    ];
}
