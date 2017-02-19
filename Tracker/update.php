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
   
if(strlen($aadhaar)==12&&is_numeric($aadhaar)&&strlen($mobile)==10&&is_numeric($mobile)){
$sql = "UPDATE indexing SET gp='$gp',nm='$name',father='$father',address='$address',aadhaar='$aadhaar',pan='$pan',passport='$passport',gst='$gst',dob='$dob',stat='$stat',audit='$audit',advance='$advance',tds='$tds',gsta='$gsta',contact1='$contact1',mobile='$mobile',email='$email',contact2='$contact2',mobile2='$mobile2',email2='$email2' WHERE file='$file'";

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