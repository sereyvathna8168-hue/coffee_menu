<?php
include "db.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Coffee Shop</title>
</head>

<body>

<h2>MONA Coffee Shop</h2>

<a href="add.php">Add items</a>

<table border="1" cellpadding="10">
<tr>
<th>ID</th>
<th>Name</th>
<th>Price</th>
<th>Qty</th>
<th>Action</th>
</tr>

<?php
$sql = "SELECT * FROM coffee";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['price']; ?></td>
<td><?php echo $row['qty']; ?></td>
<td>
<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
</td>
</tr>

<?php } ?>

</table>

</body>
</html>
