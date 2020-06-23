<?php<?php
$dsn = 'mysql:dbname=sample_db;host=localhost;';
$user = 'yorozu';
$password = 'morijyobi';
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];

    $sql = "insert into user values (:id, :name, :age)";
    $stmt = $dmk->prepare($sql);
    $params = array(':id' => $id, ':name' => $name, ':age' => $age);
    $stmt->execute($params);


    header('location: index.php?fg=1');
} catch (PDOException $e) {
    header('location: index.php?fg=1?err=$e->getMessage');
    //echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}
?>
$password = 'morijyobi';
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];

    $sql = "insert into user values (:id, :name, :age)";
    $stmt = $dmk->prepare($sql);
    $params = array(':id' => $id, ':name' => $name, ':age' => $age);


    $result = $dbh->query($params);

    header('location: index.php?fg=1');
} catch (PDOException $e) {
    header('location: index.php?fg=1?err=$e->getMessage');
    //echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}
?>
