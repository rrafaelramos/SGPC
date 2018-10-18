<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Cadastro Usuário</title>
  </head>
  <body>

    <h1 align="center"> Cadastro </h1>
    <div class="container">
      <form name="form" method="post" action="">
        <div><font face="Verdana, Arial, Helvetica, sans-serif" size="1">
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
          <input class="form_botao" type="submit" name="cadastrar" value="Solicitar Cadastro" style="border-style: solid; font-face: verdana;font-size: 12;color: black;background-color: white;border-color: #357CCA;border-width: 1px;">
        </div>
        <div align="left">
          <input class="form_botao" type="reset" name="Cancelar" value="cancelar" style="border-style: solid; font-face: verdana;font-size: 12;color: black;background-color: white;border-color: #357CCA;border-width: 1px;">
        </div>
    </div>

  </body>
</html>
