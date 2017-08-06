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
                <div id="form-cadastro">
                    <form method="post" action="cadastra-cliente-banco.php"> 
                    <table align="center">
                        <tr>
                            <td>CPF/CNPJ:<i>*</i></td>
                            <td><input type="text" name="cpf" size="15" required></td>
                        </tr>
                        <tr>
                            <td>Nome:<i>*</i></td>
                            <td><input type="text" name="nome" size="100" required></td>
                        </tr>
                        <tr>
                            <td>Endereço:<i>*</i></td>
                            <td><input type="text" name="endereco" size="100"required></td>
                            <td>Nº:<i>*</i></td>
                            <td><input type="text" name="numero" size="4" required></td>
                        </tr>
                        <tr>
                            <td>Complemento:</td>
                           <td><input type="text" name="complemento"></td>
                        </tr>
            
                        <tr>
                            <td>Cep:<i>*</i></td>
                            <td><input type="text" name="cep"required title="Digite apenas numeros"></td>
                        </tr>
                        
                        <tr>
                            <td>Cidade<i>*</i></td>
                            <td><input type="text" name="cidade" required a size="50"></td>
                            <td>Estado:<i>*</i></td>
                            <td>
                                <select required name="estado">
                                    <option value="ac">AC</option>
                                    <option value="al">AL</option>
                                    <option value="ap">AP</option>
                                    <option value="am">AM</option>
                                    <option value="ba">BA</option>
                                    <option value="ce">CE</option>
                                    <option value="df">DF</option>
                                    <option value="es">ES</option>
                                    <option value="go">GO</option>
                                    <option value="ma">MA</option>
                                    <option value="mt">MT</option>
                                    <option value="ms">MS</option>
                                    <option value="mg">MG</option>
                                    <option value="pa">PA</option>
                                    <option value="pb">PB</option>
                                    <option value="pr">PR</option>
                                    <option value="pe">PE</option>
                                    <option value="pi">PI</option>
                                    <option value="rj">RJ</option>
                                    <option value="rn">RN</option>
                                    <option value="rs">RS</option>
                                    <option value="ro">RO</option>
                                    <option value="rr">RR</option>
                                    <option value="sc">SC</option>
                                    <option value="sp">SP</option>
                                    <option value="se">SE</option>
                                    <option value="to">TO</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>E-mail:<i>*</i></td>
                            <td><input type="text" name="email" size="50" required></td>
                            
                        </tr>
                         <tr>
                            <td>Telefone:</td>
                            <td><input type="text" name="residencial" title="Digite apenas numeros"></td>
                        </tr>
                         <tr>
                            <td>Celular:<i>*</i></td>
                            <td><input type="text" name="celular" required title="Digite apenas numeros"></td>
                        </tr>
                    </table>
                        <br><br>
                        <input type="submit" value="Salvar">  <input type="reset" value="Limpar"><br><br><br>
                        <i> * campos obrigatórios</i>
                    </form> 
                </div>
            </div>
        </center>
            
     
    </body>
    </html>