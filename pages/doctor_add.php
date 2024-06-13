<?php
include '../includes/header.php';
include '../includes/sidebar.php';
include '../db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $specialty = $_POST['specialty'];

    $query = "INSERT INTO doctors (name, specialty) VALUES ('$name', '$specialty')";
    if (mysqli_query($conn, $query)) {
        echo "New doctor added successfully.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>
<div class="content">
    <h1>Add Doctor</h1>
    <form action="../pages/doctor_add.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="specialty">Specialty:</label>
        <input type="text" id="specialty" name="specialty"><br>
        <input type="submit" value="Add Doctor">
    </form>
</div>

<?php include '../includes/footer.php'; ?>
