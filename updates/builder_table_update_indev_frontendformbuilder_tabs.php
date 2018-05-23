<?php namespace Indev\FrontEndFormBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIndevFrontendformbuilderTabs extends Migration
{
    public function up()
    {
        Schema::table('indev_frontendformbuilder_tabs', function($table)
        {
            $table->integer('position');
            $table->increments('id')->unsigned(false)->change();
            $table->string('name')->change();
        });
    }
    
    public function down()
    {
        Schema::table('indev_frontendformbuilder_tabs', function($table)
        {
            $table->dropColumn('position');
            $table->increments('id')->unsigned()->change();
            $table->string('name', 191)->change();
        });
    }
}
