<?php
include("config.php");
$file=$_POST['file'];
$nm=$_POST['nm'];
$pan=$_POST['pan'];
    $assignment=$_POST['assignment'];
	$assignmentd=$_POST['assignmentd'];
	$deadline=$_POST['deadline'];
	$bilable=$_POST['bilable'];
	$assignedt=$_POST['assignedt'];
	$status=$_POST['status1'];
	$pending=$_POST['pending'];
	$remarks=$_POST['remarks'];
	$biling=$_POST['biling'];
	$month=date('F');
	
   

$sql = "INSERT INTO track(file,nm,pan,assignment,assignmentd,deadline,bilable,assignedto,status,pending,remarks,biling,month) VALUES('$file','$nm','$pan','$assignment','$assignmentd','$deadline','$bilable','$assignedt','$status','$pending','$remarks','$biling','$month')";

if (mysqli_query($conn, $sql)) {
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<form method="post" action="pdf.php">
<p align="center">File No.:<?php echo $_POST['file']; ?></p>
<p align="center">Name.:<?php echo $_POST['nm']; ?></p>
<p align="center">PAN.:<?php echo $_POST['pan']; ?></p>
<p align="center">Assignment No.:<?php echo $_POST['assignment']; ?></p>
<p align="center">Assignment detail.:<?php echo $_POST['assignmentd']; ?></p>
<p align="center">DeadLine:<?php echo $_POST['deadline']; ?></p>
<p align="center">Billable:<?php echo $_POST['bilable']; ?></p>
<p align="center">Assigned By:<?php echo $_POST['assignedt']; ?></p>
<p align="center">Status:<?php echo $_POST['status1']; ?></p>
<p align="center">Pending From:<?php echo $_POST['pending']; ?></p>
<p align="center">Remarks:<?php echo $_POST['remarks']; ?></p>
<p align="center">Billing:<?php echo $_POST['biling']; ?></p>
<input type="submit" name="submit" />
</form>
<form>
    <input type=button name=print value="Save" onClick="window.print()">
</form>