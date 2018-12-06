<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Cadastro Usuário</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="/SGPC/ci/assets/css/bootstrap.css">
  </head>
  <body>

    <h1 align="center"> Cadastro </h1>
    <div class="container">
=======

        <link rel="stylesheet" href="/SGPC/assets/css/bootstrap.css">


  </head>
  <body>


    <h2 align="center"> Cadastro </h2>
    <div class="container col-md-offset-3 col-md-6" style="border: solid 1px #d5d5d5; border-radius: 5px; background-color: white; padding: 15px;">
<<<<<<< HEAD
>>>>>>> master
      <form name="form" method="post" action="">
        <div><font face="Verdana, Arial, Helvetica, sans-serif" size="1">
          Nome:
          <input type="text" name="nome" class="form-input"><br><br>

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
        		<option value="rj">Rio de Janeiro</option

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
          <input class="form_botao" type="submit" name="cadastrar" value="Solicitar Cadastro" style="border-style: solid; font-face: verdana;font-size: 12;color: black;background-color: white;border-color: #357CCA;border-width: 1px;">
        </div>
        <div align="left">
          <input class="form_botao" type="reset" name="Cancelar" value="cancelar" style="border-style: solid; font-face: verdana;font-size: 12;color: black;background-color: white;border-color: #357CCA;border-width: 1px;">
=======
      <form name="form" method="post" action="<?php echo base_url('Funcionario/create')?>">
        <div><font face="Verdana, Arial, Helvetica, sans-serif" size="1">
        <div class="row">
            <div class="col-md-6">
                <label for="nome">Nome:</label>
                <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome">
            </div>
            <div class="col-md-6">
                <label for="nome">Nome de Usuário:</label>
                <input class="form-control" type="text" id="nomeUsuario" name="login" placeholder="Nome de Usuário">
            </div>
        </div>
            <label for="email">E-mail:</label>
          <input class="form-control" id="email" type="email" name="email" placeholder="Email">
                <label for="senha">Senha:</label>
          <input class="form-control" id="senha" type="password" name="senha" placeholder="Senha" required>
        <div class="row">
            <div class="col-md-4">
                <label for="endereco">Rua:</label>
                  <input class="form-control" type="text" id="rua" name="rua" placeholder="Rua">
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
                <input class="form-control" id="complemento"  type="text" name="complemento" placeholder="Complemento" >
            </div>
            <div class="col-md-4">
                <label for="referencia">Referência:</label>
                <input class="form-control" id="referencia"  type="text" name="referencia" placeholder="referencia" >
            </div>
        </div>
                <label for="departamento">Departamento:</label>
                <select id="departamento" name="departamento" class="form-control">
                    <option value="">Selecione o Departamento</option>
                    <option value="FISCAL">Fiscal</option>
                    <option value="PESSOAL(RH)">Pessoal (RH)</option>
                    <option value="CONTABIL">Contábil</option>
                </select>
            </font>
>>>>>>> master
        </div>
    </div>

  </body>
</html>
