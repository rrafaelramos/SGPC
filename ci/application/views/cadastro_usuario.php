<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Cadastro Usuário</title>
<<<<<<< HEAD
    <link rel="stylesheet" href=<?php echo base_url("assets/css/bootstrap.css");?>>
=======
        <link rel="stylesheet" href="assets/css/bootstrap.css">
>>>>>>> 1ab66e2a1eb70f9dc0a1bb38069f8c43f7f6dc16
  </head>
  <body>
<<<<<<< HEAD

    <h2 align="center"> Cadastro </h2>
    <div class="container">
      <form name="form" method="post" action="" class="form-group">
        <div>
          Nome:
          <input type="text" name="nome"><br><br>

          E-mail:
          <input type="text" name="email"><br><br>

          Senha:
          <input type="password" name="senha"><br><br>

          Endereço:
          <input type="text" name="endereco">

          Nº:
          <input type="text" name="numero" >

          Bairro:
          <input type="text" name="bairro" ><br><br>

          Cidade:
          <input type="text" name="cidade" >
          UF:
          <select name="estado">
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
        Complemento:
          <input type="text" name="Complemento" ><br><br>
        Departamento:
          <input type="text" name="departamento" ><br><br>
        </div>
        <div align="right">
          <font face="Verdana, Arial, Helvetica, sans-serif" size="1">
          <input class="btn btn-success" type="submit" name="cadastrar" value="Solicitar Cadastro">
        </div>
        <div align="left">
          <input class="btn btn-danger" type="reset" name="Cancelar" value="cancelar">
=======
    <h2 align="center"> Cadastro </h2>
    <div class="container col-md-offset-3 col-md-6" style="border: solid 1px #d5d5d5; border-radius: 5px; background-color: white; padding: 15px;">
      <form name="form" method="post" action="">
        <div><font face="Verdana, Arial, Helvetica, sans-serif" size="1">
        <div class="row">
            <div class="col-md-6">
                <label for="nome">Nome:</label>
                <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome">
            </div>
            <div class="col-md-6">
                <label for="nome">Nome de Usuário:</label>
                <input class="form-control" type="text" id="nomeUsuario" name="nomeUsuario" placeholder="Nome de Usuário">
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
>>>>>>> 0e4801b4abaae8e183c9604ed5b910e1272855f1
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
            <input class="btn btn-success col-md-offset-7" type="submit" name="cadastrar" value="Solicitar Cadastro" style="font-face: verdana;font-size: 12px; display:inline; right: 0px; position: relative;">
      </form>
    </div>
  </body>
</html>
