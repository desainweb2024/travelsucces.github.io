<?php
// Pastikan ini adalah file yang aman dan diakses secara langsung
if ($_SERVER["REQUEST_METHOD"] != "POST" || !isset($_POST['id']) || !isset($_POST['table'])) {
    header("Location: admin_view.php"); // Arahkan kembali ke halaman admin jika tidak ada data yang diterima
    exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel_enquiries";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Hapus data berdasarkan ID yang diterima dari form
$id = $_POST['id'];
$table_name = $_POST['table'];

// Query SQL untuk menghapus data
$sql = "DELETE FROM $table_name WHERE ";
if ($table_name == 'Enquiries') {
    $sql .= "enquiry_id = $id";
} elseif ($table_name == 'Contacts') {
    $sql .= "contact_id = $id";
}

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

// Arahkan kembali ke halaman admin setelah menghapus

?>
