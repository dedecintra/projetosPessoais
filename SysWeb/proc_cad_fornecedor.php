<?php
//proc de cadastro de fornecedores 
session_start();

//conectando com o banco
require "conexao.php";

$denominacaoSocial = $_POST['inputDomiSocial'];
$cep = $_POST['inputCep'];
$endereco = $_POST['inputEndereco'];
$bairro = $_POST['inputBairro'];
$cidade = $_POST['inputCidade'];
$uf = $_POST['inputUf'];
$telefone = $_POST['inputTelefone'];
$email = $_POST['inputEmail'];
$cpf = $_POST['inputCnpj'];
$inscricao = $_POST['inputInscricao'];
$ramo = $_POST['inputRamo'];
$contato = $_POST['inputContato'];

//comandos sql
$sql ="INSERT INTO cadastrofabricante VALUES";
$sql .= "(null,'$denominacaoSocial','$cep','$endereco','$bairro','$cidade','$uf','$telefone','$email','$cpf','$inscricao','$ramo','$contato')";

if (validar_cpf == TRUE){
	//verifica se foi realizado com sucesso 
	if ($conexao->query($sql) == TRUE) {
	    $_SESSION['cadsucess'] = "Cadastro do fornecedor realizado com sucesso"; 
	    header("Location: cadastroFornecedor.php");
	} else {
	    echo "Erro: " .$sql . "<br>" . $conexao->error;
	}
} else {
	echo "Erro cpf invalido". validar_cpf;
	header("Location: cadastroFornecedor.php");
}

//inicio validação do cpf
function validar_cpf($cpf)
{
	$cpf = preg_replace('/[^0-9]/', '', (string) $cpf);
	// Valida tamanho
	if (strlen($cpf) != 11)
		return false;
	// Calcula e confere primeiro dígito verificador
	for ($i = 0, $j = 10, $soma = 0; $i < 9; $i++, $j--)
		$soma += $cpf{$i} * $j;
	$resto = $soma % 11;
	if ($cpf{9} != ($resto < 2 ? 0 : 11 - $resto))
		return false;
	// Calcula e confere segundo dígito verificador
	for ($i = 0, $j = 11, $soma = 0; $i < 10; $i++, $j--)
		$soma += $cpf{$i} * $j;
	$resto = $soma % 11;
	return $cpf{10} == ($resto < 2 ? 0 : 11 - $resto);
}
// fim validação do cpf

//encerra a conexao com a base de dados 
$conexao->close();
?>