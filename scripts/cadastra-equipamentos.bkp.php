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
                                        <select>
                                            <option value="Celula">Celular</option>
                                            <option value="Tablet">Tablet</option>
                                            <option value="Notebook">Notebook</option>
                                            <option value="Computador">Computador</option>
                                            <option value="Gps">Gps</option>
                                            <option value="Outros">Outros</option>
                                        </select>
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
                                <tr>
                                    <td>
                                        Numero de Série<i>*</i>:
                                    </td>
                                    <td>
                                        <input type="text" name="serie" required>
                                    </td>

                                </tr>
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
                                    <td>Cliente<i>*</i>:</td>
                                    <td> 
                                        <?php 
                                            include('conexao.php');

                                            $sql="select nome from cliente order by nome";
                                            $resultado = mysql_query($sql,$conecta);
                                            if($resultado)
                                            {
                                                echo("<select name='cliente' required>");
                                                    while($linhas = mysql_fetch_array($resultado))
                                                    {            

                                                    echo("<option value='".$linhas['id_cliente']."'>".$linhas['nome']."</option>");

                                                    }
                                                echo("</select><br><br>");
                                            }
                                        ?>
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