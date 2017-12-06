<?php namespace DipeshBanjade\Company\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDipeshbanjadeCompany6 extends Migration
{
    public function up()
    {
        Schema::table('dipeshbanjade_company_', function($table)
        {
            $table->string('com_home_slider');
        });
    }
    
    public function down()
    {
        Schema::table('dipeshbanjade_company_', function($table)
        {
            $table->dropColumn('com_home_slider');
        });
    }
}
