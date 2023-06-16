<?php

namespace App\Models;

use CodeIgniter\Model;

class SelectOptions extends Model
{
   
    function SelectUsuário(){
        $Con = mysqli_connect("127.0.0.1:3306", "root", "");
        mysqli_select_db($Con,"projetoweb");
        $res = mysqli_query($Con, "SELECT * FROM usuario");
        while($dados = mysqli_fetch_array($res)){
           $cod = $dados['CodUsuario'];
           $nome = $dados['Nome'];
        }
        echo "<option value='$cod'>$nome</option>";
    }

    function SelectTipoServ(){
        $Con = mysqli_connect("127.0.0.1:3306", "root", "");
        mysqli_select_db($Con,"projetoweb");
        $res = mysqli_query($Con, "SELECT * FROM tiposervico");
        while($dados = mysqli_fetch_array($res)){
           $cod = $dados['CodTipoServ'];
           $nome = $dados['NomeServico'];
           $preço = $dados['Preco'];
           echo "<option value='$cod'>$nome - $preço </option>";
        }
        
    }
}