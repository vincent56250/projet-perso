<?php
//Demarre la session
session_start();

//autoload.php genere avec composer
require_once __DIR__. '/vendor/autoload.php';

if (file_exists(__DIR__ . '/.env')) {
    $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
}
echo('hello');
try{
    $host = $_ENV['DB_HOST'];
    $dbname = $_ENV['DB_NAME'];
    $user = $_ENV['DB_USER'];
    $pass = $_ENV['DB_PASSWORD'];     

    $bdd = new \PDO(
        "mysql:host=".$host.";dbname=".$dbname.";charset=utf8", 
        $user, 
        $pass
    );
}catch(Exception $e){
    die("Error: " .$e->getMessage());
}

$tests = $bdd->prepare('SELECT * FROM test');
$tests->execute(array());
$data = $tests->fetchAll();

foreach($data as $test): ?>

<p><?= $test['title']?></p>

<?php endforeach; ?>