<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Admin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        table {
            margin-top: 20px;
        }
        .login-form {
            max-width: 400px;
            margin: 0 auto;
            background: #f7f7f7;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

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

// Fungsi untuk menampilkan data dari tabel
function displayTable($conn, $table_name, $table_title, $columns) {
    $sql = "SELECT * FROM $table_name";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<div class='card mb-4'>";
        echo "<div class='card-header'><h2 class='card-title'>$table_title</h2></div>";
        echo "<div class='card-body'>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-bordered'>
                <thead class='thead-light'>
                    <tr>";
        foreach ($columns as $column) {
            echo "<th scope='col'>$column</th>";
        }
        echo "<th scope='col'>Action</th>"; // Kolom tambahan untuk tombol hapus
        echo "</tr>
                </thead>
                <tbody>";
        
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($columns as $column) {
                echo "<td>".$row[$column]."</td>";
            }
            // Tombol hapus untuk setiap baris
            echo "<td>
                    <form method='post' action='delete.php' onsubmit='return confirmDelete()'>
                        <input type='hidden' name='id' value='".$row[$columns[0]]."'>
                        <input type='hidden' name='table' value='$table_name'>
                        <button type='submit' class='btn btn-danger btn-sm'>Delete</button>
                    </form>
                  </td>";
            echo "</tr>";
        }
        echo "</tbody>
            </table>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    } else {
        echo "<div class='card mb-4'>";
        echo "<div class='card-header'><h2 class='card-title'>$table_title</h2></div>";
        echo "<div class='card-body'>";
        echo "<p class='card-text'>0 results</p>";
        echo "</div>";
        echo "</div>";
    }
}

// Cek apakah pengguna sudah login
$logged_in = false;

if (isset($_POST['username']) && isset($_POST['password'])) {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    // Ganti dengan validasi sesuai kebutuhan Anda
    if ($input_username === "admin" && $input_password === "12345") {
        $logged_in = true;
    } else {
        echo "<div class='alert alert-danger'>Username atau password salah!</div>";
    }
}

// Jika sudah login, tampilkan konten admin
if ($logged_in) {
    echo "<div class='container'>";
    echo "<h1 class='text-center mb-4'>Menu Admin</h1>";

    // Data Pemesanan Tiket
    $enquiry_columns = ["enquiry_id", "name", "email", "phone_number", "destination", "travel_date_from", "travel_date_to", "message", "status", "enquiry_date"];
    displayTable($conn, "Enquiries", "Data Pemesanan Tiket", $enquiry_columns);

    // Data Pesan
    $contact_columns = ["contact_id", "name", "email", "subject", "message", "contact_date"];
    displayTable($conn, "Contacts", "Pesan", $contact_columns);

    echo "</div>";
} else {
    // Jika belum login, tampilkan form login
    echo "<div class='login-form'>
            <h2 class='text-center mb-4'>Login Admin</h2>
            <form method='post'>
                <div class='form-group'>
                    <label for='username'>Username:</label>
                    <input type='text' class='form-control' id='username' name='username' required>
                </div>
                <div class='form-group'>
                    <label for='password'>Password:</label>
                    <input type='password' class='form-control' id='password' name='password' required>
                </div>
                <button type='submit' class='btn btn-primary btn-block'>Login</button>
            </form>
          </div>";
}

$conn->close();
?>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete this record?');
    }
</script>
</body>
</html>
