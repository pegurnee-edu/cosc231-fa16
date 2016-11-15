<?php

$ini_file = "db.ini";

$ini_info = parse_ini_file($ini_file);

$username = $ini_file['username'];
$password = $ini_file['password'];
$database = $ini_file['database'];
$host     = $ini_file['host'];
$table    = $ini_file['table'];
$row      = join(",", $ini_file['attributes']);


try {
  $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if ('POST' === $_SERVER['REQUEST_METHOD']) {
    $game   = $_POST['game'];
    $user   = $_POST['user'];
    $score  = $_POST['score'];

    $sql = "INSERT INTO $table ($row) VALUES ('$game', '$user', $score)";
    $num_rows = $conn->exec($sql);

    $json = [
      "success" => $num_rows ? false : true
    ];
  } else if ('GET' === $_SERVER['REQUEST_METHOD']) {
    $game   = $_GET['game'];

    $sql = "SELECT $row FROM $table WHERE game=$game ORDER BY score";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $json = json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
  }

  echo $json;

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$conn = null;

?>
