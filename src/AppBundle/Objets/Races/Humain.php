<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace AppBundle\Objets\Races;
/**
 * Description of Humain
 *
 * @author alice-gabbana
 */
class Humain {
    
    private $att;
    private $mov;
    private $def;
    
    public function __construct() {
        $att = 8;
        $mov = 3;
        $def = 0.3;
    }
    
}
