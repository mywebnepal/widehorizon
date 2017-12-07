<?php namespace DipeshBanjade\Company\Models;

use Model;

/**
 * Model
 */
class CompanySetting extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dipeshbanjade_company_';

    /*single image mapping*/
    public $attachOne = [
        'com_logo' => 'System\Models\File',
        /*'staff_image'=> 'System\Models\File',*/
        // 'certificate_image' => 'System\Models\File',
        // 'sis_logo'=>'System\Models\File',
        // 'patner_logo'=>'System\Models\File',
        /* 'slider_img' =>'System\Models\File'*/
    ];
    /*multiple image mapping*/
    /*public $attachMany = [
        'slider_img' => 'System\Models\File'
    ];*/

    /*json file manage */
    protected $jsonable = [
        'com_staff_details', 'com_crt_details', 'com_sis_com', 'com_focus_port', 'com_welcome_msg', 'com_working_time', 'com_our_patner', 'com_home_slider','com_strong_point', 'com_site_faq', 'com_servies'
    ];
}
