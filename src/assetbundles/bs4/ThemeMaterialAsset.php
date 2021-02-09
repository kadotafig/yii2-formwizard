<?php
namespace kadotafig\formwizard\assetbundles\bs4;

use kadotafig\formwizard\assetbundles\bs4\ThemeBase;

class ThemeMaterialAsset extends ThemeBase
{
    public $js = [
        'js/theme/waves.js',
        'js/theme/material.js',
    ];
    public $css = [
        'css/theme/smart_wizard_theme_material.min.css',
        'css/theme/waves.css',
    ];

    public function init()
    {
        parent::init();
        array_push($this->depends, 'kadotafig\formwizard\assetbundles\bs4\FormWizardAsset');
    }
}
