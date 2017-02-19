<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ravi Ladia & Co.</title>
</head>

<body>
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
<p>Addresss:</p>
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
<td width="20%"><?php echo $_POST['amount']; ?></td>
</tr>
<tr>
<td width="60%"></td>
<td width="20%">Grand Total</td>
<td width="20%"><?php echo $_POST['amount']; ?></td>
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
</body>
</html>
