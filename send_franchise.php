<?php
$conn = new mysqli("localhost", "root", "", "ice_twin_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$full_name = $_POST['full_name'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$date_applied = $_POST['date_applied'];
$message = $_POST['message'];

$sql = "INSERT INTO franchise_messages 
(full_name, address, contact, email, date_applied, message)
VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss",
    $full_name,
    $address,
    $contact,
    $email,
    $date_applied,
    $message
);

if ($stmt->execute()) {
    header("Location: franchising.html?success=1");
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
