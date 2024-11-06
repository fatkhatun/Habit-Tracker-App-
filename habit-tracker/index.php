<?php include 'db.php'; ?>
<h1>Daftar Kebiasaan</h1>
<a href="add_habit.php">Tambah Kebiasaan Baru</a>
<ul>
<?php
    $result = $conn->query("SELECT * FROM habits");
    while ($row = $result->fetch_assoc()) {
        echo "<li>{$row['habit_name']} - {$row['habit_description']} 
        <a href='edit_habit.php?id={$row['id']}'>Edit</a> 
        <a href='delete_habit.php?id={$row['id']}'>Delete</a> 
        <a href='mark_complete.php?id={$row['id']}'>Mark Complete</a></li>";
    }
?>
</ul>