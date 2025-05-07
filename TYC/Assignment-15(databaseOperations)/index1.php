<?php include "db.php"; ?>

<h2>Insert User</h2>
<form method="post">
    Name: <input type="text" name="name" required>
    Email: <input type="email" name="email" required>
    <input type="submit" name="insert" value="Add">
</form>

<h2>Update User</h2>
<form method="post">
    ID: <input type="number" name="id" required>
    New Name: <input type="text" name="new_name" required>
    New Email: <input type="email" name="new_email" required>
    <input type="submit" name="update" value="Update">
</form>

<h2>Users List</h2>
<table border="1" cellpadding="5">
    <tr><th>ID</th><th>Name</th><th>Email</th></tr>

<?php
// INSERT
if (isset($_POST['insert'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    mysqli_query($conn, "INSERT INTO users (name, email) VALUES ('$name', '$email')");
    echo "User added successfully!<br><br>";
}

// UPDATE
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['new_name'];
    $email = $_POST['new_email'];
    mysqli_query($conn, "UPDATE users SET name='$name', email='$email' WHERE id=$id");
    echo "User updated successfully!<br><br>";
}

// DISPLAY
$result = mysqli_query($conn, "SELECT * FROM users");
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td></tr>";
}
?>
</table>
