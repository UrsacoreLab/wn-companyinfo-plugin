<?php

namespace UrsacoreLab\CompanyInfo;

use Backend\Models\UserRole;
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

    public function registerPermissions(): array
    {
        return [
            'ursacorelab.companyinfo.access' => [
                'tab'   => 'ursacorelab.companyinfo::lang.plugin.name',
                'label' => 'ursacorelab.companyinfo::lang.permissions.access',
                'roles' => [UserRole::CODE_DEVELOPER, UserRole::CODE_PUBLISHER],
            ],
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
                'permissions' => ['ursacorelab.companyinfo.access'],
            ],
        ];
    }
}
