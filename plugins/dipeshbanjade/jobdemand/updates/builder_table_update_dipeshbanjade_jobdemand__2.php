<?php namespace DipeshBanjade\Jobdemand\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDipeshbanjadeJobdemand2 extends Migration
{
    public function up()
    {
        Schema::table('dipeshbanjade_jobdemand_', function($table)
        {
            $table->date('job_com_start_date')->nullable()->unsigned(false)->default(null)->change();
            $table->date('job_com_end_date')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('dipeshbanjade_jobdemand_', function($table)
        {
            $table->dateTime('job_com_start_date')->nullable()->unsigned(false)->default(null)->change();
            $table->dateTime('job_com_end_date')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
