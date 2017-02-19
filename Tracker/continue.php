<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Assignment Detail</title>
<style>
input[type=submit] {
    padding:5px 15px; 
    background:blue; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<hgroup>
  
 
</hgroup>
<form action="continue1.php" method="post">
  <input type="hidden" name="file" value="<?php echo $_POST['file']; ?>" />
  <input type="hidden" name="nm" value="<?php echo $_POST['nm']; ?>" />
  <input type="hidden" name="pan" value="<?php echo $_POST['pan']; ?>" />
  <input type="hidden" name="assignment" value="<?php echo $_POST['assignment']; ?>" />
  <input type="hidden" name="assignmentd" value="<?php echo $_POST['assignmentd']; ?>" />
  <input type="hidden" name="deadline" value="<?php echo $_POST['deadline']; ?>" />
  <input type="hidden" name="bilable" value="<?php echo $_POST['bilable']; ?>" />
  <input type="hidden" name="assignedt" value="<?php echo $_POST['assignedt']; ?>" />
  
  
  <p align="center"><input type="submit" name="submit" value="complete the Task" /></p>
  
  
  </form>
 <div class="container">
  <h2 align="center">Assignment Details</h2>
  <table class="table">
    <thead>
      <tr>
  <th>ASSIGNMENT no.</th>
  <th>ASSIGNMENT DETAIL</th>
  <th>DEADLINE</th>
  <th>ASSIGNED TO</th>
  <th>STATUS</th>
  <th>PENDING</th>
   </tr>
    </thead>
	<tbody>
 <?php
include("config.php");

$sql = "SELECT * from track";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr class='info'><td>".$row["assignment"]."</td><td>".$row["assignmentd"]."</td><td>".$row["deadline"]."</td><td>".$row["assignedto"]."</td><td>".$row["status"]."</td><td>".$row["pending"]."</td></tr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</tbody>
</table>
</div>
<form>
    <center><input type=button name=print value="Save" onClick="window.print()"></center>
</form>
</center>
</body>
</html>
