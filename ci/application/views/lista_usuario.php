<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Usuários</title>
        <link rel="stylesheet" href="/SGPC/assets/css/bootstrap.css">
  </head>
  <body>
    <h2 align="center"> Usuários </h2>
    <div class="container col-md-offset-1 col-md-10">
        <div class="row">
            <div>
                <div class="panel panel-default" >
                      <!-- Default panel contents-->
                      <div class="panel-heading" > Usuários Ativos <a href="<?php echo base_url('Funcionario/show_cadastro')?>" class="btn btn-success pull-right">Novo </a></div >
                      <!--Table -->
                      <table class="table" >
                          <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Login</th>
                                    <th>Senha</th>
                                    <th>Endereço</th>
                                    <th>Numero</th>
                                    <th>Bairro</th>
                                    <th>Cidade</th>
                                    <th>UF</th>
                                    <th>Complemento</th>
                                    <th>Departamento</th>
                                    <th></th>
                                </tr>
                          </thead>
                          <tbody>
                          <?php
                          $cont=1;
                          foreach ($funcionarios as $line) {
                            echo  '<tr>';
                              echo '<td>'.$cont.'</td>';
                               echo '   <td>'.$line->nome.'</td>';
                               echo '   <td>'.$line->email.'</td>';
                               echo '   <td>'.$line->login.'</td>';
                               echo '   <td>'.$line->senha.'</td>';
                               echo '   <td>'.$line->rua.'</td>';
                               echo '   <td>'.$line->numero.'</td>';
                               echo '   <td>'.$line->bairro.'</td>';
                               echo '   <td>'.$line->cidade.'</td>';
                               echo '   <td>'.$line->referencia.'</td>';
                               echo '   <td>'.$line->complemento.'</td>';
                               echo '   <td>'.$line->departamento.'</td>';
                               echo '   <td><a href="'.base_url('Funcionario/show_data/'.$line->id).'"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="'.base_url('Funcionario/remover_usuario/'.$line->id).'"><span class="glyphicon glyphicon-remove"></span></a></td>';
                          echo '    </tr>';
                          $cont= $cont + 1;
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
