<?php
$conn = new mysqli("localhost", "root", "", "ice_twin_db");

if ($conn->connect_error) {
    die("Connection failed");
}

$full_name = $_POST['full_name'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$position = $_POST['position'];
$message = $_POST['message'];

$cv_name = $_FILES['cv']['name'];
$cv_tmp = $_FILES['cv']['tmp_name'];

move_uploaded_file($cv_tmp, "uploads/" . $cv_name);

$sql = "INSERT INTO careers 
(full_name, address, contact, email, position, message, cv_file)
VALUES 
('$full_name','$address','$contact','$email','$position','$message','$cv_name')";

$conn->query($sql);

echo "<script>
alert('Application submitted successfully!');
window.location.href='careers.html';
</script>";
?>
