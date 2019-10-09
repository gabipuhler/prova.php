<?php

$nomeCompleto = $_POST['nomeC'];
$email = $_POST['email'];
$data = $_POST['dataN'];
$facebook = $_POST['urlF'];
$perfil = $_POST['perfil'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];

list($ano, $mes, $dia) = explode('-', $data);

$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));

$nascimento = mktime(0, 0, 0, $mes, $dia, $ano);
$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);

echo "Nome Completo:<strong style='color:purple;'>$nomeCompleto</strong><br>";
echo "Email: $email <br>";
echo "Idade: $data = $idade Anos <br>";
echo "Facebook: <a href='$facebook'>$facebook</a> <br>";
echo "Estado: $estado <br>";
echo "Cidade: $cidade <br>";
echo "<center><img src='$perfil' width='300px' height='300px''></center>";
