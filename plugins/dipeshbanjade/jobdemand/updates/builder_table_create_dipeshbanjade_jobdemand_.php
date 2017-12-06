<?php namespace DipeshBanjade\Jobdemand\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDipeshbanjadeJobdemand extends Migration
{
    public function up()
    {
        Schema::create('dipeshbanjade_jobdemand_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('job_details')->nullable();
            $table->string('job_com_name')->nullable();
            $table->text('job_com_desc')->nullable();
            $table->string('job_com_web')->nullable();
            $table->text('job_com_country')->nullable();
            $table->boolean('job_com_status')->nullable();
            $table->dateTime('job_com_start_date')->nullable();
            $table->dateTime('job_com_end_date')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dipeshbanjade_jobdemand_');
    }
}
