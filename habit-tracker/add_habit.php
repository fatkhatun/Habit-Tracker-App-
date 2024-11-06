<?php include 'db.php'; ?>
<form action="" method="POST">
    <input type="text" name="habit_name" placeholder="Nama Kebiasaan" required>
    <textarea name="habit_description" placeholder="Deskripsi Kebiasaan" required></textarea>
    <button type="submit" name="add_habit">Tambah Kebiasaan</button>
</form>

<?php
if (isset($_POST['add_habit'])) {
    $name = $_POST['habit_name'];
    $description = $_POST['habit_description'];
    $date = date('Y-m-d');
    $sql = "INSERT INTO habits (habit_name, habit_description, date_created, status) VALUES ('$name', '$description', '$date', 0)";
    $conn->query($sql);
    header("Location: index.php");
}
?>