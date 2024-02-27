<?php
$host = 'localhost';
$db   = 'your_database';
$user = 'your_username';
$pass = ''; // no password
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);


$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cru_number = $_POST['CRU_Number'];
    $firstname = $_POST['firstname'];
    $surname = $_POST['Surname'];
    $dob = $_POST['Date_of_Birth'];
    $level = $_POST['Level'];
    $gender = $_POST['gender'];
    $programme = $_POST['programme'];

    $sql = "INSERT INTO your_table (CRU_Number, firstname, Surname, Date_of_Birth, Level, gender, programme) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$cru_number, $firstname, $surname, $dob, $level, $gender, $programme]);

    echo "Data successfully inserted!";
}
?>
