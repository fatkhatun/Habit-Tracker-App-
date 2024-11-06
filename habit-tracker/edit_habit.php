<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM habits WHERE id=$id");
$habit = $result->fetch_assoc();
?>

<form action="" method="POST">
    <input type="text" name="habit_name" value="<?php echo $habit['habit_name']; ?>" required>
    <textarea name="habit_description"><?php echo $habit['habit_description']; ?></textarea>
    <button type="submit" name="update_habit">Update</button>
</form>

<?php
if (isset($_POST['update_habit'])) {
    $name = $_POST['habit_name'];
    $description = $_POST['habit_description'];
    $conn->query("UPDATE habits SET habit_name='$name', habit_description='$description' WHERE id=$id");
    header("Location: index.php");
}
?>