<?php 

/**
 * CLASSE PRODUCTS (Classe Padre)
 */

class Products {
    // Attributi/Proprietà/Valori
    public $type;
    public $brand;
    public $price;
    public $salePrice;



    // Costruct per inizio
    
    function __construct($type,$brand,$price,$salePrice){
        $this->type = $type;
        $this->brand = $brand;
        $this->price = $price;
        $this->salePrice = $salePrice;
    }

    // Methods

    //metodo sconto
    public function getSalePrice($sale){
        $salePrice = $this->price - ($this->price * ($sale/ 100));

        return number_format($salePrice, 2);
    }

    // Tot da Pagare

     public function totPrice(){
         var_dump($this->price);
     }





}





