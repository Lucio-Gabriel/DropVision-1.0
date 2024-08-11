<?php

require 'models/CadastroLojas.php';

class CadastroDAOMysql implements CadastroDAO{
    
    private $pdo;

    public function __construct(PDO $driver)
    {   
        $this->pdo = $driver;
    }

    public function add(CadastroLojas $c)
    {
        
    }

    public function findAll(){
        
        $array = [];

        $sql = $this->pdo->query("SELECT * FROM cadastrolojas");
        if($sql->rowCount() > 0){
            $data = $sql->fetchAll();

            foreach($data as $item){
                $u = new CadastroLojas();
                $u->setId($item['id']);
                $u->setNomeDaLoja($item['nomeDaLoja']);
                $u->setLinkDaLoja($item['linkDaLoja']);
                $u->setLojaNichada($item['lojaNichada']);

                $array[] = $u;
            }
        }

        return $array;
    }

    public function findByNomeDaLoja($nomeDaLoja)
    {
        
    }

    public function findById($id)
    {
        
    }

    public function update(CadastroLojas $c)
    {
        
    }

    public function delete($id)
    {
        
    }

}