<?php
$maquina = "localhost";
$usuario = "root";
$senha = "";
$nome_do_banco = "bd_prefeitura_sp";
$porta = 3306;

try {
    $pdo = new PDO("mysql:host=$maquina;port=$porta;dbname=$nome_do_banco;charset=utf8", "$usuario", "$senha");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conectado com sucesso";
} catch (PDOException $erro) {
    echo "Falha ao conectar com o BD: $nome_do_banco <br>" . $erro->getMessage();
}
?>