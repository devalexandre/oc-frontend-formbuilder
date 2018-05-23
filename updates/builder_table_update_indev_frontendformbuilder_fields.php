<?php namespace Indev\FrontEndFormBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIndevFrontendformbuilderFields extends Migration
{
    public function up()
    {
        Schema::table('indev_frontendformbuilder_fields', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->string('name')->change();
            $table->string('label')->change();
            $table->string('type')->change();
            $table->string('track')->change();
            $table->string('classe')->change();
        });
    }
    
    public function down()
    {
        Schema::table('indev_frontendformbuilder_fields', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->string('name', 191)->change();
            $table->string('label', 191)->change();
            $table->string('type', 191)->change();
            $table->string('track', 191)->change();
            $table->string('classe', 191)->change();
        });
    }
}
