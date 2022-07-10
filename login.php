<?php
mysql_connect("192.168.50.100","root","suporte") or die("Rá, pegadinha do malandro cara! Se Fufu. Se Fufu!");
mysql_select_db("ousadiax") or die("O Banco de dados selecionado pelo sistema nao existe e nao pode ser aberto. Altere as configuracoes.");
$usuario=$_POST['txtusuario'];
$senha=$_POST['txtsenha'];
$TB=mysql_query("select * from usuarios where usuario='$usuario' and senha='$senha'") or die("Seu cadastro nao pode ser encontrado no sistema.");
if(mysql_num_rows($TB)>0) {
echo "<br><br><hr color='lightgreen' color='2'><br><br><center>";
echo "Login efetuado com sucesso.";
echo "<br><br><hr color='lightgreen' color='2'><br><br></center>";
} else {
echo "<br><br><hr color='red' size='2'><br><br><br><center>";
echo "Usuario ou senha incorretos. Retorne e tente normalmente.";
echo "<br><br><hr color='red' size='2'><br><br></center>";
echo "<a href='index.php'>Retornar a tela de Login</a>";
echo "<br><br><hr color='red' size='2'><br><br>";
}
?>
