<?php

namespace App\Controllers;

use App\Models\Banco_Query;
use App\Models\Consultas_Query;
use App\Models\Login_Query;
use App\Models\Login_QueryCli;
use App\Models\Login_QueryU;
use App\Models\SelectOptions;
use CodeIgniter\Controller;

class Dados extends BaseController
{

    function cadastrarC()
    {
        return view("CadCli_View");
    }

    function cadastrarC2()
    {
        $bq = new \App\Models\Banco_Query();
        $bq->cadastrarCliente(
            $this->request->getPost("Nome"),
            password_hash($this->request->getPost("Senha"), PASSWORD_DEFAULT),
            $this->request->getPost("E_mail"),
            $this->request->getPost("Situacao"),
            $this->request->getPost("CPF"),
            $this->request->getPost("FoneRes"),
            $this->request->getPost("FoneCom"),
            $this->request->getPost("Celular"),
            $this->request->getPost("Cidade"),
            $this->request->getPost("Numero"),
            $this->request->getPost("Estado"),
            $this->request->getPost("Complemento"),
            $this->request->getPost("CEP"),
            $this->request->getPost("Logradouro")
        );
        return view("Home_View");
    }

    function cadastrarU()
    {
        return view("CadUsuario_View");
    }

    function cadastrarU2()
    {
        $bq = new Banco_Query();
        $bq->cadastrarUsuario(
            $this->request->getPost("Nome"),
            $this->request->getPost("CPF"),
            $this->request->getPost("E_mail"),
            $this->request->getPost("Funcao"),
            $this->request->getPost("Tipo"),
            $this->request->getPost("Situacao"),
            password_hash($this->request->getPost("Senha"), PASSWORD_DEFAULT),
            $this->request->getPost("Data_Admissao"),
            $this->request->getPost("FoneRes"),
            $this->request->getPost("FoneCom"),
            $this->request->getPost("Celular")
        );
        return view("Home_View");
    }

    function cadastrarAnimal()
    {
        return view("CadAnimal_View");
    }

    function cadastrarAnimal2()
    {
        $bq = new \App\Models\Banco_Query();
        $session = session();
        $CodCli = $session->get('Id_Cliente');
        $bq->cadastrarAnimal(
            $this->request->getPost("Nome"),
            $this->request->getPost("Tipo"),
            $this->request->getPost("Raca"),
            $this->request->getPost("Idade"),
            $this->request->getPost("Situacao"),
            $this->request->getPost("Data_Adocao"),
            $CodCli
        );
        return view("Home_View");
    }

    function cadastrarTipoServ()
    {
        return view("TipoServico_View");
    }

    function cadastrarTipoServ2()
    {
        $bq = new Banco_Query();
        $bq->cadastrarTipoServico(
            $this->request->getPost("Descricao"),
            $this->request->getPost("Preco"),
            $this->request->getPost("NomeServico")
        );

        return view("Home_View");
    }

    function cadastrarServico()
    {
        return view("CadServico_View");
    }

    function cadastrarServico2()
    {
        $session = session();
        if ($session->get("Tipo") == "1") {
            $bq = new Banco_Query();
            $bq->cadastrarServico(
                $this->request->getPost("Descricao"),
                $this->request->getPost("CodTipoServ"),
                $this->request->getPost("CodUsuario")
            );
            return view("Home_View");
        }
        if ($session->get("Tipo") == "0") {
            $bq = new Banco_Query();
            $session = session();
            $bq->cadastrarServico(
                $this->request->getPost("Descricao"),
                $this->request->getPost("CodTipoServ"),
                $session->get("Id_Usuario")
            );
            return view("Home_View");
        }
    }

    function cadastrarOcupacao()
    {
        return view("CadOcupacao_View");
    }

    function cadastrarOcupacao2()
    {
        $session = session();
        if($session->get("Tipo") == "1"){
            $bq = new Banco_Query();
            $bq->cadastrarOcupacao(
                $this->request->getPost("Data"),
                $this->request->getPost("Hora"),
                $this->request->getPost("CodUsuario")    
            );
        }
        if ($session->get("Tipo") == "0") {
                $session = session();
                $CodUsuario = $session->get("Id_Usuario");
                $bq = new Banco_Query();
                $bq->cadastrarOcupacao(
                $this->request->getPost("Data"),
                $this->request->getPost("Hora"),
                $CodUsuario
                );
        }
        return view("Home_View");
    }
    

    function cadastrarAtendimento(){
        return view("CadAtendimento_View");
    }

