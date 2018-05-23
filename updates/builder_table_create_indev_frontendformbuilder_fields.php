<?php namespace Indev\FrontEndFormBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIndevFrontendformbuilderFields extends Migration
{
    public function up()
    {
        Schema::create('indev_frontendformbuilder_fields', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('label');
            $table->string('type');
            $table->string('track')->nullable();
            $table->string('classe')->nullable();
            $table->text('options')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('indev_frontendformbuilder_fields');
    }
}
