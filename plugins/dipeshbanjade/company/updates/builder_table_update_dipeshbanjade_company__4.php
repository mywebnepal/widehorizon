<?php namespace DipeshBanjade\Company\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDipeshbanjadeCompany4 extends Migration
{
    public function up()
    {
        Schema::table('dipeshbanjade_company_', function($table)
        {
            $table->string('com_welcome_msg_heading');
        });
    }
    
    public function down()
    {
        Schema::table('dipeshbanjade_company_', function($table)
        {
            $table->dropColumn('com_welcome_msg_heading');
        });
    }
}
