<?php namespace DigitalArtisan\Studio\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Reservations extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'digitalartisan_studio_reservations' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('DigitalArtisan.Studio', 'studio', 'reservations');
    }
}
