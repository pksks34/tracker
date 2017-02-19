<?php
include("config.php");
$file=$_POST['file'];
$gp=$_POST['gp'];
$name=$_POST['nm'];
    $father=$_POST['father'];
	$address=$_POST['address'];
	$aadhaar=$_POST['aadhaar'];
	$pan=$_POST['pan'];
	$passport=$_POST['passport'];
	$gst=$_POST['gst'];
	$dob=$_POST['dob'];
	$stat=$_POST['status'];
	$audit=$_POST['audit'];
	$advance=$_POST['advance'];
	$tds=$_POST['tds'];
	$gsta=$_POST['gsta'];
	$contact1=$_POST['contact'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$contact2=$_POST['contact2'];
	$mobile2=$_POST['mobile2'];
	$email2=$_POST['email2'];
	$month=date('F');
   
if(strlen($aadhaar)==12&&is_numeric($aadhaar)&&strlen($mobile)==10&&is_numeric($mobile)){
$sql = "INSERT INTO indexing(file,gp,nm,father,address,aadhaar,pan,passport,gst,dob,stat,audit,advance,tds,gsta,contact1,mobile,email,contact2,mobile2,email2,month) VALUES('$file','$gp','$name','$father','$address','$aadhaar','$pan','$passport','$gst','$dob','$stat','$audit','$advance','$tds','$gsta','$contact1','$mobile','$email','$contact2','$mobile2','$email2','$month')";

if (mysqli_query($conn, $sql)) {
    echo "Successful<BR>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);}
else{
echo "aadhaar card number is not valid";
}
?>