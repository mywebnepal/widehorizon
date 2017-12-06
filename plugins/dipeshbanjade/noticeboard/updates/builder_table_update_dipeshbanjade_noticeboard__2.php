<?php namespace DipeshBanjade\Noticeboard\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDipeshbanjadeNoticeboard2 extends Migration
{
    public function up()
    {
        Schema::table('dipeshbanjade_noticeboard_', function($table)
        {
            $table->date('noc_start_date')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('dipeshbanjade_noticeboard_', function($table)
        {
            $table->dropColumn('noc_start_date');
        });
    }
}
