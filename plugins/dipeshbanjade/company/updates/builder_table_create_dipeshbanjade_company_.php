<?php namespace DipeshBanjade\Company\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDipeshbanjadeCompany extends Migration
{
    public function up()
    {
        Schema::create('dipeshbanjade_company_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('com_name');
            $table->string('com_addr');
            $table->string('com_phone');
            $table->string('com_email');
            $table->string('com_fax');
            $table->string('com_logo');
            $table->text('com_slogon');
            $table->string('com_mob');
            $table->string('com_fb_link');
            $table->string('com_twitter_link');
            $table->string('com_linkin_link');
            $table->string('com_gmail_link');
            $table->string('com_youtube_link');
            $table->string('com_staff_name');
            $table->text('com_staff_degination');
            $table->string('com_staff_phone');
            $table->text('com_staff_email');
            $table->string('com_staff_fb');
            $table->string('com_staff_linkin');
            $table->string('com_staff_twitter');
            $table->string('com_staff_img');
            $table->string('com_crt_name');
            $table->string('com_crt_issue_date');
            $table->string('com_crt_img');
            $table->string('com_focus_on');
            $table->string('com_strong_point');
            $table->string('com_sis_com');
            $table->string('com_working_day');
            $table->string('com_working_hour');
            $table->text('com_wel_message_heading');
            $table->string('com_welcome_message');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dipeshbanjade_company_');
    }
}
