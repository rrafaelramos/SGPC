<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Editar Usuário</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css">
  </head>
  <body>
    <h2 align="center"> Editar </h2>
    <div class="container col-md-offset-3 col-md-6" style="border: solid 1px #d5d5d5; border-radius: 5px; background-color: white; padding: 15px;">
      <form name="form" method="post" action="">
        <div><font face="Verdana, Arial, Helvetica, sans-serif" size="1">
        <div class="row">
            <div class="col-md-6">
                <label for="nome">Nome:</label>
                <input class="form-control" type="text" id="nome" name="nome" <?php  ?>>
            </div>
            <div class="col-md-6">
                <label for="nome">Nome de Usuário:</label>
                <input class="form-control" type="text" id="nomeUsuario" name="nomeUsuario" >
            </div>
        </div>
            <label for="email">E-mail:</label>
          <input class="form-control" id="email" type="email" name="email" placeholder="Email">
                <label for="senha">Senha:</label>
          <input class="form-control" id="senha" type="password" name="senha" placeholder="Senha">
        <div class="row">
            <div class="col-md-4">
                <label for="endereco">Endereço:</label>
                  <input class="form-control" type="text" id="endereco" name="endereco" placeholder="Endereço">
            </div>
            <div class="col-md-4">
                <label for="numero">Numero:</label>
                  <input id="numero" class="form-control" type="text" name="numero" placeholder="Numero">
            </div>
            <div class="col-md-4">
                <label for="bairro">Bairro:</label>
                  <input class="form-control" type="text" id="bairro" name="bairro" placeholder="Bairro">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="cidade">Cidade:</label>
                <input class="form-control" id="cidade" type="text" name="cidade" placeholder="Cidade">
            </div>
            <div class="col-md-4">
                  <label for="estado">UF:</label>
                  <select name="estado" class="form-control">
                        <option value="estado">Selecione o Estado</option>
                        <option value="ac">Acre</option>
                        <option value="al">Alagoas</option>
                        <option value="am">Amazonas</option>
                        <option value="ap">Amapá</option>
                        <option value="ba">Bahia</option>
                        <option value="ce">Ceará</option>
                        <option value="df">Distrito Federal</option>
                        <option value="es">Espírito Santo</option>
                        <option value="go">Goiás</option>
                        <option value="ma">Maranhão</option>
                        <option value="mt">Mato Grosso</option>
                        <option value="ms">Mato Grosso do Sul</option>
                        <option value="mg">Minas Gerais</option>
                        <option value="pa">Pará</option>
                        <option value="pb">Paraíba</option>
                        <option value="pr">Paraná</option>
                        <option value="pe">Pernambuco</option>
                        <option value="pi">Piauí</option>
                        <option value="rj">Rio de Janeiro</option>
                        <option value="rn">Rio Grande do Norte</option>
                        <option value="ro">Rondônia</option>
                        <option value="rs">Rio Grande do Sul</option>
                        <option value="rr">Roraima</option>
                        <option value="sc">Santa Catarina</option>
                        <option value="se">Sergipe</option>
                        <option value="sp">São Paulo</option>
                        <option value="to">Tocantins</option>
                    </select>
            </div>
            <div class="col-md-4">
                <label for="complemento">Complemento:</label>
                <input class="form-control" id="complemento"  type="text" name="Complemento" placeholder="Complemento" >
            </div>
        </div>
                <label for="departamento">Departamento:</label>
                <select id="departamento" name="departamento" class="form-control">
                    <option value="">Selecione o Departamento</option>
                    <option value="fiscal">Fiscal</option>
                    <option value="pessoal">Pessoal (RH)</option>
                    <option value="contabil">Contábil</option>
                </select>
            </font>
        </div>
          <br>
            <input class="btn btn-danger col-md-offset-1" type="reset" name="cancelar" value="Cancelar" style="font-face: verdana;font-size: 12px; display:inline;">
            <input class="btn btn-success col-md-offset-7" type="submit" name="salvar" value="Salvar" style="font-face: verdana;font-size: 12px; display:inline; right: 0px; position: relative;">
      </form>
    </div>
  </body>
</html>
