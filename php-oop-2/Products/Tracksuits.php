<?php 
// Import Class Products

require_once __DIR__ . '/Products.php';
require_once __DIR__ . '/trait.php';


/**
*   CLASS Tracksuits (Classe Figlia)
*/

class Tracksuits extends Products{
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
        $this->img = $img;
    }
}

// Istanze

$model_7 = new Tracksuits('Tracksuits', 'NIKE', 119.99,0, 'Portugal Strike', 'Realizzata in tessuto traspirante, la tuta Portugal Strike dona un look completo al tuo riscaldamento pre-partita. La giacca con zip e le aperture con zip sulla gamba consentono di passare facilmente dallo spogliatoio al campo.', 5,'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,b_rgb:f5f5f5/3d00ecc4-e2d1-4d9b-9a6b-4562d8c86d3c/tuta-da-calcio-portugal-strike-wmWPzw.png');

// var_dump($model_7);
$tracksuits[] = $model_7;


$model_8= new Tracksuits('Tracksuits', 'NIKE', 129.99,0, 'Team 31 Courtside', 'Fai il tifo per il campionato con la tuta Team 31 Nike Courtside NBA. Leggera e rifinita da cima a fondo, con una comoda fodera in mesh e un fit ampio, è perfetta per la sera della partita.', 5,'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,b_rgb:f5f5f5/692e0ef4-e25c-449a-9df0-183a6f6f71b6/tuta-team-31-courtside-nba-Qzq3W4.png');

// var_dump($model_8);
$tracksuits[] = $model_8;


$model_9= new Tracksuits('Tracksuits', 'NIKE', 139.99,0, 'FC Barcelona Strike', 'La tuta FC Barcelona Strike comprende giacca con zip e pantaloni regolabili per uno stile versatile. Il tessuto traspirante mantiene la pelle asciutta.', 5,'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,b_rgb:f5f5f5/0ab7d0c7-1f64-4382-a882-3c054b524306/tuta-da-calcio-in-tessuto-fc-barcelona-strike-L8bSCJ.png');

// var_dump($model_9);
$tracksuits[] = $model_9;