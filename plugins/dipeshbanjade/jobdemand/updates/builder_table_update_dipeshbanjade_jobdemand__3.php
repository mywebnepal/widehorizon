<?php namespace DipeshBanjade\Jobdemand\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDipeshbanjadeJobdemand3 extends Migration
{
    public function up()
    {
        Schema::table('dipeshbanjade_jobdemand_', function($table)
        {
            $table->text('job_details')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('dipeshbanjade_jobdemand_', function($table)
        {
            $table->string('job_details', 255)->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
