<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Usuários</title>
<<<<<<< HEAD
        <link rel="stylesheet" href="assets/css/bootstrap.css">
=======
        <link rel="stylesheet" href="/SGPC/assets/css/bootstrap.css">
>>>>>>> master
  </head>
  <body>
    <h2 align="center"> Usuários </h2>
    <div class="container col-md-offset-1 col-md-10">
        <div class="row">
            <div>
                <div class="panel panel-default" >
                      <!-- Default panel contents-->
                      <div class="panel-heading" > Panel heading </div >
                      <!--Table -->
                      <table class="table" >
                          <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
<<<<<<< HEAD
                                    <th>Usuário</th>
                                    <th>Email</th>
                                    <th>Senha</th>
                                     <th>Endereço</th>
=======
                                    <th>Email</th>
                                    <th>Login</th>
                                    <th>Senha</th>
                                    <th>Endereço</th>
>>>>>>> master
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
<<<<<<< HEAD
                              <tr>
                                  <td>#</td>
                                  <td>Nome</td>
                                  <td>Usuário</td>
                                  <td>Email</td>
                                  <td>Senha</td>
                                  <td>Endereço</td>
                                  <td>Numero</td>
                                  <td>Bairro</td>
                                  <td>Cidade</td>
                                  <td>UF</td>
                                  <td>Complemento</td>
                                  <td>Departamento</td>
                                  <td><a href=""><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><span class="glyphicon glyphicon-remove"></span></a></td>
                              </tr>
=======
                          <?php
                          foreach ($funcionarios as $line) {
                            echo  '<tr>';
                              echo '<td></td>';
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
                               echo '   <td><a href="'.base_url('Funcionario/show_data/'.$line->id).'"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><span class="glyphicon glyphicon-remove"></span></a></td>';
                          echo '    </tr>';
                          }
                          ?>
>>>>>>> master
                          </tbody>
                      </table >
                    </div >
            </div>
        </div>
    </div>
  </body>
</html>
