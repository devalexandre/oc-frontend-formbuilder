<?php namespace Indev\FrontEndFormBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIndevFrontendformbuilderTabs5 extends Migration
{
    public function up()
    {
        Schema::table('indev_frontendformbuilder_tabs', function($table)
        {
            $table->string('name')->change();
        });
    }
    
    public function down()
    {
        Schema::table('indev_frontendformbuilder_tabs', function($table)
        {
            $table->string('name', 191)->change();
        });
    }
}
