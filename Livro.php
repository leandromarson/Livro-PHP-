<?php
require_once 'InterfaceLivro.php';
require_once 'Pessoa.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Livro
 *
 * @author Killer
 */
class Livro implements InterfaceLivro{
    private $titulo;
    private $autor;
    private $totPag;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    public function descricao(){
        
        echo "<table><tr><td><p>Titulo: </p></td><td>".$this->getTitulo()."</td></tr>";
        echo "<tr><td><p>Autor: </p></td><td>".$this->getAutor()."</td></tr>";
        echo "<tr><td><p>Total de páginas: </p></td><td>".$this->getTotPag()."</td></tr>";
        echo "<tr><td><p>Página atual: </p></td><td>".$this->getPagAtual()."</td></tr>";
        echo "<tr><td><p>Aberto?: </p></td><td>".($this->getAberto()?"SIM":"NÃO")."</td></tr>";
        echo "<tr><td><p>Leitor: </p></td><td>".$this->getLeitor()->getNome()."</td></tr></table><br>";
        
    }

    public function abrir() {
        if($this->getAberto()){
            echo "<p>O livro ".$this->getTitulo()." já está aberto.</p>";
        }else{
            echo "<p>Abrindo o livro ".$this->getTitulo().".</p>";
            $this->setAberto(true);            
        }
    }
    
    public function fechar() {
        if($this->getAberto()){
            echo "<p>Fechando o livro ".$this->getTitulo().".</p>";
            $this->setAberto(false);
        }else{
            echo "<p>O livro ".$this->getTitulo()." já está fechado.</p>";
        }
    }

    public function avancarPag() {
        if($this->getAberto()){
            if($this->getPagAtual()<$this->getTotPag()){
                echo "<p>Avançando a página do livro ".$this->getTitulo().". [Pag. Atual: ".$this->getPagAtual()."]</p>";
                $this->setPagAtual($this->getPagAtual()+1);
            }else{
                echo "<p>Não pode avançar a página!</p>";
            }
        }else{
           echo "<p>O livro ".$this->getTitulo()." está fechado.</p>"; 
        }    
    }
    
    public function voltarPag() {
        if($this->getAberto()){
            if($this->getPagAtual()>1){
                echo "<p>Voltanto a página do livro ".$this->getTitulo().". [Pag. Atual: ".$this->getPagAtual()."]</p>";
                $this->setPagAtual($this->getPagAtual()-1);
            }else{
                echo "<p>Não pode voltar a página!</p>";
            }
        }else{
           echo "<p>O livro ".$this->getTitulo()." está fechado.</p>"; 
        }     
    }    

    public function folhear($pagina) {
        if($this->getAberto()){
            if($this->getPagAtual()<$this->getTotPag()&& $pagina<= $this->getTotPag()){
                echo "<p>Folheando o livro ".$this->getTitulo().". [Pag. Atual: ".$this->getPagAtual()."]</p>";
                $this->setPagAtual($pagina);
            }else{
                echo "<p>Não pode folhear até a página $pagina.</p>";
            }
        }else{
           echo "<p>O livro ".$this->getTitulo()." está fechado.</p>"; 
        }    
    }
    
    function __construct($titulo, $autor, $totPag, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPag = $totPag;
        $this->leitor = $leitor;
        $this->setPagAtual(1);
        $this->setAberto(false);
    }
    
    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotPag() {
        return $this->totPag;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setTotPag($totPag) {
        $this->totPag = $totPag;
    }

    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }




    

}
