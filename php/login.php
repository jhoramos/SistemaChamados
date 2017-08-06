
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
                    <div class="container-fluid">        
                        <div class="row">
                            <div class="col-lg-12">
                                <nav class="navbar navbar-default navbar-fixed-top">
                                <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barraBasica2">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">
                                            <a class="nav-bar-brand page-scroll text-left" href="#page-top" align="left"><img src="../img/foto.jpg" ></a > 

                            </a>
                          </div>
                          <div class="collapse navbar-collapse navbar-right" id="barraBasica2">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="#">Ordem de serviço<span class="sr-only">(current)</span></a></li>
                      <li><a href="#">Cadastro de cliente</a></li>
                      <li><a href="http://www.jhoinfo.com.br/">Sair</a></li>
                    </ul>
                  </div><!-- /.navbar-collapse -->
                        </nav>    
                    </div>
                </div> <!-- /.row -->
                </div><!-- /.container-fluid -->
    
    <div class="container">                
            <div class="row">
                <div class="col-lg-offset-2">
                        <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        EDITAR (btn-default) <span class="caret"></span>
                                    </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">novo</a></li>
                                    <li><a href="#">abrir</a></li>
                                    <li><a href="#">fechar</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">salvar</a></li>
                                </ul>
                        </div> <!-- /.btn-group --> 
                    </div><!-- /.col-lg-offset --> 
            </div> <!-- row-->
        </div> <!--container-->
                <?php 
                } 
                ?>
        
</body>
</html>    
    
    