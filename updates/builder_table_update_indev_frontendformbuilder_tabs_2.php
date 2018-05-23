<?php namespace Indev\FrontEndFormBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIndevFrontendformbuilderTabs2 extends Migration
{
    public function up()
    {
        Schema::table('indev_frontendformbuilder_tabs', function($table)
        {
            $table->integer('form_id')->unsigned();
            $table->string('name')->change();
        });
    }
    
    public function down()
    {
        Schema::table('indev_frontendformbuilder_tabs', function($table)
        {
            $table->dropColumn('form_id');
            $table->string('name', 191)->change();
        });
    }
}
