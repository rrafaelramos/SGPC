<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Recuperar Senha</title>
    <link rel="stylesheet" href="/SGPC/assets/css/bootstrap.css">

  </head>
  <body>
     <br><br>
    <center>
        
       
      <div class="card" style="width: 18rem;">
        <form class="form-inline" name="form" method="post" action="http://127.0.0.1/SGPC/ci/index.php/Recuperar_Credencial/update">
          <div class="form-group ">
            <label for="exampleInputPassword1">Nova senha</label>
            <br>
            <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
          </div>
          <br>
          <div class="form-group mb-2">
            <label for="exampleInputPassword">Repetir senha</label>
            <br>
            <input type="password" name="senha2" class="form-control" id="exampleInputPassword1" placeholder="Nova senha">
          </div>
          <br>
          <input type="hidden" name="id" value="<?= $this->uri->segment(4) ?>" >
           <input type="hidden" name="token" value="<?= $this->uri->segment(3) ?>" >
          <button type="submit" class="btn btn-primary">Redefinir</button>
          
      </form>
          
          <?php if (!empty($message)) echo '<div class="alert alert-danger" role="alert">
 As senhas não coincidem!
</div>';?>
    </div>
    </div>
    </div>

    </center>
  </body>
</html>
