<?php namespace Indev\FrontEndFormBuilder;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name' => 'Frontend Form Builder',
            'description' => 'create fast form to frontend',
            'author' => 'Indev Web',
            'icon' => 'icon-magic'
        ];
    }

    public function registerComponents()
    {
        return [
            'Indev\FrontEndFormBuilder\Components\Form' => 'Formbuilder',
            'Indev\FrontEndFormBuilder\Components\Basic' => 'FormBasic'
        ];
    }

}
