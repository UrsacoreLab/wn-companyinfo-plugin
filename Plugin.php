<?php

namespace UrsacoreLab\CompanyInfo;

use System\Classes\PluginBase;
use UrsacoreLab\CompanyInfo\Models\CompanySettings;

class Plugin extends PluginBase
{
    public function pluginDetails(): array
    {
        return [
            'name'        => 'ursacorelab.companyinfo::lang.plugin.name',
            'description' => 'ursacorelab.companyinfo::lang.plugin.description',
            'author'      => 'UrsacoreLab',
            'icon'        => 'icon-leaf',
        ];
    }

    public function registerSettings(): array
    {
        return [
            'value' => [
                'label'       => 'ursacorelab.companyinfo::lang.plugin.name',
                'description' => 'ursacorelab.companyinfo::lang.plugin.description',
                'category'    => 'UrsacoreLab',
                'icon'        => 'icon-globe',
                'class'       => CompanySettings::class,
                'order'       => 1,
                'keywords'    => '',
            ],
        ];
    }
}
