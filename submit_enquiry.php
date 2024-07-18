<?php
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

// Menyiapkan dan menjalankan pernyataan SQL
$stmt = $conn->prepare("INSERT INTO Enquiries (name, email, phone_number, destination, travel_date_from, travel_date_to, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $name, $email, $phone_number, $destination, $travel_date_from, $travel_date_to, $message);

// Mendapatkan data dari form
$name = $_POST['name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$destination = $_POST['destination'];
$travel_date_from = $_POST['travel_date_from'];
$travel_date_to = $_POST['travel_date_to'];
$message = $_POST['message'];

if ($stmt->execute()) {
    echo "Enquiry submitted successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
