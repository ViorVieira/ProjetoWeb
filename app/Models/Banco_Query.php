<?php

namespace App\Models;

use CodeIgniter\Model;

class Banco_Query extends Model {

     //////////////////////////////////////////// Cadastro ////////////////////////////////////////////
    function cadastrarCliente($Nome, $Senha, $E_mail, $Situacao, $CPF, $FoneRes, $FoneCom, $Celular, $Cidade, $Número, $Estado, $Complemento, $CEP, $Logradouro) {
        $this->db->query("INSERT INTO `cliente` (`Nome`, `Senha`, `E_mail`, `Situacao`, `CPF`, `FoneRes`, `FoneCom`, `Celular`, `Cidade`, `Numero`, `Estado`, `Complemento`, `CEP`, `Logradouro`) VALUES ('$Nome', '$Senha',"
                . " '$E_mail', '$Situacao', '$CPF', '$FoneRes', '$FoneCom', '$Celular', '$Cidade', '$Número', '$Estado',"
                . " '$Complemento', '$CEP', '$Logradouro')");
    }

    function cadastrarAnimal($Nome, $Tipo, $Raca, $Idade, $Situacao, $Data_Adocao, $CodCli) {
        $this->db->query("INSERT INTO `animal` (`Nome`, `Tipo`, `Raca`, `Idade`, `Situacao`, `Data_Adocao`, `CodCli`) VALUES('$Nome', '$Tipo', '$Raca','$Idade', "
                . "'$Situacao','$Data_Adocao', '$CodCli')");
    }

