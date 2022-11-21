<?php

switch(@$_REQUEST["acao"]){
    case 'cadastrar':
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);
        $data_nasc = $_POST['data_nasc'];

        $sql = "INSERT INTO usuarios  (nome, email, senha, data_nasc) values ('{$nome}','{$email}','{$senha}','{$data_nasc}')";
        $res = $conn -> query($sql);

        if($res == true){
            print "<script> alert('Cadastro realizado com sucesso!!! ')</script>";
            print"<script>  location.href='?page=listar';</script>";
        }else{
            print"<script>alert('Erro ao cadastrar o usuario')</script>";
        }

        break;
    case 'editar':
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);
        $data_nasc = $_POST['data_nasc'];

        $sql = "UPDATE usuarios SET 
                nome = '{$nome}',
                email = '{$email}',
                senha = '{$senha}',
                data_nasc = '{$data_nasc}'
                where id =".$_REQUEST["id"];
        $res = $conn->query($sql);

        if($res == true){
            print "<script> alert('Editado com sucesso!!! ')</script>";
            print"<script>  location.href='?page=listar';</script>";
        }else{
            print"<script>alert('Erro ao editar o usuario')</script>";
        }

        break;
    case 'excluir':
        $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if($res == true){
            print "<script> alert('Deletado com sucesso!!! ')</script>";
            print"<script>  location.href='?page=listar';</script>";
        }else{
            print"<script>alert('Erro ao deletar o usuario')</script>";
        }
        break;
}