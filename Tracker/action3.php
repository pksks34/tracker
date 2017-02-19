<?php
include("config.php");
$date=$_POST['date'];
$nm=$_POST['nm'];
$file=$_POST['file'];
    $bill=$_POST['bill'];
	$receipt=$_POST['receipt'];
	$mode=$_POST['mode'];
	$amount=$_POST['amount'];
	$tds=$_POST['tds'];
	$discount=$_POST['discount'];
	$receiptd=$_POST['receiptd'];
	$chequen=$_POST['chequen'];
	$bank=$_POST['bank'];
	$clearing=$_POST['clearing'];
	$remarks=$_POST['remarks'];
	$month=date('F');
	
$sql = "INSERT INTO receipt(date,nm,file,bill,receipt,mode,amount,tds,discount,receiptd,chequen,bank,clearing,remarks,month) VALUES('$date','$nm','$file','$bill','$receipt','$mode','$amount','$tds','$discount','$receiptd','$chequen','$bank','$clearing','$remarks','$month')";

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
<p align="center">Phone:040-32992403 Fax:</p>
<p align="center">E-mail:raviladiaca@gmail.com</p>
<p align="center">Web:raviladia.com</p>
<p>Receipt No.:<?php echo $_POST['receipt']; ?></p>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tracker";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
      $file=$_POST["file"];
      $sql = "SELECT nm,address FROM indexing WHERE file = '$file'";
	  $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
	echo "<p>Received From:".$row["nm"]."</p><p>Address:".$row["address"]."</p>";
	}
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
 
<p>Received From:</p>
<p>Address:</p>
<table border="1px" bordercolordark="#000000" style="border-collapse:collapse;" width="100%">
<tr>
<td>Bill No.</td>
<td>Bill Date</td>
<td>Bill Amount</td>
<td>Amount Received</td>
<td>TDS Amount</td>
<td>Discount</td>
<td width="20%">Remarks</td>
</tr>
<tr>
<td><?php echo $_POST['bill']; ?></td>
<td><?php echo $_POST['date']; ?></td>
<td><?php echo $_POST['amount']; ?></td>
<td><?php echo $_POST['amount']; ?></td>
<td><?php echo $_POST['tds']; ?></td>
<td><?php echo $_POST['discount']; ?></td>
<td width="20%"><?php echo $_POST['remarks']; ?></td>
</tr>
<tr>
<td>Total</td>
<td></td>
<td><?php echo $_POST['amount']; ?></td>
<td><?php echo $_POST['amount']; ?></td>
<td><?php echo $_POST['tds']; ?></td>
<td><?php echo $_POST['discount']; ?></td>
<td width="20%"><?php echo $_POST['remarks']; ?></td>
</tr>
</table>
<table width="100%">
<tr>
<td width="33%">Payment Mode:<?php echo $_POST['mode']; ?></td>
<td width="33%">Cheque No./D.D No.:<?php echo $_POST['chequen']; ?></td>
<td width="33%">Cheque Date:<?php echo $_POST['date']; ?></td>
</tr>
</table>
<p>DrawnOn:<?php echo $_POST['clearing']; ?></p>
<table width="100%">
<tr>
<td width="66%">We Listen,We Understand,We make it Possible</td>
<td width="33%"><p>Ravi Ladia & Co.</p><p>Ravi Ladia</p><p>Authorized Signature</p></td>
</tr>
</table>
<form>
    <p align="center"><input type=button name=print value="Save" onClick="window.print()"></p>
</form>