<?php 
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
/*

   $host ='mysql.hostinger.com.br' ;
            $login='u822796663_os';
            $senha='abc@123';
            $bd='u822796663_sys';
            
            

            $conecta = mysql_connect($host,$login,$senha);


                if(!$conecta)
                {
                    echo"Não foi possível se conectar ao banco de dados";
                     //mysql_close($conecta); 
                }
                $banco = mysql_select_bd($bd,$conecta) or die (mysql_error());

                if(!$banco)
                {
                    echo "Erro de conexão com o banco";
                }

            else
            {
                mysql_select_bd($bd,$conecta);
                echo"Conexão OK!!";
            }
*/

        $servidor = "br754.hostgator.com.br";
        $usuario = "jhoin980_user";
        $senha = "abc@123";
        $banco = "jhoin980_sistema";
        $conecta = mysql_connect($servidor, $usuario,$senha);
       

        
        if(!$conecta)
            echo "Não foi possível se conectar ao banco de dados";
        $bd=mysql_select_db($banco,$conecta);
        
        if(!$bd)
            echo "Não foi possível selecionar o banco de dados";
        else
        //    echo "Conexão OK!!!";


                
         
?>


