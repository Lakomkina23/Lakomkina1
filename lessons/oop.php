<?php

class Car {

protected $brand;
protected $model;
protected $year;

public function __construct($b, $m, $y, $mileage = 0) {
    $this-> brand =$b;
    $this -> model =$m;
    $this -> year = $y;
    $this ->mileage = $mileage;
    }

public function drive () {
   echo "$this->brand $this->model ($this->year, $this->mileage) driving <br>";
}
public function addMileage ($mileage) {
   $this->mileage+=$mileage;
   return $this->mileage;
}
}

class ElectroCar extends Car {

public $ElectroCar;

    public function __construct($b, $m, $y, $mileage = 0){
        $this->electroCar=true;
        parent ::__construct($b, $m, $y, $mileage = 0);
    }
}


$audi = new Car ('Audi', 'qs', 2021);
$vesta = new Car ('Lada', 'Vesta', 2020,15000);

// echo $vesta->mileage;

$audi->drive ();
$vesta->drive ();

$currentAudiMileage= $audi->addMileage (2000);
echo$currentAudiMileage . '<br>';

$audi->drive ();
$vesta->drive ();

$tesla = new ElectroCar ('tesla', 'model s', 2021);
$tesla->drive();
