<style type="text/css">
*{
	text-align: center;
	width: 550px;
	margin: 15 auto;
	font-family: valuere;
	font-size: 18px;
	border-color: black;
	border-radius: 5px;
	
}
fieldset{
	background-color: #FF00FF;
}
h1{
	color: black;	
}
#c{
	background-color: 	#F5FFFA;
	border-color: black;
	width: 100px;
}
</style>

<?php

	echo "<meta charset=utf-8>";
	echo "<form method='post' action='php.php'>";
	echo "<br>";
	echo "<fieldset>";
	echo "<h1>FALHA NA AUTENTICAÇÃO</h1>";
	echo "<br>";
	echo "<div>";
	echo "<p><label for='name'>Login: </label><input type='text' name='name' required></p>";
	echo "<p><label for='senha'>Senha: </label><input type='password' name='senha' required></p>";
	echo "</div>";
	echo "<br>";
	echo "<br>";
	echo "<input type='submit' value='Login' id='c'>";
	echo "<input type='reset' value='Redefinir' id='c'>";
	echo "</fieldset>";
	echo "</form>";
	?>