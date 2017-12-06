<?php namespace DipeshBanjade\Company\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDipeshbanjadeCompany5 extends Migration
{
    public function up()
    {
        Schema::table('dipeshbanjade_company_', function($table)
        {
            $table->string('com_our_patner');
        });
    }
    
    public function down()
    {
        Schema::table('dipeshbanjade_company_', function($table)
        {
            $table->dropColumn('com_our_patner');
        });
    }
}
