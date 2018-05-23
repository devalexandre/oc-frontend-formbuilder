<?php namespace Indev\FrontEndFormBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIndevFrontendformbuilderForms2 extends Migration
{
    public function up()
    {
        Schema::table('indev_frontendformbuilder_forms', function($table)
        {
            $table->text('tabs');
        });
    }
    
    public function down()
    {
        Schema::table('indev_frontendformbuilder_forms', function($table)
        {
            $table->dropColumn('tabs');
        });
    }
}
