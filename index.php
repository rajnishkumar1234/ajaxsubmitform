<?php include "connection.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery AJAX Submit Form</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="fetch.js"></script> 
<script src="data.js">
</script>
</head>
<body>
	<h1>Ajax Based Submit Form</h1>
     <form id="form" action="ajax.php" enctype="multipart/form-data" method="post">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="name"><b>Full Name:-</b></label>
      <input type="text" placeholder="Enter full name" name="name" required>

      <label for="email"><b>Email Id:-</b></label>
      <input type="email" placeholder="Enter Valid email" name="email" required>

      <label for="Contact"><b>Contact Number:-</b></label>
      <input type="text" placeholder="Mobile Number" name="contact" required>
      <label for="gender"><b>Gender:</b></label>
       <select name="gender">
        <option >Male</option>
        <option >Female</option>
 
        </select>
      <br>
           <label for="qualification"><b>Qualification:-</b></label>
             <input type="checkbox" value="BA" name="quali[]"> B.A 
            <input type="checkbox" value="BSC" name="quali[]"> BSC
            <input type="checkbox" value="B.Tech" name="quali[]">B.Tech
            <input type="checkbox" value="MSC" name="quali[]">MSC 
            <br>
           
             <br>
         		<label for="state">Select State:</label>
         		<select name="state" class="form-control" id ="state" >
         			<option>Select State</option>
         			<?php 
         			$q=mysqli_query($con,"select * from states order by id");
         			while($r=mysqli_fetch_assoc($q))
         			 {
                  ?>
         			<option value="<?php echo $r['id']; ?> "><?php echo $r['name']?></option>";
               <?php
         		     }
         			?>
         		</select>
         		<label for="city">Select City:</label>
         		<select name="city" class="form-control" id ="city">
         			<option value="">Select City</option>
         		</select>
         		<br>
             <input id="uploadImage" type="file" accept="image/*" name="image" />
             <br>
<input class="btn btn-success" type="submit" value="Upload">
                </form>

</div>
    </form>
    <div id="preview"></div>
</body>
</html>