    function cadastrarAtendimento2(){
        $bq = new Banco_Query();
        $bq->cadastrarAtendimento(
            $this->request->getPost("Preco"),
            $this->request->getPost("Observacao"),
            $this->request->getPost("Status"),
            $this->request->getPost("Animal"),
            $this->request->getPost("Servico"),
            $this->request->getPost("Ocupacao")
        );
        return view("Home_View");
    }

    function telaConsultaAdm(){
        return view("ConsultaAdm");
    }

    function consultaCli()
    {
        $bq = new \App\Models\Banco_Query();
        $data['ConCli'] = $bq->consultaCli($this->request->getPost("Nome"));
        return view("ConsultaCli_View", $data);
    }

    function consultaCli2()
    {
        $bq = new \App\Models\Banco_Query();
        $data['ConCli'] = $bq->consultaCli($this->request->getPost("Nome"));
        return view("ConsultaCli_View", $data);
    }

  
    function consultaAnimais(){
        $bq = new \App\Models\Banco_Query();
        $data['ConAnimais'] = $bq->consultaAnimais($this->request->getPost("Nome"));
        return view("ConsultaAnimal_View", $data);
    }

    function consultaAnimais2(){
        $bq = new \App\Models\Banco_Query();
        $data['ConAnimais'] = $bq->consultaAnimais($this->request->getPost("Nome"));
        return view("ConsultaAnimal_View", $data);
    }

    function consultaUsuario(){
        $bq = new \App\Models\Banco_Query();
        $data['ConUsuario'] = $bq->consultaUsuario($this->request->getPost("Nome"));
        return view("ConsultaUsuario_View",$data);
    }

    function consultaUsuario2(){
        $bq = new \App\Models\Banco_Query();
        $data['ConUsuario'] = $bq->consultaUsuario($this->request->getPost("Nome"));
        return view("ConsultaUsuario_View",$data);
    }

    function consultaOcupacao(){
        $bq = new \App\Models\Banco_Query();
        $data['ConOcupacao'] = $bq->consultaOcupacao($this->request->getPost("Nome"));
        return view("ConsultaOcupacao_View",$data);
    }

    function consultaOcupacao2(){

        $bq = new \App\Models\Banco_Query();
        $so = new SelectOptions();
        $data['ConOcupacao'] = $bq->consultaOcupacao($so->selectCodUsuario($this->request->getPost("Nome")));
        return view("ConsultaOcupacao_View",$data);
    }

    function consultaTipoServico(){
        $bq = new \App\Models\Banco_Query();
        $data['ConTipoServico'] = $bq->consultaTipoServico($this->request->getPost("Nome"));
        return view("ConsultaTipoServico_View", $data);
    }

    function consultaTipoServico2(){
        $bq = new \App\Models\Banco_Query();
        $data['ConTipoServico'] = $bq->consultaTipoServico($this->request->getPost("Nome"));
        return view("ConsultaTipoServico_View", $data);
    }

    function consultaServico(){
        $bq = new \App\Models\Banco_Query();
        $data['ConServico'] = $bq->consultaServico($this->request->getPost("Nome"));
        return view("ConsultaServico_View", $data);
    }

    function consultaServico2(){
        $bq = new \App\Models\Banco_Query();
        $so = new SelectOptions();
        $data['ConServico'] = $bq->consultaServico($so->selectCodUsuario($this->request->getPost("Nome")));
        return view("ConsultaServico_View", $data);
    }

    function consultaHorariosDisponivel(){
        return view("ConsulraHorario_View");
    }

    function consultaHorariosDisponivel2(){
        $bq = new \App\Models\Banco_Query();
        $data['ConHorario'] = $bq->consulta();
        return view("ConsulraHorario_View",$data);
    }

    function consultaAgendamento(){
        return view("ConsultaAgendamento_View");
    }

    function consultaAgendamento2(){
        $bq = new \App\Models\Banco_Query();
        $data['ConAgendamento'] = $bq->consulta();
        return view("ConsultaAgendamento_View", $data);
    }

    function consultaAtendimento(){
        $bq = new \App\Models\Banco_Query();
        $data['ConAtendimento'] = $bq->consultaAtendimento($this->request->getPost("Nome"));
        return view("ConsultaAtendimento_View",$data);
    }

    function consultaAtendimento2(){
        $bq = new \App\Models\Banco_Query();
        $so = new SelectOptions();
        $data['ConAtendimento'] = $bq->consultaAtendimento($so->selectCodAnimal($this->request->getPost("Nome")));
        return view("ConsultaAtendimento_View",$data);
    }

