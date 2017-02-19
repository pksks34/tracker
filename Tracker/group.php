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
<div class="container">
  <h1 align="center">Ravi Ladia & Co.</h1>
  <div class="well" align="center" style="font-size:30px; color:yellow; background-color:blue; width:100%;">Repot According to group</div>
  
      
</div>

 <div class="container">
  <h2 align="center">Group:<?php echo $_POST['gp'];?></h2>
  <table class="table">
    <thead>
      <tr>
  <th>Name of the Client</th>
  <th>File No.</th>
  <th>PAN</th>
  <th>Date Of Birth</th>
 <th>Status</th>
 <th>Tax Audit</th>
 <th>Advance Tax</th>
 <th>TDS</th>
 <th>ACES</th>
 <th>Phone Number</th>
 <th>E-mail Address</th>
   </tr>
    </thead>
	<tbody>
 <?php
include("config.php");
$gr=$_POST["gp"];
$sql = "SELECT * from indexing where gp='$gr'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr class='info'><td>".$row["nm"]."</td><td>".$row["file"]."</td><td>".$row["pan"]."</td><td>".$row["dob"]."</td><td>".$row["stat"]."</td><td>".$row["audit"]."</td><td>".$row["tds"]."</td><td>".$row["nm"]."</td><td>".$row["gsta"]."</td><td>".$row["mobile"]."</td><td>".$row["email"]."</td></tr>";
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
