<?php
class carro {
    private $nome;
    private $ano;
    private $cor;

    // Construtor que aceita três parâmetros
    public function __construct($nome, $ano, $cor) {
        $this->nome = $nome;
        $this->ano = $ano;
        $this->cor = $cor;
    }

    public function setnome($nome) {
        $this->nome = $nome;
    }

    public function getnome() {
        return $this->nome;
    }

    public function setano($ano) {
        if($ano > 0) {
            $this->ano = $ano;
        }
    }

    public function getano() {
        return $this->ano;
    }

    public function setcor($cor) {
        if(!empty($cor)) {
            $this->cor = $cor;
        }
    }

    public function getcor() {
        return $this->cor;
    }

    public function apresentar() {
        return "Meu carro é um " . $this->nome . " ano " . $this->ano . " da cor " . $this->cor;
    }
}

// Instanciando a classe carro com os três argumentos necessários
$carro1 = new carro("Celta", 2003, "vermelho");

echo $carro1->apresentar();
?>
