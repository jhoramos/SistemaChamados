<html>
    <head>
        <title>Sistema de chamado | Cadastro Usuario</title>
            <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <center>
        <div id="mae">
            <div id="logo"><img src="../img/logo.jpg"></div>

            <?php
            
            function validaEmail($email)
            {
                $conta = "^[a-zA-Z0-9\._-]+@";
                $domino = "[a-zA-Z0-9\._-]+.";
                $extensao = "([a-zA-Z]{2,4})$";
                $pattern = $conta.$domino.$extensao;
             
                if (ereg($pattern, $email))
                    return true;
                else
                    return false;
            }
            


                    include('conexao.php');

                    $nome=$_POST["nome"];
                    $sobrenome=$_POST["sobrenome"];
                    $email=$_POST["email"];
                    $senha=$_POST["senha"];
                    $confirma=$_POST["conf-senha"];
                    $tipo="c";
                  
            
                    if(!validaEmail($email))
                    {
                        echo "E-mail inválido<br>";
                        echo"Clique <a href='cadastro.php'>aqui </a> para voltar<br>";
                        
                    }
                    else
                    {
            



                            if($senha !=$confirma)
                            {
                                echo "Senhas não são iguais e email não é valido";
                                echo"Clique <a href='cadastro.php'>aqui </a> para voltar<br>";

                            }

                            else
                            {
                                
                                $sql="select * from usuarios where nome='$nome' and  sobrenome='$sobrenome' and email='$email' and senha='$senha'";
                               
                                $verifica = mysql_query($sql,$conecta);
                                $consulta = mysql_num_rows($verifica);
                                
                                
                                
                                
                                if($consulta>=1)
                                {
                                    echo "Usuário já cadastrado<br><br>";
                                     echo"Clique <a href='../index.php'> aqui </a>para voltar<br>";
                                    
                                }
                                else
                                {
                                

                                    $cmd="insert into usuarios values('','$nome','$sobrenome','$email','$senha','$tipo')";
                                    $inserir = mysql_query($cmd,$conecta);

                                        if(!$inserir)
                                        {

                                            echo"Não foi possível realizar o cadastro<br><br>.";
                                            echo"Clique <a href='../cadastro.php'>aqui </a>para voltar<br>";

                                        }
                                        else
                                        {
                                            echo "Cadastro realizado com sucesso<br><br>";
                                            echo"Clique <a href='../index.php'>aqui </a>para voltar<br>";


                                        }
                                }

                    

                        }
                    }
            ?>
            </div>
            </center>
    </body>
    </html>