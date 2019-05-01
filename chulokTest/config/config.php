<?php
$db_name = @mysqli_connect('localhost', 'user', 'password', 'dbname') or die
 ('Ошибка соединения');

if(!$db_name) die (mysqli_connect_error());

mysqli_set_charset($db_name, "utf8") or die ('Не установлена кодировка');
