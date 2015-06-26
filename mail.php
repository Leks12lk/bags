<?php

$recepient = "e-moda@mail.ua";
$sitename = "Сумки";

$name = trim($_GET["name"]);
$phone = trim($_GET["phone"]);
$code = trim($_GET["code"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nТелефон: $phone \nКод товара: $code";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");