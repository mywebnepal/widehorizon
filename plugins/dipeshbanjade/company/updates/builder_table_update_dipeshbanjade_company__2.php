<?php namespace DipeshBanjade\Company\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDipeshbanjadeCompany2 extends Migration
{
    public function up()
    {
        Schema::table('dipeshbanjade_company_', function($table)
        {
            $table->string('com_focus_port', 255)->nullable();
            $table->string('com_working_time', 255)->nullable();
            $table->renameColumn('com_wel_message_heading', 'com_welcome_msg');
            $table->dropColumn('com_focus_on');
            $table->dropColumn('com_strong_point');
            $table->dropColumn('com_working_day');
            $table->dropColumn('com_working_hour');
            $table->dropColumn('com_welcome_message');
        });
    }
    
    public function down()
    {
        Schema::table('dipeshbanjade_company_', function($table)
        {
            $table->dropColumn('com_focus_port');
            $table->dropColumn('com_working_time');
            $table->renameColumn('com_welcome_msg', 'com_wel_message_heading');
            $table->string('com_focus_on', 255)->nullable();
            $table->string('com_strong_point', 255)->nullable();
            $table->string('com_working_day', 255)->nullable();
            $table->string('com_working_hour', 255)->nullable();
            $table->string('com_welcome_message', 255)->nullable();
        });
    }
}
