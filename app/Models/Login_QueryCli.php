<?php

namespace App\Models;

use CodeIgniter\Model;

class Login_QueryCli extends Model {

    protected $table = 'cliente';
    protected $primaryKey = 'CodCli';
    protected $allowedFields = ['Nome', 'Senha', 'E_mail'];
}   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    // function consultaSenhaEmail($Email){
        
    //     foreach ($query->getResult() as $row) {
    //         echo $row->Senha;
    //     }
    //     //echo $builder('E_mail');
    //     $con = mysqli_connect("127.0.0.1:3346", "root", "");
    //     mysqli_select_db($con, "ProjetoWeb");
    //     $res = mysqli_query($con, "Select Senha from Cliente WHERE E_mail = '$Email'");
    //     while($dados = mysqli_fetch_array($res)){
    //         $Senha = $dados['Senha'];
    //     }
    //     return $Senha;
    // }

    // function consultaSenhaNome($Nome){
    //     $con = mysqli_connect("127.0.0.1:3346", "root", "");
    //     mysqli_select_db($con, "ProjetoWeb");
    //     $res = mysqli_query($con, "Select Senha from Cliente WHERE Nome = '$Nome'");
    //     while($dados = mysqli_fetch_array($res)){
    //         $Senha = $dados['Senha'];
    //     }
    //     return $Senha;
    // }


    // function consultaSenhaCli($Senha) {
    //     $con = mysqli_connect("127.0.0.1:3346", "root", "");
    //     mysqli_select_db($con, "ProjetoWeb");
    //     $res = mysqli_query($con, "Select Senha from Cliente WHERE Senha = '$Senha'");
    //     if (mysqli_num_rows($res) == 0) {
    //         return false;
    //     } else {
    //         return true;
    //     }
    // }

    // function consultaIDCli($Senha) {
    //     $con = mysqli_connect("127.0.0.1:3346", "root", "");
    //     mysqli_select_db($con, "ProjetoWeb");
    //     $res = mysqli_query($con, "Select CodCli from Cliente WHERE Senha = '$Senha'");
    //     return $res;
    // }


