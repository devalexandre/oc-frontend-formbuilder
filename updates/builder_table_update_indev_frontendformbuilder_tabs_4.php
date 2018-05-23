<?php namespace Indev\FrontEndFormBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIndevFrontendformbuilderTabs4 extends Migration
{
    public function up()
    {
        Schema::table('indev_frontendformbuilder_tabs', function($table)
        {
            $table->string('name')->change();
            $table->renameColumn('form_id', 'formadvance_id');
        });
    }
    
    public function down()
    {
        Schema::table('indev_frontendformbuilder_tabs', function($table)
        {
            $table->string('name', 191)->change();
            $table->renameColumn('formadvance_id', 'form_id');
        });
    }
}
