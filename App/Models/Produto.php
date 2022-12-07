<?php

namespace App\Models;

use JC\Model\Model;

class Produto extends Model {

    

    public function getProdutos(){
        $query  = "SELECT id, descricao, preco FROM tb_produtos";
        return $this->db->query($query)->fetchAll();
    }
}


?>