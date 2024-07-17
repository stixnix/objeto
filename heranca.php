<?php
class carro {
    private $nome;
    private $ano;
    private $cor;

    public function __construct($nome, $ano, $cor) {
        $this->nome = $nome;
        $this->ano = $ano;
        $this->cor = $cor;
    }

    public function apresentar() {
        return "Meu carro é um " . $this->nome . " ano " . $this->ano . " da cor " . $this->cor;
    }
}

class carroEletrico extends carro {
    private $bateria;

    public function __construct($nome, $ano, $cor, $bateria) {
        parent::__construct($nome, $ano, $cor);
        $this->bateria = $bateria;
    }

    public function apresentar() {
        return parent::apresentar() . ". A duração da bateria é de " . $this->bateria . " KM.";
    }
}

$carroEletrico1 = new carroEletrico("Tesla", 2024, "Prata", 300);

echo $carroEletrico1->apresentar();
?>
