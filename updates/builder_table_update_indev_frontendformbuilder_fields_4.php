<?php namespace Indev\FrontEndFormBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIndevFrontendformbuilderFields4 extends Migration
{
    public function up()
    {
        Schema::table('indev_frontendformbuilder_fields', function($table)
        {
            $table->string('value')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('indev_frontendformbuilder_fields', function($table)
        {
            $table->dropColumn('value');
        });
    }
}
