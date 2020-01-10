<?php namespace DigitalArtisan\Studio\Updates;

use Seeder;
use DigitalArtisan\Studio\Models\Statut;

class Seeder104 extends Seeder
{
    public function run()
    {
        
        Statut::truncate();       
        
        Statut::create([
            'title' => 'Provisoire',
            'sort_order' => 1
        ]);   
        
        Statut::create([
            'title' => 'Rejeté',
            'sort_order' => 2
        ]);  
        
        Statut::create([
            'title' => 'Confirmé',
            'sort_order' => 3
        ]);          

    }
}