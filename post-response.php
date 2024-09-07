<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "digital_classroom";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$response = $_POST['response'];
$question_id = $_POST['question_id'];

$sql = "INSERT INTO responses (question_id, response, created_at) VALUES ('$question_id', '$response', NOW())";

if ($
