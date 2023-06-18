<?php

namespace App\Models;

use CodeIgniter\Model;

class Consultas_Query extends Model
{
    function consultaCli($nome){
        $Con = mysqli_connect("127.0.0.1:3306", "root", "");
        mysqli_select_db($Con,"projetoweb");
        $res = mysqli_query($Con, "SELECT * FROM cliente WHERE Nome = '$nome'");
        while($dados = mysqli_fetch_array($res)){
           $nome = $dados['Nome'];
           echo $nome;
        }
    }

}