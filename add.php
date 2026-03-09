<?php
include "db.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];

    $sql = "INSERT INTO coffee(name,price,qty)
            VALUES('$name','$price','$qty')";

    $conn->query($sql);

    header("Location:index.php");
}
?>

<h2>Add Coffee</h2>

<form method="POST">

Name <br>
<input type="text" name="name"><br><br>

Price <br>
<input type="text" name="price"><br><br>

Qty <br>
<input type="text" name="qty"><br><br>

<button type="submit" name="submit">Save</button>

</form>
