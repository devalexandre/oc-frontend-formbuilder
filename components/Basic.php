<?php namespace Indev\FrontEndformbuilder\Components;

use Cms\Classes\ComponentBase;

use Indev\FrontEndformbuilder\Models\ForntendFormBuilder as FormBuilder;
use Indev\FrontEndFormBuilder\Models\ForntendFormBuilder;

class Basic extends ComponentBase
{
   
    public $fields;
    public $tabs;

    public function componentDetails()
    {
        return [
            'name'        => 'Form Basic Component',
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
        $options = [];

        $dados = ForntendFormBuilder::get();
        foreach($dados as $d){
            $options[$d->id] = $d->name;
        }
        return $options;
    }

    public function getProperty($propertyName) { return $this->property($propertyName); }

    public function onRun()
      {
        

          $form = FormBuilder::where('name','=',$this->property('name'))->first();

          if($form){
        $this->fields = $form->fields;
        $this->tabs =  $form->tabs;

        $this->fields = $form->fields;
        $this->tabs =  array_sort($this->tabs,'position',SORT_ASC);
          }
   
    }
}