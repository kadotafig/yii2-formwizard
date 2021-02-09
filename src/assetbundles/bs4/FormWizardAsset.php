<?php
namespace kadotafig\formwizard\assetbundles\bs4;

use kadotafig\formwizard\assetbundles\bs4\ThemeBase as BaseTheme;

class FormWizardAsset extends BaseTheme
{

    public $js = [
        'js/formwizard.min.js',
        'js/jquery.smartWizard.js',
    ];

    public $css = [
        'css/animate.css',
        'css/shake.css',
        'css/smart_wizard.css',
        'css/icons-theme.css',
    ];
}
