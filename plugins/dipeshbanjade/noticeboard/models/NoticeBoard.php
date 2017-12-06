<?php namespace DipeshBanjade\Noticeboard\Models;

use Model;

/**
 * Model
 */
class NoticeBoard extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dipeshbanjade_noticeboard_';

   public $attachOne = [
        'noc_img' => 'System\Models\File'
    ];
}
