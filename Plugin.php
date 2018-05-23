<?php namespace Indev\FrontEndFormBuilder;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Indev\FrontEndFormBuilder\Components\Form' => 'Formbuilder',
            'Indev\FrontEndFormBuilder\Components\Basic' => 'FormBasic'
        ];
    }
    public function registerSettings()
    {
    }
}
