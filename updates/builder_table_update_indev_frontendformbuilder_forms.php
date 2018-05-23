<?php namespace Indev\FrontEndFormBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIndevFrontendformbuilderForms extends Migration
{
    public function up()
    {
        Schema::table('indev_frontendformbuilder_forms', function($table)
        {
            $table->dropColumn('data_request');
            $table->dropColumn('data_request_update');
            $table->dropColumn('data_request_success');
            $table->dropColumn('data_request_confirm');
            $table->dropColumn('data_request_redirect');
            $table->dropColumn('data_request_data');
            $table->dropColumn('data_request_before_update');
            $table->dropColumn('data_request_error');
            $table->dropColumn('data_request_complete');
            $table->dropColumn('data_request_files');
        });
    }
    
    public function down()
    {
        Schema::table('indev_frontendformbuilder_forms', function($table)
        {
            $table->text('data_request');
            $table->string('data_request_update', 191)->nullable();
            $table->string('data_request_success', 191)->nullable();
            $table->string('data_request_confirm', 191)->nullable();
            $table->string('data_request_redirect', 191)->nullable();
            $table->string('data_request_data', 191)->nullable();
            $table->string('data_request_before_update', 191)->nullable();
            $table->string('data_request_error', 191)->nullable();
            $table->string('data_request_complete', 191)->nullable();
            $table->boolean('data_request_files')->nullable();
        });
    }
}
