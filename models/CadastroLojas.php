<?php

class CadastroLojas {

    private $id;
    private $nomeDaLoja;
    private $linkDaLoja;
    private $lojaNichada;

    public function getId(){
        return $this->id;
    }

    public function setId($i){
        $this->id = trim($i);
    }

    public function getNomeDaLoja(){
        return $this->nomeDaLoja;
    }

    public function setNomeDaLoja($n){
        $this->nomeDaLoja = ucwords(trim($n));
    }

    public function getLinkDaLoja(){
        return $this->linkDaLoja;
    }

    public function setLinkDaLoja($l){
        $this->linkDaLoja = $l;
    }

    public function getLojaNichada(){
        return $this->lojaNichada;
    }

    public function setLojaNichada($n){
        $this->lojaNichada = strtolower(trim($n));
    }

}

interface CadastroDAO {

    public function add(CadastroLojas $c);
    public function findAll();
    public function findByNomeDaLoja($nomeDaLoja);
    public function findById($id);
    public function update(CadastroLojas $c);
    public function delete($id);

}