<?php namespace DipeshBanjade\Jobdemand\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDipeshbanjadeJobdemand extends Migration
{
    public function up()
    {
        Schema::table('dipeshbanjade_jobdemand_', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->dropColumn('job_com_status');
        });
    }
    
    public function down()
    {
        Schema::table('dipeshbanjade_jobdemand_', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->boolean('job_com_status')->nullable();
        });
    }
}
