<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];

    $sql = "INSERT INTO employees (name) VALUES ('$name')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Karyawan</title>
</head>
<body>
    <h1>Tambah Karyawan</h1>
    
    <form method="post">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>
