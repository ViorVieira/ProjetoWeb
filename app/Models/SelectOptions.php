<?php

namespace App\Models;

use CodeIgniter\Model;

class SelectOptions extends Model
{
   
    function SelectCliente($cod){
        $Con = mysqli_connect("127.0.0.1:3306", "root", "");
        mysqli_select_db($Con,"projetoweb");
        $res = mysqli_query($Con, "SELECT Nome FROM cliente WHERE CodCli = '$cod'");
        while($dados = mysqli_fetch_array($res)){
           $nome = $dados['Nome'];
           echo $nome;
        }
    }

    function SelectUsuário(){
        $Con = mysqli_connect("127.0.0.1:3306", "root", "");
        mysqli_select_db($Con,"projetoweb");
        $res = mysqli_query($Con, "SELECT * FROM usuario");
        while($dados = mysqli_fetch_array($res)){
           $cod = $dados['CodUsuario'];
           $nome = $dados['Nome'];
           echo "<option value='$cod'>$nome</option>";
        }
        
    }

    function SelectTipoServ(){
        $Con = mysqli_connect("127.0.0.1:3306", "root", "");
        mysqli_select_db($Con,"projetoweb");
        $res = mysqli_query($Con, "SELECT * FROM tiposervico");
        while($dados = mysqli_fetch_array($res)){
           $cod = $dados['CodTipoServ'];
           $nome = $dados['NomeServico'];
           $preço = $dados['Preco'];
           echo "<option value='$cod'>$nome</option>";
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

    function selectNomeUsuarioAtendimento($cod){
        $Con = mysqli_connect("127.0.0.1:3306", "root", "");
        mysqli_select_db($Con,"projetoweb");
        $res = mysqli_query($Con, "SELECT CodUsuario FROM Servico WHERE CodServico = '$cod'");
        while($dados = mysqli_fetch_array($res)){
           $codusuario = $dados['CodUsuario'];
            
            $res2 = mysqli_query($Con, "SELECT Nome FROM usuario WHERE CodUsuario = '$codusuario'");
            while ($dados2 = mysqli_fetch_array($res2)) {
               $nome = $dados2['Nome'];
           }
           echo $nome;
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

    function selectSituacao($situacao){
        if($situacao == "1"){
            echo "Ativo";
        }else{
            echo "Inativo";
        }
    }

    function selectTipoServico($cod){
        $Con = mysqli_connect("127.0.0.1:3306", "root", "");
        mysqli_select_db($Con,"projetoweb");
        $res = mysqli_query($Con, "SELECT NomeServico FROM tiposervico WHERE CodTipoServ = '$cod'");
        while($dados = mysqli_fetch_array($res)){
           $nome = $dados['NomeServico'];
           return $nome;
        }
    }

    function selectCodAnimal($nome){
        $Con = mysqli_connect("127.0.0.1:3306", "root", "");
        mysqli_select_db($Con,"projetoweb");
        $res = mysqli_query($Con, "SELECT CodAnimal FROM animal WHERE Nome = '$nome'");
        while($dados = mysqli_fetch_array($res)){
           $cod = $dados['CodAnimal'];
           return $cod;
        }
    }

    function selectCodUsuario($nome){
        $Con = mysqli_connect("127.0.0.1:3306", "root", "");
        mysqli_select_db($Con,"projetoweb");
        $res = mysqli_query($Con, "SELECT CodUsuario FROM usuario WHERE Nome = '$nome'");
        while($dados = mysqli_fetch_array($res)){
           $cod = $dados['CodUsuario'];
           return $cod;
        }
    }

    function selectTipoUsuario($tipo){
        if($tipo == "0"){
            echo "Usuário Comum";
        }else{
            echo "Usuário Administrador";
        }
    }

    function selectFuncaoUsuario($funcao){
        if($funcao == "1"){
            echo "Doutor";
        }elseif($funcao == "2"){
            echo "Tosador";
        }elseif($funcao == "3"){
            echo "Groomer";
        }elseif($funcao == "4"){
            echo "Atendente";
        }else{
            echo "Gestor";
        }
    }

    function selectNomeUsuario($cod){
        $Con = mysqli_connect("127.0.0.1:3306", "root", "");
        mysqli_select_db($Con,"projetoweb");
        $res = mysqli_query($Con, "SELECT Nome FROM usuario WHERE CodUsuario = '$cod'");
        while($dados = mysqli_fetch_array($res)){
           $nome = $dados['Nome'];
           echo $nome;
        }
    }

    function selectNomeAnimal($cod){
        $Con = mysqli_connect("127.0.0.1:3306", "root", "");
        mysqli_select_db($Con,"projetoweb");
        $res = mysqli_query($Con, "SELECT Nome FROM animal WHERE CodAnimal = '$cod'");
        while($dados = mysqli_fetch_array($res)){
           $nome = $dados['Nome'];
           echo $nome;
        }
    }

    function selectDataAtendimento($cod){
        $Con = mysqli_connect("127.0.0.1:3306", "root", "");
        mysqli_select_db($Con,"projetoweb");
        $res = mysqli_query($Con, "SELECT Data FROM ocupacaousuario WHERE CodOcupacao = '$cod'");
        while($dados = mysqli_fetch_array($res)){
           $data = $dados['Data'];
           echo $data;
        }
    }

    function selectHoraAtendimento($cod){
        $Con = mysqli_connect("127.0.0.1:3306", "root", "");
        mysqli_select_db($Con,"projetoweb");
        $res = mysqli_query($Con, "SELECT Hora FROM ocupacaousuario WHERE CodOcupacao = '$cod'");
        while($dados = mysqli_fetch_array($res)){
           $hora = $dados['Hora'];
           echo $hora;
        }
    }

    function selectStatusAtendimento($status){
        if($status == "0"){
            echo "Não Realizado";
        }else{
            echo "Realizado";
        }
    }
}