<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Recuperar Senha</title>
    <link rel="stylesheet" href=<?php echo url_for("assets/css/bootstrap.css");?>>
  </head>
  <body>
    <center>
        <form name="form" method="post" action="">
          <div class="form-group">
            <label for="exampleInputPassword1">Nova senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Repetir senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Redefinir</button>
      </form>
    </center>
  </body>
</html>
