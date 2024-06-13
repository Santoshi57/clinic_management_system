<?php
include '../includes/header.php';
include '../includes/sidebar.php';
include '../db_connect.php';

// Fetch all beds from the database
$query = "SELECT * FROM beds";
$result = mysqli_query($conn, $query);
?>

<div class="content">
    <h1>View Beds</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Ward</th>
            <th>Status</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['bed_id'] . "</td>";
            echo "<td>" . $row['ward'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

<?php
mysqli_close($conn);
include '../includes/footer.php';
?>
