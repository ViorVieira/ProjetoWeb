<?php

namespace App\Models;

use CodeIgniter\Model;

class Banco_Query extends Model {

    function cadastrarCliente($Nome, $Senha, $E_mail, $Situacao, $CPF, $FoneRes, $FoneCom, $Celular, $Cidade, $Número, $Estado, $Complemento, $CEP, $Logradouro) {
        $this->db->query("INSERT INTO `cliente` (`Nome`, `Senha`, `E_mail`, `Situacao`, `CPF`, `FoneRes`, `FoneCom`, `Celular`, `Cidade`, `Numero`, `Estado`, `Complemento`, `CEP`, `Logradouro`) VALUES ('$Nome', '$Senha',"
                . " '$E_mail', '$Situacao', '$CPF', '$FoneRes', '$FoneCom', '$Celular', '$Cidade', '$Número', '$Estado',"
                . " '$Complemento', '$CEP', '$Logradouro')");
    }

    function cadastrarAnimal($Nome, $Tipo, $Raca, $Idade, $Situacao, $Data_Adocao, $CodCli) {
        $this->db->query("INSERT INTO `animal` (`Nome`, `Tipo`, `Raca`, `Idade`, `Situacao`, `Data_Adocao`, `CodCli`) VALUES('$Nome', '$Tipo', '$Raca','$Idade', "
                . "'$Situacao','$Data_Adocao', '$CodCli')");
    }

    function cadastrarUsuario($Nome, $CPF, $E_mail, $Funcao, $Tipo, $Senha, $Data_Admissao, $FoneRes, $FoneCom, $Celular) {
        $this->db->query("INSERT INTO Usuario (Nome, CPF, E_mail, Funcao, Tipo, "
                . "Senha, Data_Admissao, FoneRes, FoneCom, Celular) VALUES('$Nome',"
                . "'$CPF', '$E_mail', '$Funcao', '$Tipo','$Senha',"
                . " '$Data_Admissao', '$FoneRes', '$FoneCom', '$Celular')");
    }

    function cadastrarTipoServico($Descricao, $Preco, $NomeServico) {
        $this->db->query("INSERT INTO TipoServico (Descricao, Preco, NomeServico)"
                . "VALUES ('$Descricao', '$Preco', '$NomeServico')");
    }

    function cadastrarServico($Descricao, $CodTipoServ, $CodUsuario){
        $this->db->query("INSERT INTO Servico (Descricao, CodTipoServ, CodUsuario) 
        VALUES('$Descricao','$CodTipoServ','$CodUsuario')");
    }

    function cadastrarOcupacao($Data, $Hora, $CodUsuario){
        $this->db->query("INSERT INTO OcupacaoUsuario (Data, Hora, CodUsuario)
        VALUES ('$Data', '$Hora', '$CodUsuario')");

    }

    function cadastrarAtendimento($Preco, $Observacoes, $ServicoRealizado, $CodAnimal, $CodServico, $CodOcupacao){
        $this->db->query("INSERT INTO Atendimento (Preco, Observacoes, ServicoRealizado, CodAnimal, CodServico, CodOcupacao)
        VALUES ('$Preco', '$Observacoes', '$ServicoRealizado', '$CodAnimal', '$CodServico', '$CodOcupacao')");
    }
}
