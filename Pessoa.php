<?php
require_once 'Pessoa.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pessoa
 *
 * @author Killer
 */
class Pessoa {
    private $nome;
    private $idade;
    private $sexo;
    
    public function fazerAniver(){
        $this->setIdade($this->getIdade()+1);
        echo "<p>".$this->getNome()." fez aniversário, está com ".$this->getIdade()." anos.<p>";
    }
    
    function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->setSexo($sexo);
    }

    
    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getSexo() {
        return $this->sexo;
    }

    function setNome($nome) {
        
        $this->nome = $nome;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setSexo($sexo) {
        if($sexo == "M" || $sexo == "m"){
            $this->sexo = "Masculino";
        }elseif($sexo == "F" || $sexo == "f"){
            $this->sexo = "Feminíno";
        }    
    }
    
    public function descricaoPessoa(){
        
        echo "<table><tr><td><p>Nome: </p></td><td>".$this->getNome()."</td></tr>";
        echo "<tr><td><p>Idade: </p></td><td>".$this->getIdade()."</td></tr>";
        echo "<tr><td><p>Sexo: </p></td><td>".$this->getSexo()."</td></tr></table><br>";
        
    }


}
