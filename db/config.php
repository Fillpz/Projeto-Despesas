<!-- Arquivo de conexão com banco -->

<?php 
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'controle_orcamento');

    $conn = new mysqli(HOST, USER, PASS, BASE);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

?>