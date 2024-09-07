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

$title = $_POST['title'];
$content = $_POST['content'];

$sql = "INSERT INTO questions (title, content, created_at) VALUES ('$title', '$content', NOW())";

if ($conn->query($sql) === TRUE) {
    header("Location: forum.html"); // Redirect ke halaman forum
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

