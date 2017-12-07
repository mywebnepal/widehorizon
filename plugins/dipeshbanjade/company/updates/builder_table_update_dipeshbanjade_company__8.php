<?php namespace DipeshBanjade\Company\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDipeshbanjadeCompany8 extends Migration
{
    public function up()
    {
        Schema::table('dipeshbanjade_company_', function($table)
        {
            $table->text('com_servies');
            $table->text('com_sis_com')->nullable()->unsigned(false)->default(null)->change();
            $table->text('com_crt_details')->nullable()->unsigned(false)->default(null)->change();
            $table->text('com_working_time')->nullable()->unsigned(false)->default(null)->change();
            $table->text('com_strong_point')->nullable()->unsigned(false)->default(null)->change();
            $table->text('com_welcome_msg_heading')->nullable()->unsigned(false)->default(null)->change();
            $table->text('com_our_patner')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('dipeshbanjade_company_', function($table)
        {
            $table->dropColumn('com_servies');
            $table->string('com_sis_com', 255)->nullable()->unsigned(false)->default(null)->change();
            $table->string('com_crt_details', 255)->nullable()->unsigned(false)->default(null)->change();
            $table->string('com_working_time', 255)->nullable()->unsigned(false)->default(null)->change();
            $table->string('com_strong_point', 255)->nullable()->unsigned(false)->default(null)->change();
            $table->string('com_welcome_msg_heading', 255)->nullable()->unsigned(false)->default(null)->change();
            $table->string('com_our_patner', 255)->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
