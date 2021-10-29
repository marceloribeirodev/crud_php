<?php 

include('../Model/Pessoa.php');

echo $_POST['nome'];

echo $_POST['telefone'];

echo $_POST['email'];


// Validação do método POST
if(isset($_POST['nome'], $_POST['telefone'], $_POST['email'])){
	
	$objetoPessoa = new Pessoa;
	$objetoPessoa->nome = $_POST['nome'];
	$objetoPessoa->telefone = $_POST['telefone'];
	$objetoPessoa->email = $_POST['email'];
	$objetoPessoa->cadastrar();

	//echo "<pre>"; print_r($objetoPessoa) ; echo "<prev>"; exit;

}else{
	echo "erro";
}

