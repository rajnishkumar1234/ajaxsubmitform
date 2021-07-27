<?php
if(isset($_REQUEST['btn']))
{
 $fname=$_FILES['myfile']['name'];
 $type=$_FILES['myfile']['type'];
$size=$_FILES['myfile']['size'];


$x="upload/";
$path=$x.basename($fname);
move_uploaded_file($_FILES['myfile']['tmp_name'],$path);

 

}
?>
  