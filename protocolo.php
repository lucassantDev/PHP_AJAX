<?php

include "conexao.php";

$nome = $_POST['nomeCapturado_index'];
$cpf = $_POST['cpfCapturado_index'];
$email = $_POST['emailCapturado_index'];
$telefone = $_POST['telefoneCapturado_index'];
$setor = $_POST['setorCapturado_index'];
$descricao_protocolo = $_POST['protocoloCapturado_index'];


// comando sql
$sql = "INSERT INTO tb_protocolos (nome_completo, cpf, email, telefone, setor_responsavel, detalhes)
        VALUES ('$nome', '$cpf', '$email', '$telefone', '$setor', '$descricao_protocolo')";

// preparando a conexão
$enviar = $pdo ->prepare($sql);

// tentar executar o comando
try{
    $enviar->execute();
    echo "Protocolo enviado com sucesso! Aguarde o retorno.";
}catch(PDOException $erro){
    echo "Falha na tentativa de envio do protocolo!". $erro->getMessage();
}

?>