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

    function selectAnimal() {
        $con = mysqli_connect("127.0.0.1:3306", "root", "");
        mysqli_select_db($con, "projetoweb");
        $res = mysqli_query($con, "SELECT * FROM animal");
        while ($dados = mysqli_fetch_array($res)) {
            $codA = $dados['CodAnimal'];
            $nome = $dados['Nome'];

            echo "<option value='$codA'>$nome</option>";
        }
    }

    function selectServico() {
        $con = mysqli_connect("127.0.0.1:3306", "root", "");
        mysqli_select_db($con, "projetoweb");
        $res = mysqli_query($con, "SELECT * FROM servico");
        while ($dados = mysqli_fetch_array($res)) {
            $codS = $dados['CodServico'];
            $codU = $dados['CodUsuario'];
            $codTS = $dados['CodTipoServ'];

            $res2 = mysqli_query($con, "SELECT * FROM tiposervico WHERE CodTipoServ = '$codTS'");
            while ($dados2 = mysqli_fetch_array($res2)) {
                $nomeServico = $dados2['NomeServico'];
            }
            $res3 = mysqli_query($con, "SELECT * FROM usuario WHERE CodUsuario = '$codU'");
            while ($dados3 = mysqli_fetch_array($res3)) {
                $nomeUsuario = $dados3['Nome'];
            }
            echo "<option value='$codS'>$nomeServico - $nomeUsuario </option>";
        }  
    }

    function selectOcupacao() {
        $con = mysqli_connect("127.0.0.1:3306", "root", "");
        mysqli_select_db($con, "projetoweb");
        $res = mysqli_query($con, "SELECT * FROM ocupacaousuario");
        while ($dados = mysqli_fetch_array($res)) {
            $codO = $dados['CodOcupacao'];
            $codU = $dados['CodUsuario'];
            $data = $dados['Data'];
            $hora = $dados['Hora'];

            $res2 = mysqli_query($con, "SELECT * FROM usuario WHERE CodUsuario = '$codU'");
            while ($dados2 = mysqli_fetch_array($res2)) {
                $nome = $dados2['Nome'];   
            }
            echo "<option value='$codO'>$nome - $data - $hora </option>";
        }
        
    }
}