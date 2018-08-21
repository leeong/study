<?php

$conn = new PDO(
    'sqlite::memory:',
    null,
    null,
    [PDO::ATTR_PERSISTENT => true]);

$conn->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);

$conn->exec("CREATE TABLE demo(id integer,name varchar(255))");
$conn->exec("INSERT INTO demo values(1,'demo')");
$sth = $conn->query('SELECT * FROM demo');
//获取结果
$result = $sth->fetchAll(PDO::FETCH_ASSOC);
print_r($result);


$con = new PDO(
    'sqlite::memory:',
    null,
    null,
    [PDO::ATTR_PERSISTENT => true]);

$result = $con->query('SELECT * FROM demo')
    ->fetchAll(PDO::FETCH_ASSOC);
print_r($result);

