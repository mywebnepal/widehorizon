<?php namespace DipeshBanjade\Company\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDipeshbanjadeCompany extends Migration
{
    public function up()
    {
        Schema::table('dipeshbanjade_company_', function($table)
        {
            $table->string('com_staff_details')->nullable();
            $table->string('com_crt_details')->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->string('com_name')->nullable()->change();
            $table->string('com_addr')->nullable()->change();
            $table->string('com_phone')->nullable()->change();
            $table->string('com_email')->nullable()->change();
            $table->string('com_fax')->nullable()->change();
            $table->string('com_logo')->nullable()->change();
            $table->text('com_slogon')->nullable()->change();
            $table->string('com_mob')->nullable()->change();
            $table->string('com_fb_link')->nullable()->change();
            $table->string('com_twitter_link')->nullable()->change();
            $table->string('com_linkin_link')->nullable()->change();
            $table->string('com_gmail_link')->nullable()->change();
            $table->string('com_youtube_link')->nullable()->change();
            $table->string('com_focus_on')->nullable()->change();
            $table->string('com_strong_point')->nullable()->change();
            $table->string('com_sis_com')->nullable()->change();
            $table->string('com_working_day')->nullable()->change();
            $table->string('com_working_hour')->nullable()->change();
            $table->text('com_wel_message_heading')->nullable()->change();
            $table->string('com_welcome_message')->nullable()->change();
            $table->dropColumn('com_staff_name');
            $table->dropColumn('com_staff_degination');
            $table->dropColumn('com_staff_phone');
            $table->dropColumn('com_staff_email');
            $table->dropColumn('com_staff_fb');
            $table->dropColumn('com_staff_linkin');
            $table->dropColumn('com_staff_twitter');
            $table->dropColumn('com_staff_img');
            $table->dropColumn('com_crt_name');
            $table->dropColumn('com_crt_issue_date');
            $table->dropColumn('com_crt_img');
        });
    }
    
    public function down()
    {
        Schema::table('dipeshbanjade_company_', function($table)
        {
            $table->dropColumn('com_staff_details');
            $table->dropColumn('com_crt_details');
            $table->increments('id')->unsigned()->change();
            $table->string('com_name', 255)->nullable(false)->change();
            $table->string('com_addr', 255)->nullable(false)->change();
            $table->string('com_phone', 255)->nullable(false)->change();
            $table->string('com_email', 255)->nullable(false)->change();
            $table->string('com_fax', 255)->nullable(false)->change();
            $table->string('com_logo', 255)->nullable(false)->change();
            $table->text('com_slogon')->nullable(false)->change();
            $table->string('com_mob', 255)->nullable(false)->change();
            $table->string('com_fb_link', 255)->nullable(false)->change();
            $table->string('com_twitter_link', 255)->nullable(false)->change();
            $table->string('com_linkin_link', 255)->nullable(false)->change();
            $table->string('com_gmail_link', 255)->nullable(false)->change();
            $table->string('com_youtube_link', 255)->nullable(false)->change();
            $table->string('com_focus_on', 255)->nullable(false)->change();
            $table->string('com_strong_point', 255)->nullable(false)->change();
            $table->string('com_sis_com', 255)->nullable(false)->change();
            $table->string('com_working_day', 255)->nullable(false)->change();
            $table->string('com_working_hour', 255)->nullable(false)->change();
            $table->text('com_wel_message_heading')->nullable(false)->change();
            $table->string('com_welcome_message', 255)->nullable(false)->change();
            $table->string('com_staff_name', 255);
            $table->text('com_staff_degination');
            $table->string('com_staff_phone', 255);
            $table->text('com_staff_email');
            $table->string('com_staff_fb', 255);
            $table->string('com_staff_linkin', 255);
            $table->string('com_staff_twitter', 255);
            $table->string('com_staff_img', 255);
            $table->string('com_crt_name', 255);
            $table->string('com_crt_issue_date', 255);
            $table->string('com_crt_img', 255);
        });
    }
}
