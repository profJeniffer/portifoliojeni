
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Validando formulário </title>
    <meta charset="utf-8">
	<script type="text/javascript">
  function validar()
  {
    var vNome=frmFaleConosco.txtNome.value;
	if(vNome=="")
	{
	alert('por favor preencha o campo nome')
	frmFaleConosco.txtNome.focus()//função focus serve para posiciocionar o cursor
	//no campo nome do html
		}//condicional if vazio
	
if(frmFaleConosco.chkHobbies[0].checked==false &&
frmFaleConosco.chkHobbies[1].checked==false)
{
alert("Por favor selecione ao menos um hobbie");
return false;
}//condição de acordo com o checkbox não marcado
	
  }//fim da função Validar
</script>
  </head>
  <body>
<form name="frmFaleConosco" action="enviar.php" method="post">
Nome: <input name="txtNome" type="text" ><br>
 </tr>
  <tr>
    <td colspan="2">Hobbies</td>
    </tr>
  <tr>
    <td colspan="2"><table width="100%">

      <tr>
        <td><label>
          <input type="checkbox" name="chkHobbies" value="1" id="chkHobbies_0" />
          Leitura</label></td>
        <td><label>
          <input type="checkbox" name="chkHobbies" value="2" id="chkHobbies_1" />
          Jogos Eletrônicos</label></td>
      </tr>
          </table></td>
    </tr>
<input type="submit" onclick="return validar()">
</form>
  </body>
</html>

