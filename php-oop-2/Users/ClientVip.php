<?php 

require_once __DIR__ . '/Users.php';

/**
*   CLiet Vip Class (Classe Figlia)
*/

class ClientVip extends Users{

    // Proprietà
    private $level;

    // Costruttore

    function __construct($firstName, $lastName, $age, $level = 1){
        parent::__construct($firstName, $lastName, $age);
        $this->level = $level;
    }

    // Methods

    protected function setSale(){
        if($this->age > 40){
            $this->sale = 20;
        } else if($this->level > 3){
            $this->sale = 35;
        }else{
            $this->sale = 0;
        }
        
    }
}