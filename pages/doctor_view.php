<?php
include '../includes/header.php';
include '../includes/sidebar.php';
include '../db_connect.php';

$query = "SELECT * FROM doctors";
$result = mysqli_query($conn, $query);
?>

<div class="content">
    <h1>View Doctors</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Specialty</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['specialty']}</td></tr>";
        }
        ?>
    </table>
</div>

<?php include '../includes/footer.php'; ?>
