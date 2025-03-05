<?php 

declare(strict_types=1);

class car {
    // Propiedades y los métodos
    
    /*
    public $color;
    public $brand;
    public $model;
    private $price;

    public function __construct($color, $brand, $model, $price){
        $this->color = $color;
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;
    } */

    // Promoted properties a partir de PHP 8
    public function __construct(
        public string $color,
        public readonly string $brand,
        public readonly string $model,
        private int $price
    )
    {
        
    }

    public function show_all () {
        return get_object_vars($this);
    }

}

$car1 = new car('red', 'Ford', 'Focus', 20000);
$car2 = new car('blue', 'Toyota', 'Corolla', 25000);

echo $car1->color;
echo $car2->brand;
$car2->color = 'green';
// $car2->price = 30000; // no se puede porque es privado

var_dump($car2->show_all());

?>