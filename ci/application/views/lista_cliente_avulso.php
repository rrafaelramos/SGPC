<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Usuários</title>
        <link rel="stylesheet" href="/SGPC/assets/css/bootstrap.css">
    </head>
    <body>
        <h2 align="center"> Clientes Avulsos </h2>
        <div class="container col-md-offset-1 col-md-10">
            <div class="row">
                <div>
                    <div class="panel panel-default" >
                        <!-- Default panel contents-->
                        <div class="panel-heading" > Lista de Clientes Avulsos </div >
                        <!--Table -->
                        <table class="table" >
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>CPF</th>
                                    <th>RG</th>
                                    <th>Nascimento</th>
                                    <th>Email</th>                             
                                    <th>Telefone</th>
                                    <th>Endereço</th>
                                    <th>Numero</th>
                                    <th>CEP</th>
                                    <th>Bairro</th>
                                    <th>Referência</th>
                                    <th>Cidade</th>
                                    <th>UF</th>
                                    <th>Complemento</th>    
                                    <th>Ações</th>         
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                           
                                foreach ($clientes as $line) {
                                    echo '<tr>';
                                    echo '<td></td>';
                                    echo '   <td>' . $line->nome . '</td>';
                                    echo '   <td>' . $line->cpf . '</td>';
                                    echo '   <td>' . $line->rg . '</td>';
                                    echo '   <td>' . $line->nascimento . '</td>';
                                    echo '   <td>' . $line->email . '</td>';
                                    echo '   <td>' . $line->telefone . '</td>';
                                    echo '   <td>' . $line->rua . '</td>';
                                    echo '   <td>' . $line->numero . '</td>';
                                    echo '   <td>' . $line->cep . '</td>';
                                    echo '   <td>' . $line->bairro . '</td>';
                                    echo '   <td>' . $line->referencia . '</td>';
                                    echo '   <td>' . $line->cidade . '</td>';
                                    echo '   <td>' . $line->complemento . '</td>';
                                    echo '   <td>' . $line->estado . '</td>';
                                    echo '   <td><a href="' . base_url('Clientes_Avulsos/show_data/' . $line->id) . '"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://127.0.0.1/SGPC/ci/index.php/Clientes_Avulsos/delete/' . $line->id .'"><span class="glyphicon glyphicon-remove"></span></a></td>';
                                    echo '    </tr>';
                                }
                                ?>
                            </tbody>
                        </table >
                    </div >
                </div>
            </div>
        </div>
    </body>
</html>
