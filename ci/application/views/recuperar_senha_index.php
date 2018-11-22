<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Recuperar Senha</title>
        <link rel="stylesheet" href="/SGPC/ci/assets/css/bootstrap.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">  
                    <br>
                    
                    <?php  if (!empty($message)) echo '<div class="btn btn-danger>"'.$message. '</div>' ?>

                    <form class="col-md-12" name="form" method="post" action="valida">
                        <div class="form-group ">
                            <label for="exampleInputPassword1">E-mail</label>
                            <br>
                            <input type="email" required="true" name="email" class="form-control" id="exampleInputPassword1" placeholder="E-mail cadastrado no sistema">
                        </div>
                        <br>       

                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>


                </div>
            </div>
        </div>
    </body>
</html>
