<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>
        <br>
        <input type="submit" value="Update User">
    </form>
</body>
</html>
