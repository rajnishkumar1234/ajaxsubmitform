<?php
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
$path = 'upload/'; // upload directory
if(!empty($_POST['name']) || !empty($_POST['email']) || $_FILES['image'])
{
$img = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
// get uploaded file's extension
$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
// can upload same image using rand function
$final_image = rand(1000,1000000).$img;
// check's valid format
if(in_array($ext, $valid_extensions)) 
{ 
$path = $path.strtolower($final_image); 
if(move_uploaded_file($tmp,$path)) 
{
//echo "<img src='$path' />";
$name = $_POST['name'];
$email = $_POST['email'];
$contact=$_POST['contact'];
$gender=$_POST['gender'];
$state=$_POST['state'];
$city=$_POST['city'];

}
} 
else 
{
echo 'invalid';
}
}
?> 
<h1 align="center">Submited Datas Are:-</h1>
<table border="5px">
	<tr>
		<td align="right"><?php echo "<img src='$path' />";?>
</td>
</tr>
<tr>
	<td>Full Name:-</td>
	<td><?php echo $name ; ?></td>
</tr>
<tr>
	<td>Email Id:-</td>
	<td><?php echo $email; ?></td>
</tr>
<tr>
	<td>Contact Number:-</td>
	<td><?php echo $contact;?></td>
</tr>
<tr>
	<td>Gender:-</td>
	<td><?php echo $gender; ?></td>
</tr>
<tr>
	<td>Qualification:-</td>
	<td><?php if(isset($_POST["quali"])){ echo implode(", ", $_POST["quali"]); } ?></td>
</tr>
<tr>
	<td>State:-</td>
	<td><?php echo $state;?></td>
</tr>
<tr>
	<td>City:-</td>
	<td><?php echo $city;?></td>
</tr>

</table>