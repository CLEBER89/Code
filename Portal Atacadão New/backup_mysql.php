<?php

$hostname='localhost';
$username='filial49';
$senha1='senhafilial';
$banco='atacadao';
$dbc=mysql_connect($hostname, $username, $senha1);
mysql_select_db($banco, $dbc);

$sql = "show tables";
$sts = mysql_query($sql,$dbc) or die (mysql_error());
$data = date("d-m-y");

while($row = mysql_fetch_array($sts)){
  $nome = $row[0];
  $narquivo = $nome."-".$data;
  $resp = mysql_query("select * into outfile '/files/portal/backup_data/anotaloja/$narquivo' from $nome");
}

// Backup Chamados

$m   = mysql_select_db("chamados", $dbc);
$sql = "show tables";
$aud = mysql_query($sql,$dbc) or die (mysql_error());
$data = date("d-m-y");

while($row = mysql_fetch_array($aud)){
  $nome = $row[0];
  $narquivo = $nome."-".$data;
  $resp = mysql_query("select * into outfile '/files/portal/backup_data/chamados/$narquivo' from $nome");
}

// Backup Colaboradores

$m   = mysql_select_db("colaboradores", $dbc);
$sql = "show tables";
$sts = mysql_query($sql,$dbc) or die (mysql_error());
$data = date("d-m-y");

while($row = mysql_fetch_array($sts)){
  $nome = $row[0];
  $narquivo = $nome."-".$data;
  $resp = mysql_query("select * into outfile '/files/portal/backup_data/colaboradores/$narquivo' from $nome");
}

// Backup Entrada_colaboradores

$m   = mysql_select_db("entrada_colaboradores", $dbc);
$sql = "show tables";
$sts = mysql_query($sql,$dbc) or die (mysql_error());
$data = date("d-m-y");

while($row = mysql_fetch_array($sts)){
  $nome = $row[0];
  $narquivo = $nome."-".$data;
  $resp = mysql_query("select * into outfile '/files/porta/backup_data/entrada_colaboradores/$narquivo' from $nome");
}

// Backup Usuarios

$m   = mysql_select_db("cliente", $dbc);
$sql = "show tables";
$sts = mysql_query($sql,$dbc) or die (mysql_error());
$data = date("d-m-y");

while($row = mysql_fetch_array($sts)){
  $nome = $row[0];
  $narquivo = $nome."-".$data;
  $resp = mysql_query("select * into outfile '/files/portal/backup_data/usuarios/$narquivo' from $nome");
}

echo "<table border=1 width=100% bgcolor=green><br><td><center><h2><font color=red>Backup realizado com sucesso $sql!!!</font></h2></td></center></table>";

?>
