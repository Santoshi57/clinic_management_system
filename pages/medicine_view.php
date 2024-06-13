<?php
include '../includes/header.php';
include '../includes/sidebar.php';
include '../db_connect.php';

$query = "SELECT * FROM medicines";
$result = mysqli_query($conn, $query);
?>

<div class="content">
    <h1>View Medicines</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
            <th>Quantity</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['type']}</td><td>{$row['quantity']}</td></tr>";
        }
        ?>
    </table>
</div>

<?php include '../includes/footer.php'; ?>
