<?php namespace DipeshBanjade\Company\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDipeshbanjadeCompany7 extends Migration
{
    public function up()
    {
        Schema::table('dipeshbanjade_company_', function($table)
        {
            $table->string('com_site_faq')->nullable();
            $table->string('com_strong_point', 255)->nullable()->change();
            $table->string('com_welcome_msg_heading', 255)->nullable()->change();
            $table->string('com_our_patner', 255)->nullable()->change();
            $table->string('com_home_slider', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('dipeshbanjade_company_', function($table)
        {
            $table->dropColumn('com_site_faq');
            $table->string('com_strong_point', 255)->nullable(false)->change();
            $table->string('com_welcome_msg_heading', 255)->nullable(false)->change();
            $table->string('com_our_patner', 255)->nullable(false)->change();
            $table->string('com_home_slider', 255)->nullable(false)->change();
        });
    }
}
