<?php
    class Utente{

    public $nome;

    public $cognome;

    public $carrello= [];

    public function __construct($_nome, $_cognome){

        $this->nome = $_nome; 

        $this->cognome = $_cognome;
    
    }

    public function aggiungiCarrello($prodotto){

        $this->carrello[] = $prodotto; 

    }

    public function getCarrello(){

        return $this->carrello;

    }

}

?>