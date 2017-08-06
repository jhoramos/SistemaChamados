<!--<?php
session_start();

//Caso o usuário não esteja autenticado, limpa os dados e redireciona
if ( !isset($_SESSION['email']) and !isset($_SESSION['senha']) ) {
	//Destrói
	session_destroy();

	//Limpa
	unset ($_SESSION['email']);
	unset ($_SESSION['senha']);
	
	//Redireciona para a página de autenticação
	header('location:../index.php');
}
?> -->



<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Sistema de chamado | Inicio</title>
    </head>
    <body>
        <center>
            <!--<div id="mae">
                <div id="logo">
                    <img src="../img/logo.jpg">
               </div> -->
			<div id="botoes" align="left">teste</div>
               
            </div>
        </center>
    </body>
</html>