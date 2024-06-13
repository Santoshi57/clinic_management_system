<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <div class="content">
    <h1>Book Appointment</h1>
    <form action="../pages/book_appointment.php" method="post">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
        <br>
        <label for="time">Time:</label>
        <input type="time" id="time" name="time" required>
        <br>
        <input type="submit" value="Book">
    </form>
    </div>
    <?php include '../includes/footer.php'; ?>
</body>
</html>
