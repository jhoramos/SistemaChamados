<!DOCTYPE html>
    <head>
    <title>JHOINFO-Sistema de chamados</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        

    </head>
   
    
    <body>
        <div class="container-fluid">
             <div class="row">
                <div class="col-lg-12">
                  <nav class="navbar navbar-default">
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#barraBasica2">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                             <a class="nav-bar-brand page-scroll" href="#page-top"><img src="img/logo.jpg" ></a > 
                        
                      </div>
                      <!--
                      <div class="collapse navbar-collapse navbar-right" id="barraBasica2">
                        <ul class="nav navbar-nav">
                          <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                          <li><a href="#">Portfólio</a></li>
                          <li><a href="#">Matérias</a></li>
                          <li><a href="#">Contato</a></li>
                        </ul>
                      </div><!-- /.navbar-collapse -->
                  </nav>    
                </div>
            </div> <!-- /.row --> 
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                   <form class="form-horizontal" action="/php/login.php" method="post">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email:</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="senha" class="col-sm-2 control-label">Senha:</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputPassword3" placeholder="Digite sua senha" name="senha">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox">Lembrar-me
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Sign in</button>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </body>


</html>