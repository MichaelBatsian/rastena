<?php

$recepient = "pavliishymanski@mail.ru";
$sitename = "rastena.by";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$email = trim($_POST["email"]);
$message = "Имя: $name \nТелефон: $phone \nЭлектронный ящик: $email";

$pagetitle = "Зявка с сайта \"$sitename\" на звонок";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");