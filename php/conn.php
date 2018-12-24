<?php
    define('DB_HOST','');
    define('DB_USER','');
    define('DB_PASSWORD','');
    define('DB_NAME','');

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Si è verificato un errore durate la connesione al database")

?>