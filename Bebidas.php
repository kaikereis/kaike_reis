<?php

abstract class Bebida {
    abstract public function mostrarBebida();
    abstract public function verificarPreco();
}

class Vinho extends Bebida {
    private $nome = "Vinho";
    private $preco;

    public function __construct($preco) {
        $this->preco = $preco;
    }

    public function mostrarBebida() {
        return "Bebida: $this->nome, Preço: R$ $this->preco";
    }

    public function verificarPreco() {
        return $this->preco < 25 ? "Preço menor que R$25" : "Preço maior que R$25";
    }
}

class Refrigerante extends Bebida {
    private $nome = "Refrigerante";
    private $preco;

    public function __construct($preco) {
        $this->preco = $preco;
    }

    public function mostrarBebida() {
        return "Bebida: $this->nome, Preço: R$ $this->preco";
    }

    public function verificarPreco() {
        return $this->preco < 5 ? "Preço menor que R$5" : "Preço maior que R$5";
    }
}

class Suco extends Bebida {
    private $nome = "Suco";
    private $preco;

    public function __construct($preco) {
        $this->preco = $preco;
    }

    public function mostrarBebida() {
        return "Bebida: $this->nome, Preço: R$ $this->preco";
    }

    public function verificarPreco() {
        return $this->preco < 2.5 ? "Preço menor que R$2,50" : "Preço maior que R$2,50";
    }
}

?>
