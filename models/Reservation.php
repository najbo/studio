<?php namespace DigitalArtisan\Studio\Models;

use Model;

/**
 * Model
 */
class Reservation extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['start', 'end', 'deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digitalartisan_studio_reservations';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


    public $belongsTo = [
        'statut' => ['DigitalArtisan\Studio\Models\Statut',
                   'key' => 'statut_id',
                   'order' => 'sort_order'], 
        'tenant' => ['DigitalArtisan\Studio\Models\Tenant',
                   'key' => 'tenant_id']                                      
    ];

}
