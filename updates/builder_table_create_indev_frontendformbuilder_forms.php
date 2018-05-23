<?php namespace Indev\FrontEndFormBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIndevFrontendformbuilderForms extends Migration
{
    public function up()
    {
        Schema::create('indev_frontendformbuilder_forms', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('data_request');
            $table->string('data_request_update')->nullable();
            $table->string('data_request_success')->nullable();
            $table->string('data_request_confirm')->nullable();
            $table->string('data_request_redirect')->nullable();
            $table->string('data_request_data')->nullable();
            $table->string('data_request_before_update')->nullable();
            $table->string('data_request_error')->nullable();
            $table->string('data_request_complete')->nullable();
            $table->boolean('data_request_files')->nullable();
            $table->text('fields');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('indev_frontendformbuilder_forms');
    }
}
