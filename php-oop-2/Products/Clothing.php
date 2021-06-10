<?php 
// Import Class Products

require_once __DIR__ . '/Products.php';
require_once __DIR__ . '/trait.php';


/**
*   CLASS CLOTHING (Classe Figlia)
*/

class Clothing extends Products{
    // Attributi/Proprietà
    // protected $name;
    // protected $descriptions;
    // protected $review;

    // Trait
    use Details;

    
    //Construct

    function __construct($type,$brand,$price,$salePrice,$name,$descriptions,$review,$img){
        parent::__construct($type,$brand,$price,$salePrice);
        $this->name = $name;
        $this->descriptions = $descriptions;
        $this->review = $review;
        $this->img= $img;
    }
}


// Istanze

$model_4 = new Clothing('T-shirt', 'NIKE', 89.99,0, 'Maglia da calcio - Uomo', 'Tessuto Nike Breathe per pelle fresca e asciutta', 5,'https://static.nike.com/a/images/q_auto:eco/t_product_v1/f_auto/dpr_1.0/w_586,c_limit/f04e9d9c-2a00-43cd-906e-2d03da8f049d/maglia-da-calcio-olanda-2020-stadium-da-home-989fpV.png');

// var_dump($model_3);
$clothings[] = $model_4;


$model_5 = new Clothing('T-shirt', 'NIKE', 69.99,0, 'Inghilterra 2020 Stadium - Away', 'Tessuto Nike Breathe per pelle fresca e asciutta.', 5,'https://static.nike.com/a/images/q_auto:eco/t_product_v1/f_auto/dpr_1.0/w_586,c_limit/9783badc-9d96-4ecb-82dc-388871fda306/maglia-da-calcio-inghilterra-2020-stadium-per-away-p3gLB4.png');

// var_dump($model_4);
$clothings[] = $model_5;


$model_6 = new Clothing('T-shirt', 'NIKE', 89.99,0, 'Portogallo 2020 Stadium - Away', 'Tessuto Nike Breathe per pelle fresca e asciutta.', 5,'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,b_rgb:f5f5f5/45172ece-2849-41e1-a92a-de4d9b63790c/maglia-da-calcio-portogallo-2020-stadium-da-away-8BwJQ2.png');

// var_dump($model_4);
$clothings[] = $model_6;
