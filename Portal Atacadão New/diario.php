<?php
session_start();
include("conecta.php");
include("logando.php");
$data_hoje = date("Y-m-d");
$d = $_POST['d'];     
if ($_GET['d'] != null) {
	$data_s = $data_hoje;
	$data = substr($data_s, 8, 2)."/".substr($data_s, 5, 2)."/".substr($data_s, 0, 4); 
}
elseif ($_POST['d'] != null) {
	$data = $d;
	$data_s = substr($d, 6, 4)."-".substr($d, 3, 2)."-".substr($d, 0, 2);
} else {
	$data_s = $data_hoje;
	$data = substr($data_s, 8, 2)."/".substr($data_s, 5, 2)."/".substr($data_s, 0, 4);
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php header("Content-Type: text/html; charset=ISO-8859-1",true) ?>          
<title>Intranet Ipiranga</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<meta http-equiv="X-UA-Compatible" content="IE=7">
	  <link rel="stylesheet" href="resources/css/forms_portal.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="resources/css/ext-all.css" />
    <link rel="stylesheet" type="text/css" href="resources/docs.css" />
	  <link rel="stylesheet" type="text/css" href="resources/style.css" />
    <link rel="stylesheet" type="text/css" href="menu.css" />
    <link rel="stylesheet" type="text/css" href="resources/css/forms.css" />
    <link rel="stylesheet" type="text/css" href="resources/css/relatorios.css" />
	<style type="text/css">
  <!--
   	#rounded-corner { width: 800px; }
  -->
  </style>
	<script language="Javascript"> 
	function confirmacao(id) { 
		var resposta = confirm("Deseja remover esse registro?");   
		if (resposta == true) { 
			window.location.href = "cad_diario2.php?e="+id; 
		} 
	}
	
	function permissao(id) {
		alert ("Você não tem permissão para apagar esse registro!")
	} 
	</script>
	 
    
 </head>
<body>
  <div class="corpo">
    <h2>Diário</h2>
        <form action="" method="POST">
				<table align=center>
          <tr>
						<td>
					
						<input id='data_diario' type=text size=10 maxlength=10 name='d' value="<?php echo $data; ?>" ><input class="bt" style="height:39px;width:100px" type=submit value="ALTERAR" class="style2" >
						
						</td>
					</tr>
					
				</table>
				</form></div>
				<div class="diario" id="diario" align=center>
					<table id="rounded-corner" >
            <thead>
            	<tr>
                	  <th scope="col" width='30%' class="rounded-q0">USUÁRIO</th>
                    <th scope="col" width='5%' class="rounded-q1" style="text-align:center">HORÁRIO</th>
                    <th scope="col" width='60%' class="rounded-q2" style="text-align:center">RELATO</th>
                    <th scope="col" width='5%' class="rounded-qend" style="text-align:center">EXCLUIR</th>
                </tr>
            </thead>
                <tfoot>
            	<tr>
                	<td colspan="3" class="rounded-foot-left"><i>Equipe CPD - Filial Ipiranga</i></td>
                	<td class="rounded-foot-right">&nbsp;</td>
                </tr>
            </tfoot>
            <tbody>
					
					<?php
					$usuario =$_SESSION['logar'];
					$bglcolor= "#ffff0";
					$diario = mysql_query("select d.id_usuario, d.data, d.horario, d.relato, u.nomusuario, d.id_diario from diario d, usuarios u where u.codusuario=d.id_usuario and d.data='$data_s' order by d.horario,d.data");
					if (mysql_num_rows($diario) == null) { 
						echo "
            <tr>
        	     <td colspan=5 align=center><br>NENHUMA OCORRÊNCIA ENCONTRADA NA DATA: <b>$data</b><br><br></td>
            </tr>"; 
					} else {
					  while($diario1=mysql_fetch_array($diario)){
            $relato = str_replace ("\n", "<br>", $diario1[3]);
						echo "
            <tr>
        	     <td width='20%'><b>$diario1[4]</b></td>
               <td width='10%' align=center><b>$diario1[2]</b></td>
               <td width='60%'>$relato</td>";
						if ($_SESSION['logar'] == $diario1[0]) {
							echo "<td width='10%' align=center><a href=\"javascript:func()\" onclick=\"confirmacao('$diario1[5]')\"><img src='resources/icone-excluir.gif'></a></td>";
						} else {
							echo "<td width='10%' align=center><a href=\"javascript:func()\" onclick=\"permissao('$diario1[5]')\"><img src='resources/icone-excluir.gif'></a></td>";
						}
						echo "
            </tr>";
						
						}
					}
					?>
           </tbody>
					</table><br>
					<button class="bt" onclick="window.location.href='cad_diario.php'" style="width:80px;">Novo</button>
          	&nbsp; 
					<button class="bt" onclick="window.location.href='bus_diario.php'" style="width:120px;">Pesquisar</button>      
  </div>                 
	</div>                  
</body>
</html>
					
		
