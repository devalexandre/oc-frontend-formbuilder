<?php namespace Indev\FrontEndFormBuilder\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class FormbuilderController extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $requiredPermissions = ['Basic Form'];


    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Indev.FrontEndFormBuilder', 'main-menu-item');
    }
}
