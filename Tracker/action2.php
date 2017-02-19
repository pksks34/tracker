<?php
include("config.php");
$date=$_POST['date'];
$bill=$_POST['bill'];
$client=$_POST['client'];
    $clientname=$_POST['clientname'];
	$nassignment=$_POST['nassignment'];
	$assignment=$_POST['assignment'];
	$detail=$_POST['detail'];
	$service=$_POST['service'];
	if (!empty($_POST['amount1'])){
$sa=$_POST['amount1'];
}
	elseif (!empty($_POST['amount2'])&&!empty($_POST['amount1'])){
$sa=$_POST['amount1']+$_POST['amount2'];
}
elseif (!empty($_POST['amount2'])&&!empty($_POST['amount1'])&&!empty($_POST['amount3'])){
$sa=$_POST['amount1']+$_POST['amount2']+$_POST['amount3'];
}
elseif (!empty($_POST['amount2'])&&!empty($_POST['amount1'])&&!empty($_POST['amount3'])&&!empty($_POST['amount4'])){
$sa=$_POST['amount1']+$_POST['amount2']+$_POST['amount3']+$_POST['amount4'];
}
elseif (!empty($_POST['amount2'])&&!empty($_POST['amount1'])&&!empty($_POST['amount3'])&&!empty($_POST['amount4'])&&!empty($_POST['amount5'])){
$sa=$_POST['amount1']+$_POST['amount2']+$_POST['amount3']+$_POST['amount4']+$_POST['amount5'];
}
elseif (!empty($_POST['amount2'])&&!empty($_POST['amount1'])&&!empty($_POST['amount3'])&&!empty($_POST['amount4'])&&!empty($_POST['amount5'])&&!empty($_POST['amount6'])){
$sa=$_POST['amount1']+$_POST['amount2']+$_POST['amount3']+$_POST['amount4']+$_POST['amount5']+$_POST['amount6'];
}
elseif (!empty($_POST['amount2'])&&!empty($_POST['amount1'])&&!empty($_POST['amount3'])&&!empty($_POST['amount4'])&&!empty($_POST['amount5'])&&!empty($_POST['amount6'])&&!empty($_POST['amount7'])){
$sa=$_POST['amount1']+$_POST['amount2']+$_POST['amount3']+$_POST['amount4']+$_POST['amount5']+$_POST['amount6']+$_POST['amount7'];
}
elseif (!empty($_POST['amount2'])&&!empty($_POST['amount1'])&&!empty($_POST['amount3'])&&!empty($_POST['amount4'])&&!empty($_POST['amount5'])&&!empty($_POST['amount6'])&&!empty($_POST['amount7'])&&!empty($_POST['amount8'])){
$sa=$_POST['amount1']+$_POST['amount2']+$_POST['amount3']+$_POST['amount4']+$_POST['amount5']+$_POST['amount6']+$_POST['amount7']+$_POST['amount8'];
}
elseif (!empty($_POST['amount2'])&&!empty($_POST['amount1'])&&!empty($_POST['amount3'])&&!empty($_POST['amount4'])&&!empty($_POST['amount5'])&&!empty($_POST['amount6'])&&!empty($_POST['amount7'])&&!empty($_POST['amount8'])&&!empty($_POST['amount9'])){
$sa=$_POST['amount1']+$_POST['amount2']+$_POST['amount3']+$_POST['amount4']+$_POST['amount5']+$_POST['amount6']+$_POST['amount7']+$_POST['amount8']+$_POST['amount9'];
}
elseif (!empty($_POST['amount2'])&&!empty($_POST['amount1'])&&!empty($_POST['amount3'])&&!empty($_POST['amount4'])&&!empty($_POST['amount5'])&&!empty($_POST['amount6'])&&!empty($_POST['amount7'])&&!empty($_POST['amount8'])&&!empty($_POST['amount9'])&&!empty($_POST['amount10'])){
$sa=$_POST['amount1']+$_POST['amount2']+$_POST['amount3']+$_POST['amount4']+$_POST['amount5']+$_POST['amount6']+$_POST['amount7']+$_POST['amount8']+$_POST['amount9']+$_POST['amount10'];
}
$month=date('F');
$sql = "INSERT INTO billing(date,bill,client,clientname,nassignment,assignment,detail,amount,service) VALUES('$date','$bill','$client','$clientname','$nassignment','$assignment','$detail','$sa','$service')";

