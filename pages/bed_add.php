<?php
include '../includes/header.php';
include '../includes/sidebar.php';
include '../db_connect.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ward = $_POST['ward'];
    $status = $_POST['status'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO beds (ward, status) VALUES (?, ?)");
    $stmt->bind_param("ss", $ward, $status);

    if ($stmt->execute()) {
        echo "<p class='success'>New bed added successfully</p>";
    } else {
        echo "<p class='error'>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
    $conn->close();
}
?>

<div class="content">
    <h1>Add New Bed</h1>
    <form action="bed_add.php" method="post">
        <label for="ward">Ward:</label>
        <input type="text" id="ward" name="ward" required><br><br>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="Available">Available</option>
            <option value="Occupied">Occupied</option>
            <option value="Maintenance">Maintenance</option>
        </select><br><br>

        <input type="submit" value="Add Bed">
    </form>
</div>

<?php include '../includes/footer.php'; ?>
