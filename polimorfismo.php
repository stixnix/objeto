<?php
class Carros {
    public function abastecer() {
        return "pagando para abastecer.";
    }
}

class CarroGasolina extends Carros {
    public function abastecer() {
        return "Abastecendo o carro com gasolina.";
    }
}

class CarroEletricos extends Carros {
    public function abastecer() {
        return "Carregando a bateria do carro elétrico.";
    }
}

$carros = [
    new CarroGasolina(),
    new CarroEletricos(),
    new Carros()
];

foreach ($carros as $carro) {
    echo $carro->abastecer() . "<br>";
}
?>
