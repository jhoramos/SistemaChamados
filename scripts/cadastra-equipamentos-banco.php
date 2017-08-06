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
            
            
            


                    include('conexao.php');

                    $tipo=$_POST["tipo_equip"];
                    $marca=$_POST["marca"];
                    $modelo=$_POST["modelo"];
                    $acessorios=$_POST["acessorios"];
					$patrimonio=$_POST["patrimonio"];
                    $observacoes=$_POST["obs"];
										
					if(strpos($patrimonio)!==false)
					{
						 $patrimonio=$_POST["patrimonio"];
						 
						
					}
					else
					{
						$patrimonio=null;
					}
					
					  if(strpos($observacoes)!==false)
					  {
						  $observacoes=$_POST["obs"];
					  }
					  else
					  {
						  $observacoes=null;
					  }
					          
            
                  
            
                    
                            $sql = "INSERT INTO equipamentos VALUES('','$tipo','$marca','$modelo',$acessorios,$patrimonio,$observacoes)";
                            $inserir = mysql_query($sql,$conecta);
                            
                            echo  $sql;
                            
                            
                            
                            if(!$inserir)
                            {
                                echo "Não foi possível realizar o cadastro do equipamento<br><br>";
                                echo"Clique <a href='cadastra-cliente.php'>aqui </a> para voltar<br>";
                                
                            }
                            
                            else
                            {
                                echo "Equipamento cadastrado com sucesso<br><br>";
                                echo"Clique <a href='system.jhoinfo.com.br'>aqui </a> para voltar ao menu<br>";
                                
                            }
                            
                            
                     
            ?>
            </div>
            </center>
    </body>
    </html>