<?php namespace Indev\FrontEndFormBuilder\Models;

use Model;

/**
 * Model
 */
class ForntendFormBuilder extends Model
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

    public $jsonable = ['fields','tabs'];



    /**
     * @var string The database table used by the model.
     */
    public $table = 'indev_frontendformbuilder_forms';
}
