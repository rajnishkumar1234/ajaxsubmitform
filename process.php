 <?php include "connection.php" ;?>
<?php
    if(isset($_POST['id'])){
    $id=$_POST['id'];
 	$q=mysqli_query($con,"select * from districts where state_id='$id'");
 	while($f=mysqli_fetch_assoc($q))
 	{
		echo "<option >".$f['name']."</option>";

 	}
}
 ?>