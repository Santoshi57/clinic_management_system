<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Record</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <div class="content">
    <h1>Add Record</h1>
    <form action="../pages/add_record.php" method="post">
        <label for="record">Record:</label>
        <textarea id="record" name="record" required></textarea>
        <br>
        <input type="submit" value="Add">
    </form>
    </div>
    <?php include '../includes/footer.php'; ?>
</body>
</html>
