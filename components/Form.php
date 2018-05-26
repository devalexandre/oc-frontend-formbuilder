<?php namespace Indev\FrontEndformbuilder\Components;

use Cms\Classes\ComponentBase;
use Indev\FrontEndformbuilder\Models\FormAdvance as FormBuilder;
use Indev\FrontEndFormBuilder\Models\FormAdvance;

class Form extends ComponentBase
{

    public $fields;
    public $tabs;

    public function componentDetails()
    {
        return [
            'name'        => 'Form Advance Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'name' => [
                'title'       => 'Name',
                'description' => 'form name',
                'default'     => '',
                'type'        => 'dropdown'
            ],
            'data_request' => [
                'title'       => 'data-request',
                'description' => 'specifies the AJAX handler name.',
                'default'     => '',
                'type'        => 'string'
            ],
            'data_request_update' => [
                'title'       => 'data-request-update',
                'description' => 'specifies a list of partials and page elements.',
                'default'     => '',
                'type'        => 'string'
            ],
            'data_request_success' => [
                'title'       => 'data-request-success',
                'description' => 'specifies JavaScript code to execute after the request is successfully',
                'default'     => '',
                'type'        => 'string'
            ],
            'data_request_confirm' => [
                'title'       => 'data-request-confirm',
                'description' => 'specifies a confirmation message.',
                'default'     => '',
                'type'        => 'string'
            ],
            'data_request_redirect' => [
                'title'       => 'data-request-redirect',
                'description' => 'specifies a URL to redirect the browser after the successful AJAX request',
                'default'     => '',
                'type'        => 'string'
            ],
            'data_request_data' => [
                'title'       => 'data-request-data',
                'description' => 'specifies additional POST parameters to be sent to the server',
                'default'     => '',
                'type'        => 'string'
            ],
            'data_request_before_update' => [
                'title'       => 'data-request-before-update',
                'description' => 'specifies JavaScript code to execute directly before the page contents are updated',
                'default'     => '',
                'type'        => 'string'
            ],
            'data_request_error' => [
                'title'       => 'data-request-error',
                'description' => 'specifies JavaScript code to execute if the request encounters an erro',
                'default'     => '',
                'type'        => 'string'
            ],
            'data_request_complete' => [
                'title'       => 'data-request-complete',
                'description' => 'specifies JavaScript code to execute if the request is successfully completed or encounters an error. ',
                'default'     => '',
                'type'        => 'string'
            ],
            'data_request_files' => [
                'title'       => 'data-request-files',
                'description' => 'when specified the request will accept file uploads,',
                'default'     => '',
                'type'        => 'checkbox'
            ],
            'data_request_flash' => [
                'title'       => 'data-request-flash',
                'description' => 'display message flash',
                'default'     => '',
                'type'        => 'checkbox'
            ],
        ];
    }

    public function getNameOptions()
    {
        return FormAdvance::pluck('name');
    }

    public function getProperty($propertyName) { return $this->property($propertyName); }

    public function onRun()
      {
          $forms = FormBuilder::where('name','=',$this->property('name'))
          ->with('tabs')
          ->first();

        $this->tabs =  $forms->tabs;
       
        $this->tabs =  array_sort($this->tabs,'position',SORT_ASC);

     
      

    }
}
