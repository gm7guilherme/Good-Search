<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$Estado = filter_input(INPUT_POST, 'Estado', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$Senha = filter_input(INPUT_POST, 'Senha', FILTER_SANITIZE_STRING);
$lembrete_da_senha = filter_input(INPUT_POST, 'lembrete_da_senha', FILTER_SANITIZE_STRING);
$redesocial = filter_input(INPUT_POST, 'redesocial', FILTER_SANITIZE_STRING);

//echo "Nome: $nome<br>";
//echo "E-mail: $email<br>";

$result_usuario = "INSERT INTO `moreira.usuario` (nome,Sobrenome,telefone,cpf,RG,cep,Rua,Numero,Cidade,Estado,Bairro,ponto_de_referencia,email,login,Senha,lembrete_da_senha,redesocial) 
                                        VALUES ('$nome','$Sobrenome','$telefone', '$cpf', '$rg','$cep','$Rua','$Numero', '$Cidade','$Estado','$Bairro', '$ponto_de_referencia', '$email', '$login','$Senha', '$lembrete_da_senha','$redesocial')";
$resultado_usuario = mysqli_query ($conn, $result_usuario);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:green; >'Usuário cadastrado com sucesso<p>";
    header("Location: Index2.php");
}else{
    $_SESSION['msg'] = "<p style='color:red; >'Usuário não cadastrado com sucesso<p>";
    header("Location: Index2.php");
}
if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: index2.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: index2.php");
}
?>