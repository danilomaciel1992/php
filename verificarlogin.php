<?php
// PEGAR OS DADOS DA TELA
$email = $_POST["email"];
$senha = $_POST["senha"];
/*
echo "E-mail: ".$email."<br>";
echo "Senha: ".$senha."<br>";
*/

//Abrir a conexão com banco de dados:
    //mysql_connect(SERVIDOR, USUARIO, SENHA, BANCO)
$con = mysqli_connect("localhost","root","","aulaprojeto");

$sql = "select * from usuario where email='".$email."' and senha='".$senha."'";

//Executar a instrução:
$rs = mysqli_query($con,$sql);
if(mysqli_num_rows($rs)==1){
    //echo "Encontrei"
    echo "<script>";
    echo "location.href='ADM/painel.php'";
    echo "</script>";
}else{
    // echo "Não encontrei!";
    $msg = base64_encode("Usuário/Senha Inválido!");
    echo "<script>";
    echo "location.href='logar.php?m=".$msg."'";
    echo "</script>";
}
?>