<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'USUARIODOBANCO');
define('SENHA', 'SENHADOBANCO');
define('DB', 'login');

$conexao = mysqli_connect(HOST, root,'' , DB) or die ('Não foi possível conectar');