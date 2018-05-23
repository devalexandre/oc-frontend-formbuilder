<?php namespace Indev\FrontEndFormBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIndevFrontendformbuilderFields3 extends Migration
{
    public function up()
    {
        Schema::table('indev_frontendformbuilder_fields', function($table)
        {
            $table->string('name')->change();
            $table->string('label')->change();
            $table->string('type')->change();
            $table->string('track')->change();
            $table->string('classe')->change();
            $table->renameColumn('tab_id', 'tabs_id');
        });
    }
    
    public function down()
    {
        Schema::table('indev_frontendformbuilder_fields', function($table)
        {
            $table->string('name', 191)->change();
            $table->string('label', 191)->change();
            $table->string('type', 191)->change();
            $table->string('track', 191)->change();
            $table->string('classe', 191)->change();
            $table->renameColumn('tabs_id', 'tab_id');
        });
    }
}