if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<h2 align="center" style="text-decoration:underline;">Receipt<h1>
<h1 align="center">Ravi Ladia & Co.</h1>
<h3 align="center">Chartered Accounts</h3>
<h3 align="center">We Provide Excellence</h3>
<p align="center">213,Paras Chambers,HimayatNagar,3-5-890,Opp. Hydrabad Stock Exchange,Hydrabad-500029</p>
<p align="center">Phone:040-32992403</p>
<p align="center">Mobile:9985722713</p>
<p align="center">E-mail:raviladiaca@gmail.com</p>
<p align="center">Web:raviladia.com</p>
<table width="100%">
<tr>
<td width="60%">
Firm Name:<?php echo $_POST['clientname']; ?>
</td>
<td width="40%">Date:<?php echo $_POST['date']; ?></td>
</tr>
<tr>
<td width="60%">
Name:<?php echo $_POST['clientname']; ?>
</td>
<td width="40%">Bill No.:<?php echo $_POST['bill']; ?></td>
</tr>
</table>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tracker";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
      $file=$_POST["client"];
      $sql = "SELECT address FROM indexing WHERE file = '$file'";
	  $result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
	echo "<p>Address:".$row["address"]."</p>";
	}
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
<table border="1px" bordercolordark="#000000" style="border-collapse:collapse;" width="100%">
<tr>
<td width="20%">Serial No.</td>
<td width="40%">Particulars</td>
<td width="20%">Ass. Year</td>
<td width="20%">Amount</td>
</tr>
<tr>
<td width="20%">Serial No.</td>
<td width="40%"><?php echo $_POST['detail']; ?></td>
<td width="20%"><?php echo $_POST['date']; ?></td>
<td width="20%"></td>
</tr>
<tr>
<td width="20%"></td>
<td width="40%"></td>
<td width="20%">Grand Total</td>
<td width="20%"><?php 
if (!empty($_POST['amount1'])){
echo $_POST['amount1'];
}
	elseif (!empty($_POST['amount2'])&&!empty($_POST['amount1'])){
echo $_POST['amount1']+$_POST['amount2'];
}
elseif (!empty($_POST['amount2'])&&!empty($_POST['amount1'])&&!empty($_POST['amount3'])){
echo $_POST['amount1']+$_POST['amount2']+$_POST['amount3'];
}
elseif (!empty($_POST['amount2'])&&!empty($_POST['amount1'])&&!empty($_POST['amount3'])&&!empty($_POST['amount4'])){
echo $_POST['amount1']+$_POST['amount2']+$_POST['amount3']+$_POST['amount4'];
}
elseif (!empty($_POST['amount2'])&&!empty($_POST['amount1'])&&!empty($_POST['amount3'])&&!empty($_POST['amount4'])&&!empty($_POST['amount5'])){
echo $_POST['amount1']+$_POST['amount2']+$_POST['amount3']+$_POST['amount4']+$_POST['amount5'];
}
elseif (!empty($_POST['amount2'])&&!empty($_POST['amount1'])&&!empty($_POST['amount3'])&&!empty($_POST['amount4'])&&!empty($_POST['amount5'])&&!empty($_POST['amount6'])){
echo $_POST['amount1']+$_POST['amount2']+$_POST['amount3']+$_POST['amount4']+$_POST['amount5']+$_POST['amount6'];
}
elseif (!empty($_POST['amount2'])&&!empty($_POST['amount1'])&&!empty($_POST['amount3'])&&!empty($_POST['amount4'])&&!empty($_POST['amount5'])&&!empty($_POST['amount6'])&&!empty($_POST['amount7'])){
echo $_POST['amount1']+$_POST['amount2']+$_POST['amount3']+$_POST['amount4']+$_POST['amount5']+$_POST['amount6']+$_POST['amount7'];
}
elseif (!empty($_POST['amount2'])&&!empty($_POST['amount1'])&&!empty($_POST['amount3'])&&!empty($_POST['amount4'])&&!empty($_POST['amount5'])&&!empty($_POST['amount6'])&&!empty($_POST['amount7'])&&!empty($_POST['amount8'])){
echo $_POST['amount1']+$_POST['amount2']+$_POST['amount3']+$_POST['amount4']+$_POST['amount5']+$_POST['amount6']+$_POST['amount7']+$_POST['amount8'];
}
elseif (!empty($_POST['amount2'])&&!empty($_POST['amount1'])&&!empty($_POST['amount3'])&&!empty($_POST['amount4'])&&!empty($_POST['amount5'])&&!empty($_POST['amount6'])&&!empty($_POST['amount7'])&&!empty($_POST['amount8'])&&!empty($_POST['amount9'])){
echo $_POST['amount1']+$_POST['amount2']+$_POST['amount3']+$_POST['amount4']+$_POST['amount5']+$_POST['amount6']+$_POST['amount7']+$_POST['amount8']+$_POST['amount9'];
}
elseif (!empty($_POST['amount2'])&&!empty($_POST['amount1'])&&!empty($_POST['amount3'])&&!empty($_POST['amount4'])&&!empty($_POST['amount5'])&&!empty($_POST['amount6'])&&!empty($_POST['amount7'])&&!empty($_POST['amount8'])&&!empty($_POST['amount9'])&&!empty($_POST['amount10'])){
echo $_POST['amount1']+$_POST['amount2']+$_POST['amount3']+$_POST['amount4']+$_POST['amount5']+$_POST['amount6']+$_POST['amount7']+$_POST['amount8']+$_POST['amount9']+$_POST['amount10'];
}

 ?>
</td>
</tr>
</table>
<table width="100%">
<tr>
<td width="66%">We Listen,We Understand,We make it Possible</td>
<td width="33%"><p>Ravi Ladia & Co.</p><p>Ravi Ladia</p><p>Authorized Signature</p></td>
</tr>
</table>
<p>Kindly credit the amount,to the below mentioned account</p>
<p>Ravi Ladi & Co</p>
<p>HDFC Bank</p>
<p>Ramchandrapuram Branch</p>
<form>
    <p align="center"><input type=button name=print value="Save" onClick="window.print()"></p>
</form>