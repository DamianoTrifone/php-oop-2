<?php 
    class User {
        public $nome;
        public $cognome;
        public $eta;
        public $email;

        function __construct($nome, $cognome, $eta, $email = ""){
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->eta = $eta;
            $this->email = $email;
        }
        public function sconto(){
            if ($this->eta <= 30){
                $this->sconto = 35;
            } else {
                $this->sconto = 0;
                echo "Non hai diritto ad alcuno sconto";
            }
        }
    }
; ?>
