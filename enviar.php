<?php

$para = "rafiinhathomas24@gmail.com";
$assunto = "Email de Projeto Novo";
$mensagem = utf8_decode('Nome: ' . $_POST['nome'] . "\r\n" . "\r\n" . 'Email: ' . $_POST['email'] . "\r\n" . "\r\n" . 'Mensagem: ' . "\r\n" . "\r\n" . $_POST['msg']);
$dest = $_POST['email'];

$cabecalhos = "From: " . $dest;

mail($para, $assunto, $mensagem, $cabecalhos);
?>

<script>
    alert('Enviado com Sucesso.');
</script>

<script language='javascript'>
    window.location = 'index.html#home';
</script>