<?php namespace DigitalArtisan\Studio\Models;

use Model;

/**
 * Model
 */
class Tenant extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'users';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
