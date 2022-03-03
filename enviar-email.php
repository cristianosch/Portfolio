<?php

require __DIR__.'/vetor/autoload.php';
use app\communication\Email;

$name = 'TEST';
$email = 'emaildeteste@gmail.com';
$message = '<b>Ola</b> my Friend';

$obEmail = new Email;
$sucesso = $obEmail->sendEmail($name, $email, $message);

echo $sucesso ? 'Mensagem Enviada com Sucesso!' : $obEmail->getError();