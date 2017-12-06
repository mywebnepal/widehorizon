<?php namespace DipeshBanjade\Company\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDipeshbanjadeCompany3 extends Migration
{
    public function up()
    {
        Schema::table('dipeshbanjade_company_', function($table)
        {
            $table->string('com_strong_point');
        });
    }
    
    public function down()
    {
        Schema::table('dipeshbanjade_company_', function($table)
        {
            $table->dropColumn('com_strong_point');
        });
    }
}
