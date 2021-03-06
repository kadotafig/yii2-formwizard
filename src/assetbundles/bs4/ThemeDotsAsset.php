<?php
namespace kadotafig\formwizard\assetbundles\bs4;

use kadotafig\formwizard\assetbundles\bs4\ThemeBase;

class ThemeDotsAsset extends ThemeBase
{

    public $css = [
        'css/theme/smart_wizard_theme_dots.min.css',
    ];

    public function init()
    {
        parent::init();
        array_push($this->depends, 'kadotafig\formwizard\assetbundles\bs4\FormWizardAsset');
    }
}
