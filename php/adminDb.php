<?php

    $host ='localhost';
    $user = 'root';
    $password = '';
    $dbName = 'project';

    $dsn = 'mysql:host='.$host.';dbname='.$dbName;
    $pdo = new PDO($dsn, $user, $password); 

    $sql = 'SELECT * FROM adminWebsite';
    $sth = $pdo->prepare($sql);
    $sth->execute();
    $row = $sth->fetch();

    $Username = $row['Username'];
    $Password = $row['Password'];

?>