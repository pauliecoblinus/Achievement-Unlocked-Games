<?php


header("Content-Type: text/html; charset=ISO-8859-1",true);
include("conecta.php");
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$datanasc=$_POST['datanasc'];
$telres=$_POST['telres'];
$telcel=$_POST['telcel'];
$email=$_POST['email'];
$endereco=$_POST['endereco'];
$num_end=$_POST['num_end'];
$complemento=$_POST['complemento'];
$bairro=$_POST['bairro'];
$cep=$_POST['cep'];
$cidade=$_POST['cidade'];
echo"$nome";
mysqli_query($conexao, "insert into cliente(nome_cli,cpf,telefone,celular,data_nasc,endereco,num_end,bairro,complemento,cep,cod_cid_estado) values ('$nome','$cpf','$telres','$telcel','$datanasc','$endereco','$num_end','$bairro','$complemento','$cep','$cidade')");
echo 'Cadastro concluido com Sucesso!<br/>';
echo 'Aguarde a confirmação do pagamento para ter acesso aos filmes. <br/>';
echo '<a href="index.html">Clique Aqui Para Voltar</a>';

?>
