
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>JHOINFO - Sistema</title>
    
    
    
        
        
    <!--Bootstraap -->    
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../css/bootstrap-theme.css" rel="stylesheet" type="text/css">
    <link href="../js/bootstrap.js" rel="stylesheet" type="text/js">
    <link href="../js/bootstrap.min.js" rel="stylesheet" type="text/js">
</head>
   <!--Jquerys-->
    <script src="../js/jquery-1.8.3.min.js" type="text/javascript"></script>
    <script src="../js/jquery-ui-1.9.2.custom.min.js" type="text/javascript"></script>

    <!--JavaScripts-->
    <script src="../js/bootstrap.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    
<body>
    
    
    <?php
                
                include ('conexao.php');
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                
                $sql = "SELECT * FROM `usuarios` WHERE email='$email' and senha='$senha'";
                $verifica = mysql_query($sql,$conecta);
                $consulta = mysql_num_rows($verifica);
                
                
                
                if($consulta==0)
                {
                    echo "Usuário não cadastrado<br><br>";
                    echo"Clique <a href='cadastro.php'>aqui </a> para realizar o cadastro<br>";
                }
                else
                
                { ?>
    
                        <nav class="navbar navbar-default">
                              <div class="container-fluid">
                                <div class="navbar-header">
                                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>                        
                                  </button>
                                  <a class="nav-bar-brand page-scroll text-left" href="#page-top" align="left"><img src="../img/foto.jpg" ></a >
                                </div>
                                <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="http://www.jhoinfo.com.br/"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                                </ul>
                                </div>
                              </div>
                        </nav>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-offset-2">
                                    <button class="btn btn-danger">teste</button>
                                </div>
                            </div>
                        </div>
                   
                <?php 
                } 
                ?>
        
</body>
</html>    
    
    