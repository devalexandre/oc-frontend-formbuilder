<?php namespace Indev\FrontEndFormBuilder\Models;

use Model;

/**
 * Model
 */
class Tabs extends Model
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
    public $table = 'indev_frontendformbuilder_tabs';

    public $belongsTo = [
        'formadvance' => ['Indev\FrontEndFormBuilder\Models\FormAdvance','key'=>'formadvance_id']
    ];

    public $hasMany = [
        'fields' => 'Indev\FrontEndFormBuilder\Models\Fields',
    ];
}
