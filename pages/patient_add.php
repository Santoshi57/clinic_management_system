<?php
include '../includes/header.php';
include '../includes/sidebar.php';
include '../db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];

    $query = "INSERT INTO patients (name, age, gender, address) VALUES ('$name', $age, '$gender', '$address')";
    if (mysqli_query($conn, $query)) {
        echo "New patient added successfully.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>

<div class="content">
    <h1>Add Patient</h1>
    <form action="patient_add.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age"><br>
        <label for="gender">Gender:</label>
        <select id="gender" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br>
        <label for="address">Address:</label>
        <textarea id="address" name="address"></textarea><br>
        <input type="submit" value="Add Patient">
    </form>
</div>

<?php include '../includes/footer.php'; ?>
