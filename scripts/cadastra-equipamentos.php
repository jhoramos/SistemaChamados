<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Sistema de chamado | Equipamentos</title>
    </head>
    <body>
        <center>
            <div id="mae">
                <div id="logo">
                    <img src="../img/logo.jpg">
                </div> 
                <div id="cabecalhos-botoes">
                    
                     <!-- <div id="form-cadastro"> -->
                        <form method="post" action="cadastra-equipamentos-banco.php">
                            <table>
                                <tr>
                                    <td>
                                        Tipo<i>*</i>:
                                    </td>
                                    <td>
                                        <?php 
                                            include('conexao.php');

                                            $sql="select * from tipo_equipamento order by descricao";
                                            $resultado = mysql_query($sql,$conecta);
                                            if($resultado)
                                            {
                                                echo("<select name='tipo_equip' required>");
                                                    while($linhas = mysql_fetch_array($resultado))
                                                    {            

                                                    echo("<option value='".$linhas['id_tipo']."'>".$linhas['descricao']."</option>");

                                                    }
                                                echo("</select><br><br>");
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Marca<i>*</i>:
                                    </td>
                                    <td>
                                        <input type="text" name="marca" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Modelo<i>*</i>:
                                    </td>
                                    <td>
                                        <input type="text" name="modelo" required>
                                    </td>
                                </tr>
                                
                                    <!--
									 <?php  
                                           /* include('conexao.php');

                                            $sql="select id_tipo from tipo_equipamento where 1 and 2";
                                            $resultado = mysql_query($sql,$conecta);
											
                                            if($resultado)
                                            {
                                                
                                                    while($linhas = mysql_fetch_array($resultado))
                                                    {      echo $linhas;      
														if($linhas['id_tipo']=1||$linhas['id_tipo']=2)
														{
															echo'<tr>
																<td>Numero de serie:<i>*</i></td>
																<td><input type="text" name="serie" required></td>
																</tr>';
														}
														
														

                                                    }
                                                
                                            }
											*/
                                        ?> -->
                                        
                                    

                               
                                <tr>
                                    
                                    <td>
                                        Acessórios:
                                    </td>
                                    <td>
                                        <input type="radio" name="acessorios" value="Fonte">Fonte
                                    
                                        <input type="radio" name="acessorios" value="Bateria">Bateria
                                    
                                        <input type="radio" name="acessorios" value="Mochila">Mochila
                                    
                                        <input type="radio" name="acessorios" value="Outros">Outros
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       Patrimonio:
                                    </td>
                                    <td>                                       
                                        <input type="text" name="patrimonio">
                                    </td>
                                </tr>
                                
                                        <tr>
                                            <td>
                                                Observações:
                                            </td>
                                            <td><textarea name="observacoes" rows="20" cols="40" maxlength="500"></textarea></td>
                                        </tr>
                                        
                                    </td>
                                </tr>
                            </table>
                            <input type="submit" value="Salvar">   <input type="reset" value="Limpar"><br><br>
                            <i> * campos obrigatórios</i>
                        </form>
                    </div>
                <!--</div> -->
            </div>
        </center>
    </body>
</html>