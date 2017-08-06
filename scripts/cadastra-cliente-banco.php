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

                    $cpf=$_POST["cpf"];
                    $nome=$_POST["nome"];
                    $endereco=$_POST["endereco"];
                    $numero=$_POST["numero"];
                    $complemento=$_POST["complemento"];
                    $cep=$_POST["cep"];
                    $cidade=$_POST["cidade"];
                    $estado=$_POST["estado"];
                    $email=$_POST["email"];
                    $residencial=$_POST["tel-residencial"];
                    $celular=$_POST["celular"];
					
					if($complemento>=1)
					{
						$complemento=$complemento;
					}
					else
					{
						$complemento=0;
					}
						
					
					
					if($telefone>=1)
					{
						$residencial=$residencial;
					}						
					else
					{
						$residencial=0;
					}
						

					
                    
            
                  
            
                    if(!validaEmail($email))
                    {
                        echo "E-mail inválido<br>";
                        echo"Clique <a href='cadastra-cliente.php'>aqui </a> para voltar<br>";
                        
                    }
                    else
                    {
                        $sql="SELECT * FROM cliente where cpf='$cpf'";
                        $verifica = mysql_query($sql,$conecta);
                        $consulta = mysql_num_rows($verifica);
                        
                        if($consulta>=1)
                        {
                            echo "Cliente já cadastrado<br><br>";
                            echo"Clique <a href='cadastra-cliente.php'>aqui </a> para voltar<br>";
                        }
                        else
                        {
                            $sql = "INSERT INTO cliente VALUES('','$cpf','$nome','$endereco',$numero,$complemento,$cep,'$cidade','$estado','$email',$residencial, $celular)";
                            $inserir = mysql_query($sql,$conecta);
                            
                            echo  $sql;
                            
                            
                            
                            if(!$inserir)
                            {
                                echo "Não foi possível realizar o cadastro do cliente<br><br>";
                                echo"Clique <a href='cadastra-cliente.php'>aqui </a> para voltar<br>";
                                
                            }
                            
                            else
                            {
                                echo "Cliente cadastrado com sucesso<br><br>";
                                echo"Clique <a href='system.jhoinfo.com.br'>aqui </a> para voltar ao menu<br>";
                                
                            }
                            
                            
                        }
                    }
            ?>
            </div>
            </center>
    </body>
    </html>