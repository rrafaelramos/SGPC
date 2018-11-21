<!DOCTYPE html>
<<<<<<< HEAD
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Cadastro Usuário</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css">
  </head>
  <body>
    <h2 align="center"> Cadastro </h2>
    <div class="container col-md-offset-3 col-md-6" style="border: solid 1px #d5d5d5; border-radius: 5px; background-color: white; padding: 15px;">
      <form name="form" method="post" action="">
        <div><font face="Verdana, Arial, Helvetica, sans-serif" size="1">
          <label for="email">E-mail:</label>
          <input class="form-control" id="email" type="email" name="email" placeholder="Email">
            </font>
        </div>
          <br>
            <input class="btn btn-danger col-md-offset-1" type="reset" name="cancelar" value="Cancelar" style="font-face: verdana;font-size: 12px; display:inline;">
            <input class="btn btn-success col-md-offset-7" type="submit" name="cadastrar" value="Solicitar Cadastro" style="font-face: verdana;font-size: 12px; display:inline; right: 0px; position: relative;">
      </form>
    </div>
  </body>
</html>
=======
<html>
    <head>
        <title>Sistema de Login</title>
    </head>
    <body>
        <div class="container">
            <?php if (!$this->session->userdata("usuario_logado")) : ?>
                <h1>Login</h1>
                <?php
                //Criação de formulario
                echo form_open("Recuperar_Credencial/valida");
                echo form_label("Digite seu e-mail de acesso", "email");
                echo form_input(array(
                    "name" => "email",
                    "id" => "email",
                    "class" => "form-control",
                    "naxlenth" => "255"
                ));          
                
                 echo form_button(array(
                    "class" => "btn btn-primary",
                    "content" => "Enviar",
                    "type" => "submit"
                ));
            endif;
            echo form_close();
            ?>
    </body>
</html>
>>>>>>> 1ab66e2a1eb70f9dc0a1bb38069f8c43f7f6dc16
