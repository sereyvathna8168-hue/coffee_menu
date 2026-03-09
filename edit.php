<?php
include "db.php";

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM coffee WHERE id=$id");
$row = $result->fetch_assoc();

if(isset($_POST['update'])){

$name = $_POST['name'];
$price = $_POST['price'];
$qty = $_POST['qty'];

$conn->query("UPDATE coffee 
SET name='$name', price='$price', qty='$qty'
WHERE id=$id");

header("Location:index.php");

}
?>

<h2>Edit Coffee</h2>

<form method="POST">

Name <br>
<input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>

Price <br>
<input type="text" name="price" value="<?php echo $row['price']; ?>"><br><br>

Qty <br>
<input type="text" name="qty" value="<?php echo $row['qty']; ?>"><br><br>

<button type="submit" name="update">Update</button>

</form>
