<?php   
    include_once __DIR__ . '/User.php';
// ATTRIBUTI
    class Product {
        public $nome;
        public $marca;
        public $categoria;
        public $prezzo;
        public $giacenza;
        public $descrizione;

// COSTRUTTORE
    function __construct($nome, $marca, $categoria, $prezzo, $giacenza = [], $descrizione){
        $this->nome = $nome;
        $this->marca = $marca;
        $this->categoria = $categoria;
        $this->prezzo = $prezzo;
        $this->giacenza = $giacenza;
        $this->descrizione = $descrizione;

    }
    public function prezzoFinale() {
        $this->prezzoFinale(); 
        $prezzoFinale = $this->prezzo - ($this->prezzo * ($this->sconto / 100)); 
        return $prezzoFinale; 
    }};
; ?>