    function cadastrarUsuario($Nome, $CPF, $E_mail, $Funcao, $Tipo, $Situacao, $Senha, $Data_Admissao, $FoneRes, $FoneCom, $Celular) {
        $this->db->query("INSERT INTO Usuario (Nome, CPF, E_mail, Funcao, Tipo, Situacao, "
                . "Senha, Data_Admissao, FoneRes, FoneCom, Celular) VALUES('$Nome',"
                . "'$CPF', '$E_mail', '$Funcao', '$Tipo', '$Situacao', '$Senha',"
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

     //////////////////////////////////////////// Consulta ////////////////////////////////////////////
    function consultaCli($nome){
        return $this->db->query("SELECT * FROM cliente WHERE Nome LIKE '$nome%'");
    }

    function consultaAnimais($nome){
        return $this->db->query("SELECT * FROM animal WHERE Nome LIKE '$nome%'");
    }

    function consultaUsuario($nome){
        return $this->db->query("SELECT * FROM usuario WHERE Nome LIKE '$nome%'");
    }
    
    function consultaOcupacao($cod){
        return $this->db->query("SELECT * FROM ocupacaousuario WHERE CodUsuario LIKE '$cod%%'");
    }

    function consultaTipoServico($nome){
        return $this->db->query("SELECT * FROM tiposervico WHERE NomeServico LIKE '$nome%'");
    }

    function consultaServico($cod){
        return $this->db->query("SELECT * FROM servico WHERE CodUsuario LIKE '$cod%'");
    }

    function consultaHorarios($nome){
        return $this->db->query("SELECT * FROM cliente WHERE Nome LIKE '$nome%'");
    }

    function consultaAgendamento($nome){
        return $this->db->query("SELECT * FROM cliente WHERE Nome LIKE '$nome%'");
    }

    function consultaAtendimento($cod){
        return $this->db->query("SELECT * FROM atendimento WHERE CodAnimal LIKE '$cod%'");
    }

    //////////////////////////////////////////// Remoção ////////////////////////////////////////////
    function removerOcupacao($cod){
        return $this->db->query("DELETE FROM ocupacaousuario WHERE `ocupacaousuario`.`CodOcupacao`= '$cod'");
    }
    
    function removerServico($cod){
        return $this->db->query("DELETE FROM servico WHERE CodServico = '$cod'");
    }

    function removerAtendimento($cod){
        return $this->db->query("DELETE FROM atendimento WHERE CodAtendimento = '$cod'");
    }

    //////////////////////////////////////////// Alteração ////////////////////////////////////////////
    function consultaCliAlteracao($cod){
        return $this->db->query("SELECT * FROM cliente WHERE CodCli = '$cod'");
    }

    function alterarCliente($cod, $Nome, $E_mail, $Situacao, $CPF, $FoneRes, $FoneCom, $Celular, $Cidade, $Numero, $Estado, $Complemento, $CEP, $Logradouro){
        return $this->db->query("UPDATE cliente SET 
        Nome = '$Nome',         
        E_mail = '$E_mail',
        Situacao = '$Situacao',
        CPF = '$CPF',
        FoneRes = '$FoneRes',
        FoneCom = '$FoneCom',
        Celular = '$Celular',
        Cidade = '$Cidade',
        Numero = '$Numero',
        Estado = '$Estado',
        Complemento = '$Complemento',
        CEP = '$CEP',
        Logradouro = '$Logradouro'
        WHERE CodCli = '$cod'");
    }

    function consultaAnimalAlteracao($cod){
        return $this->db->query("SELECT * FROM animal WHERE CodAnimal = '$cod'");
    }

    function AlterarAnimal($cod, $Nome, $Tipo, $Raca, $Idade, $Situacao, $Data_Adocao){
        return $this->db->query("UPDATE `animal` SET 
        Nome = '$Nome',
        Tipo = '$Tipo',
        Raca = '$Raca',
        Idade = '$Idade',
        Situacao = '$Situacao',
        Data_Adocao = '$Data_Adocao' 
        WHERE CodAnimal = '$cod'");
    }

    function consultaUsuarioAlteracao($cod){
        return $this->db->query("SELECT * FROM usuario WHERE CodUsuario = '$cod'");
    }

    function AlterarUsuario($cod, $Nome, $CPF, $E_mail, $Funcao, $Tipo, $Situacao, $Data_Admissao, $FoneRes, $FoneCom, $Celular){
        return $this->db->query("UPDATE usuario SET 
        Nome = '$Nome',
        CPF = '$CPF',
        E_mail = '$E_mail',
        Funcao = '$Funcao',
        Tipo = '$Tipo',
        Situacao = '$Situacao',
        Data_Admissao = '$Data_Admissao',
        FoneRes = '$FoneRes',
        FoneCom = '$FoneCom',
        Celular = '$Celular'
        WHERE CodUsuario = '$cod'");
    }

    function consultaOcupacaoAlteracao($cod){
        return $this->db->query("SELECT * FROM ocupacaousuario WHERE CodOcupacao = '$cod'");
    }

    function AlterarOcupacao($cod, $Data, $Hora, $CodUsuario){
        return $this->db->query("UPDATE ocupacaousuario SET 
        Data = '$Data',
        Hora = '$Hora',
        CodUsuario = '$CodUsuario'
        WHERE CodOcupacao = '$cod'");
    }

    function consultaTipoServicoAlteracao($cod){
        return $this->db->query("SELECT * FROM tiposervico WHERE CodTipoServ = '$cod'");
    }

    function AlterarTipoServico($cod, $Descricao, $Preco, $NomeServico){
        return $this->db->query("UPDATE tiposervico SET 
        Descricao = '$Descricao',
        Preco = '$Preco',
        NomeServico = '$NomeServico' 
        WHERE CodTipoServ = '$cod'");
    }

    function consultaServicoAlteracao($cod){
        return $this->db->query("SELECT * FROM servico WHERE CodServico = '$cod'");
    }

    function AlterarServico($cod, $Descricao, $CodTipoServ, $CodUsuario){
        return $this->db->query("UPDATE servico SET 
        Descricao = '$Descricao',
        CodTipoServ = '$CodTipoServ',
        CodUsuario = '$CodUsuario'
        WHERE CodServico = '$cod'");
    }

    function consultaAtendimentoAlteracao($cod){
        return $this->db->query("SELECT * FROM atendimento WHERE CodAtendimento = '$cod'");
    }

    function AlterarAtendimento($cod, $Preco, $Observacoes, $ServicoRealizado, $CodAnimal, $CodServico, $CodOcupacao){
        return $this->db->query("UPDATE atendimento SET 
        Preco = '$Preco',
        Observacoes = '$Observacoes',
        ServicoRealizado = '$ServicoRealizado',
        CodAnimal = '$CodAnimal',
        CodServico = '$CodServico',
        CodOcupacao = '$CodOcupacao' 
        WHERE CodAtendimento = '$cod'");
    }
}
