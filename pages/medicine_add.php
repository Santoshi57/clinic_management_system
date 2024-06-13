<?php
include '../includes/header.php';
include '../includes/sidebar.php';
include '../db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $quantity = $_POST['quantity'];

    $query = "INSERT INTO medicines (name, type, quantity) VALUES ('$name', '$type', $quantity)";
    if (mysqli_query($conn, $query)) {
        echo "New medicine added successfully.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>

<div class="content">
    <h1>Add Medicine</h1>
    <form action="medicine_add.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="type">Type:</label>
        <input type="text" id="type" name="type"><br>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity"><br>
        <input type="submit" value="Add Medicine">
    </form>
</div>

<?php include '../includes/footer.php'; ?>