    function loginCli2()
    { 
        {
            // Carrega o helper de formulários e validação
            helper(['form', 'url']);

            $data = [];

            // Verifica se os dados do formulário foram submetidos
            if ($this->request->getMethod() === 'post') {
                // Define as regras de validação para cada campo
                $rules = [
                    'Usuario' => 'required',
                    'Senha' => 'required'
                ];

                // Define as mensagens de erro personalizadas para cada regra
                $errors = [
                    'Usuario' => [
                        'required' => 'O campo Login ou Email é obrigatório.'
                    ],
                    'Senha' => [
                        'required' => 'O campo Senha é obrigatório.'
                    ]
                ];

                // Valida os dados do formulário
                if ($this->validate($rules, $errors)) {
                    // Se a validação passar, verifica as credenciais de Usuario
                    $login = $this->request->getPost('Usuario');
                    $senha = $this->request->getPost('Senha');

                    // Verifica se o login é um email válido
                    if (filter_var($login, FILTER_VALIDATE_EMAIL)) {
                        $userModel = new Login_QueryCli();
                        $user = $userModel->where('E_mail', $login)->first();
                    } else {
                        $userModel = new Login_QueryCli();
                        $user = $userModel->where('Nome', $login)->first();
                    }

                    // Verifica se o usuário existe e a senha está correta
                    if ($user && password_verify($senha, $user['Senha'])) {
                        // Autenticação bem-sucedida, armazene os detalhes do usuário na sessão

                        // Obtenha uma instância da sessão
                        $session = session();

                        // Armazene os dados do usuário na sessão
                        $userData = [
                            'Id_Cliente' => $user['CodCli'],
                            'Nome' => $user['Nome'],
                            'E_mail' => $user['E_mail'],
                            // Adicione outros dados do usuário que você deseja armazenar na sessão
                        ];
                        $session->set($userData);

                        // Redireciona para a página principal ou para a página de criação/entrada de equipe
                        return redirect()->to('');
                    } else {
                        // Credenciais inválidas, exiba uma mensagem de erro
                        $data['error'] = 'Credenciais inválidas. Verifique o login (ou email) e a senha.';
                    }
                } else {
                    // Se a validação falhar, exibe os erros de validação
                    $data['validation'] = $this->validator;
                }
            }

            // Carrega a view do formulário de login
            echo view('Login_View', $data);

        }
    }

    function loginUsuario()
    {
        return view("LoginUsuario_View");
    }

    function loginUsuario2()
    { 
        {
            // Carrega o helper de formulários e validação
            helper(['form', 'url']);

            $data = [];

            // Verifica se os dados do formulário foram submetidos
            if ($this->request->getMethod() === 'post') {
                // Define as regras de validação para cada campo
                $rules = [
                    'Usuario' => 'required',
                    'Senha' => 'required'
                ];

                // Define as mensagens de erro personalizadas para cada regra
                $errors = [
                    'Usuario' => [
                        'required' => 'O campo Login ou Email é obrigatório.'
                    ],
                    'Senha' => [
                        'required' => 'O campo Senha é obrigatório.'
                    ]
                ];

                // Valida os dados do formulário
                if ($this->validate($rules, $errors)) {
                    // Se a validação passar, verifica as credenciais de Usuario
                    $login = $this->request->getPost('Usuario');
                    $senha = $this->request->getPost('Senha');

                    // Verifica se o login é um email válido
                    if (filter_var($login, FILTER_VALIDATE_EMAIL)) {
                        $userModel = new Login_QueryU();
                        $user = $userModel->where('E_mail', $login)->first();
                    } else {
                        $userModel = new Login_QueryU();
                        $user = $userModel->where('Nome', $login)->first();
                    }

                    // Verifica se o usuário existe e a senha está correta
                    if ($user && password_verify($senha, $user['Senha'])) {
                        // Autenticação bem-sucedida, armazene os detalhes do usuário na sessão

                        // Obtenha uma instância da sessão
                        $session = session();

                        // Armazene os dados do usuário na sessão
                        $userData = [
                            'Id_Usuario' => $user['CodUsuario'],
                            'Nome' => $user['Nome'],
                            'E_mail' => $user['E_mail'],
                            'Funcao' => $user['Funcao'],
                            'Tipo' => $user['Tipo'],
                            // Adicione outros dados do usuário que você deseja armazenar na sessão
                        ];
                        $session->set($userData);

                        // Redireciona para a página principal ou para a página de criação/entrada de equipe
                        return redirect()->to('');
                    } else {
                        // Credenciais inválidas, exiba uma mensagem de erro
                        $data['error'] = 'Credenciais inválidas. Verifique o login (ou email) e a senha.';
                    }
                } else {
                    // Se a validação falhar, exibe os erros de validação
                    $data['validation'] = $this->validator;
                }
            }

            // Carrega a view do formulário de login
            echo view('LoginUsuario_View', $data);

        }
    }
    function logout()
    {
        $session = session();
        // session_destroy();
        $session->destroy();
        return view("Home_View");
    }
}