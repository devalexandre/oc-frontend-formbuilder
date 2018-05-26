<?php namespace Indev\FrontEndFormBuilder\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class TabsController extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    public $requiredPermissions = ['Tabs'];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Indev.FrontEndFormBuilder', 'main-menu-item', 'side-menu-item2');
    }
}
