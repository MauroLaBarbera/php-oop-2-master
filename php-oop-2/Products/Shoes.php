<?php 
// Import Class Products

require_once __DIR__ . '/Products.php';
require_once __DIR__ . '/trait.php';

/**
*   CLASS SHOES (Classe Figlia)
*/

class Shoes extends Products {
    // Attributi/Proprietà
    // protected $name;
    // protected $descriptions;
    // protected $review;
    

    use Details;

    //Construct

    function __construct($type,$brand,$price,$salePrice,$name,$descriptions,$review,$img){
        parent::__construct($type,$brand,$price,$salePrice);
        $this->name = $name;
        $this->descriptions = $descriptions;
        $this->review = $review;
        $this->img = $img;
        // $this->shoes = array();
    }



    //Methods
    

}

// Istanze

$model_1 = new Shoes('Sneakers', 'NIKE', 79.99, 0, 'Nike Air Force 1', 'Divertiti nel comfort, con Nike Air Force 1. La sensazione classica della pelle e i dettagli che hanno reso questa scarpa un\'icona non ti faranno passare inosservato.', 5,'https://static.nike.com/a/images/q_auto:eco/t_product_v1/f_auto/dpr_1.0/w_586,c_limit/1aa3abc4-692e-466b-b985-570a178f25ef/scarpa-air-force-1-xjblV7.png');
$shoes[] = $model_1;







// var_dump($model_1);

$model_2 = new Shoes('Stringate', 'NIKE', 149.99, 0, 'Derby Intreccio a mano', 'Scarpa in vera pelle...', 5,'https://static.nike.com/a/images/q_auto:eco/t_product_v1/f_auto/dpr_1.0/w_586,c_limit/i1-69a0e034-0c42-4229-847c-edfb17c1b9c4/scarpa-air-max-270-wHfTtf.png');

$shoes[] = $model_2;

$model_3 = new Shoes('Stringate', 'NIKE', 169.99, 0, 'Derby Intreccio a mano', 'Scarpa in vera pelle...', 5,'https://static.nike.com/a/images/q_auto:eco/t_product_v1/f_auto/dpr_1.0/w_586,c_limit/d23b746a-1b4e-48e7-9d01-fe5a60c6072c/scarpa-air-max-plus-xG6H4f.png');

$shoes[] = $model_3;







// var_dump($shoes);


// foreach($shoes as $scarpa){
//     var_dump($scarpa->name . ' ' . $scarpa->descriptions);
// }






// var_dump($model_2);

