<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<style type="text/css">
	*{
		background-color: #F0E68C;
	}
	fieldset{
		border-radius: 5px;
	}
</style>
<body>
	<?php

	$nome = $_POST['name'];
	$email = $_POST['email'];
	$cpf = $_POST['cpf'];

	$numero = $_POST['numero'];
	$bandeira = $_POST['bandeira'];
	$validade = $_POST['val'];

	echo "<center>";
	echo "<fieldset>";
	echo "<h1>Confirme seus dados</h1>";
    echo "<h2>Dados Pessoais</h2>";
	echo "<p>Nome completo</p>";
	echo "$nome";
	echo "<p>E-Mail</p>";
	echo "$email";
	echo "<p>CPF</p>";
	echo "$cpf";

	echo "<h2>Cartão de crédito</h2>";
	echo "<p>Número - CVV</p>";
	echo "$numero";
	echo "<br>";
	echo "$bandeira";
	echo "<p>Validade</p>";
	echo "$validade";
	echo "</fieldset>";
	echo "</center>";

	?>

</body>
</html>