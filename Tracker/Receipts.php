<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ravi Ladia & Co.|Receipts</title>
<style>


/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 20%;
}

</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 <script>
  $(function() {
    $( "#file" ).autocomplete({
      source: 'search1.php'
    });
  });
  </script>
  <script>
  $(function() {
    $( "#nm" ).autocomplete({
      source: 'search2.php'
    });
  });
  </script>
  <script>
  $(function() {
    $( "#bill" ).autocomplete({
      source: 'search5.php'
    });
  });
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript">
 $(document).ready(function(){
    $('#myOptions').change(function(){
       $(this).val() == "Cheque" ? $('#myTextBox').show() : $('#myTextBox').hide();
    });
});
  </script>
  <script type="text/javascript">
 $(document).ready(function(){
    $('#myOptions').change(function(){
       $(this).val() == "Others" ? $('#myTextBox1').show() : $('#myTextBox1').hide();
    });
});
  </script>
  <style type="text/css">
.hiddenField{
  display: none;
}
  </style>
  <style>
	input[type=text] {
    padding: 0;
    height: 30px;
    position: relative;
    left: 0;
    outline: none;
    border: 1px solid #cdcdcd;
    border-color: rgba(0,0,0,.15);
    background-color: white;
    font-size: 16px;
}
textarea {
    width: 30%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color:white;
    font-size: 16px;
    resize: none;
}
.advancedSearchTextbox {
    width: 526px;
    margin-right: -4px;
}
p  {
    color: black;
    font-family: courier;
    font-size: 160%;
}
select {
  font-weight: bold;
}
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
  <div class="well" align="center" style="font-size:30px; color:yellow; background-color:blue; width:100%;">Billing</div>
  
      
</div>
<form action="action3.php" method="post">
<table width="100%">
<tr><td width="50%">
  <p align="center">Date<input type="text" name="date" value="<?php echo date('m/d/y');?>"/></p></td>
  <td width="50%"><p align="center">Party Name<input type="text" name="nm" id="nm" value="" placeholder="enter Party number" required/></p></td></tr>
  <tr><td width="50%"><p align="center">File No.*<input type="text" name="file" id="file" value="" placeholder="enter file number" required /></p></td>
  <td width="50%"><p align="center">Bill No.*<input type="text" name="bill" id="bill" value="" placeholder="enter Bill number" required /></p></td></tr>
  <tr><td width="50%">
   <?php
include("config.php");

$sql = "SELECT t.receipt from receipt t ORDER BY t.receipt DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
         $id=++$row["receipt"];
		 echo "<p align='center'>Receipt No.<input type='text' value='$id' name='receipt'/></p>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</td>
  <td width="50%"><p align="center">Mode of payment<select name="mode" id="myOptions">
  <option value="">select</option>
  <option value="Cash">Cash</option>
  <option value="Cheque">Cheque</option>
  <option value="transfer">Transfer</option>
  <option value="Others">Others</option>
  </select>
  </p></td></tr>
 <tr><td width="50%"> <p align="center">Amount<input type="text" name="amount" id="amount" value="" placeholder="enter amount" required/></p></td>
  <td width="50%"><p align="center">TDS<input type="text" name="tds" id="tds" value="" placeholder="enter TDS" required/></p></td></tr>
  <tr><td width="50%"><p align="center">Discount<input type="text" name="discount" id="discount" value="" placeholder="enter discount" required/></p></td>
  <td width="50%"><p align="center">Receipt Date<input type="date" name="receiptd" value="" required/></p></td></tr></table>
  <div class="hiddenField" id="myTextBox"><p align="center">Cheque Number<input type="text" name="chequen" value="" placeholder="enter service tax"/></p>
   <p align="center">Bank<input type="text" name="bank" value="" placeholder="enter bank name"/></p>
 <p align="center">Clearing Date<input type="date" name="clearing" value=""/></p></div>
<div class="hiddenField" id="myTextBox1"><p align="center">Remarks<input type="remarks" name="remarks" id="remarks" value="" placeholder="enter remarks"/></p></div>
   <p align="center"><input type="submit" name="submit" value="complete the Task" /></p>
  </form>
  <p align="center"><a href="search_receipt_groupwise.php">Click here for report generation</a></p>
</body>
</html>
