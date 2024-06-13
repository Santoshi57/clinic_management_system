<?php
include '../includes/header.php';
include '../includes/sidebar.php';
include '../db_connect.php';

// Fetch all appointments from the database
$query = "SELECT appointments.appointment_id, patients.first_name AS patient_first_name, patients.last_name AS patient_last_name, doctors.first_name AS doctor_first_name, doctors.last_name AS doctor_last_name, appointments.appointment_date, appointments.appointment_time, appointments.status, appointments.notes 
          FROM appointments 
          JOIN patients ON appointments.patient_id = patients.patient_id 
          JOIN doctors ON appointments.doctor_id = doctors.doctor_id";
$result = mysqli_query($conn, $query);
?>

<div class="content">
    <h1>View Appointments</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Patient Name</th>
            <th>Doctor Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
            <th>Notes</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['appointment_id'] . "</td>";
            echo "<td>" . $row['patient_first_name'] . " " . $row['patient_last_name'] . "</td>";
            echo "<td>" . $row['doctor_first_name'] . " " . $row['doctor_last_name'] . "</td>";
            echo "<td>" . $row['appointment_date'] . "</td>";
            echo "<td>" . $row['appointment_time'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "<td>" . $row['notes'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

<?php
mysqli_close($conn);
include '../includes/footer.php';
?>
