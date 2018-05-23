<?php namespace Indev\FrontEndFormBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIndevFrontendformbuilderTabs extends Migration
{
    public function up()
    {
        Schema::create('indev_frontendformbuilder_tabs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('indev_frontendformbuilder_tabs');
    }
}
