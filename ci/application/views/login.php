

<html>
    <head>
        <?php
                echo '<link rel="stylesheet" type="text/css" href="/SGPC/assets/css/bootstrap.min.css">';
        ?>
    </head>
    <body>
        <div class="row" style="top: 25%; position: relative;">
            <div class="col-md-offset-4 col-md-3 container" style="border: solid 1px #d5d5d5;  border-radius: 5px;">
                <h2 class="text-center">Login</h2>
                <br>
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Usuário" name="usuario" aria-describedby="sizing-addon2" required>
                        <span class="input-group-addon" id="sizing-addon2"><i class="glyphicon glyphicon-user"></i></span>
                    </div>
                    <br>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Senha" name="Senha" aria-describedby="sizing-addon2" required>
                        <span class="input-group-addon" id="sizing-addon2"><i class="glyphicon glyphicon-lock"></i></span>
                    </div>
                    <br>
                    <input type="submit" value="Entrar" class="btn btn-success" style="width: 100%;">
                </form>
                <a class="btn btn-primary" href="" style="width: 100%;">Nova Conta</a>
                <br><br>
                    <a href="">Recuperar senha</a>
                <br><br>
            </div>
        </div>
    </body>
</html>
