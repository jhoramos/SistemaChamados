<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Sistema de chamado | Cadastro usuário</title>
    </head>
    
   
    
    <body>
        <center>
            <div id="mae">
                <div id="logo">
                <img src="../img/logo.jpg">
                </div>
                 <h4>Cadastro de usuário</h4>
               
                <div id="form-cadastro">
                    <form method="post" action="cadastra-usuario.php" name="formulario">
                       
                        <table>
                            <tr>
                                <td>Nome<i>*</i>:</td><td><input type="text" name="nome" size="30" required></td>    
                                
                            </tr>
                            <tr>
                                <td>Sobrenome<i>*</i>:<td><input type="text" name="sobrenome" size="30" required></td>
                            </tr>
                            <tr>
                            <td>E-mail<i>*</i>:<td><input type="text" name="email" size="50" required ></td>
                            </tr>
                            <tr>
                                <td>Senha<i>*</i>:<td><input type="password" name="senha" size="12" required pattern=".{8,12}" title="de 8 até 12 caracteres"></td>
                            </tr>
                            <tr>
                                <td>Confirma Senha<i>*</i>:<td><input type="password" name="conf-senha" size="12" required pattern=".{8,12}" title="de 8 até 12 caracteres"></td>
                            </tr>
                           </table>
                        <br><br>
                        <input type="submit" value="Enviar">  <input type="reset" value="Limpar"><br><br>
                        Clique<a href="../index.php"> aqui</a> para voltar
                         <h4> <i>* campos obrigatórios</i></h4>
                        
                    </form>
                    
                </div>
             
                
            </div>
        </center>
    </body>
</html>