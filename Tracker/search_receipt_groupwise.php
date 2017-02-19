<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Ravi Ladia & Co.|RECEIPTS</title>
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
	<script>
function ValidatePAN() { 
var panPat = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
var x=document.form.pan.value;
if(panPat.test(x) == false){
document.getElementById("ac").innerHTML="not valid pan card number";
return false;
} 
 else{return true;
 }
 }         
</script>

<!--
<script>
function add(){
window.location="action.php";
}
function edit(){
window.location="update.php";
}
</script>-->
    
  </head>

  <body>
  <div class="container">
  <h1 align="center">Ravi Ladia & Co.</h1>
  <div class="well" align="center" style="font-size:30px; color:yellow; background-color:blue; width:100%;">Indexing</div>
  
      
</div>

  

<table width="100%">
<tr>
<td width="50%">   
<form action="client_receipt.php" method="post" name="form" id="form" onSubmit="return ValidatePAN()">
<p align="center">Enter to see Groupwise:<input type="text" name="client" value="" placeholder="enter the client name" required/></p>
<p align="center"><input type="submit" name="submit" value="Submit"/></p>
</form>
</td>
<td width="50%">
<form action="receipt_month.php" method="post" name="form" id="form" onSubmit="return ValidatePAN()">
<p align="center">Select Month:<select name="month" required>
<option value="">Select</option>
<option value="January">January</option>
<option value="February">February</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select></p>
<p align="center"><input type="submit" name="submit" value="Submit"/></p>
</form>
</td></tr></table>
</div>
</div>
    
  </body>
</html>
