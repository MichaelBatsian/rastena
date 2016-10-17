?<?php

$recepient = "pavliishymanski@mail.ru";
$sitename = "rastena.by";

$name = trim($_POST["feedbackName"]);
$email = trim($_POST["feedbackEmail"]);
$backText = trim($_POST["feedbackMessage"]);
$message = "»м€: $name \nЁлектронный €щик:$email\n—ообщение: $backText";

$pagetitle = "—ообщение обратной св€зи с сайта \"$sitename\".";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");