<?php 
    class user {
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
    }

; ?>
