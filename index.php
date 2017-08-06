
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
    
    <!--Jquerys-->
    <script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui-1.9.2.custom.min.js" type="text/javascript"></script>

    <!--JavaScripts-->
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    
    
        
        
    <!--Bootstraap -->    
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
    <link href="js/bootstrap.js" rel="stylesheet" type="text/js">
    <link href="js/bootstrap.min.js" rel="stylesheet" type="text/js">
</head>
   
<body>
     <nav class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barraBasica2">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="nav-bar-brand page-scroll text-left" href="#page-top" align="left"><img src="../img/foto.jpg" ></a >
          </div>
      
          <!--<div class="collapse navbar-collapse" id="barraBasica2">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
              <li><a href="#">Portfólio</a></li>
              <li><a href="#">Matérias</a></li>
              <li><a href="#">Contato</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
      </nav>    
    <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form class="form-signin" action="scripts/login.php" method="post">
                    <!--<h2 class="form-signin-heading">LOGIN</h2> -->
                    <label for="inputEmail" class="sr-only">Email</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" required autofocus>
                    <label for="inputPassword" class="sr-only">Senha</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="senha" required>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="remember-me"> Remember me
                      </label>
                    </div>
                    <button class="btn btn-danger" type="submit">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
</div>
    </div> <!-- /.container -->
</body>
</html>