<?php

/**
 * CLASSE USERS (Classe Padre)
 */

class Users{

    // Attributi

    protected $firstName;
    protected $lastName;
    protected $age;
    protected $sale;

    // Construct

    function __construct($firstName, $lastName, $age){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    // Methods

    /**
    * Metodo per Nome intero
    */

    public function getFullName(){
        return $this->firstName . ' ' . $this->lastName;
    }

    /**
    * Metodo per settare lo sconto
    */

    protected function setSale(){
        $this->sale = $this->age > 40 ? 30 : 'Not Discount';
        
    }

    /**
    * Metodo per settare lo sconto
    */

    public function getSale(){

        $this->setSale();

        return $this->sale;
    }










}