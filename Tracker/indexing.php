<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Ravi Ladia & Co.|INDEXING</title>
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

  

   
<form action="action.php" method="post" name="form" id="form" onSubmit="return ValidatePAN()">
<table width="100%">
<tr>
<td width="50%">
  <?php
include("config.php");

$sql = "SELECT t.file from indexing t ORDER BY t.file DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
         $id=++$row["file"];
		 echo "<p align='center'>File No.<input type='text' value='$id' name='file'/></p>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</td>
   <td width="50%"><p align="center">Group<input type="text" name="gp" placeholder="enter group" class="advancedSearchTextBox" required></p></td></tr>
   <tr>
    <td width="50%"><p align="center">NAME<input type="text" name="nm" placeholder="enter your name" required></p></td>
   
    <td width="50%"><p align="center">Father's Name<input type="text" name="father" placeholder="enter your fathers name" required></p></td></tr>
   
     <tr><td width="50%"><p align="center">Address<textarea name="address" placeholder="address" required></textarea></p></td>
   <td width="50%"><p align="center">Aadhaar<input type="text" name="aadhaar" maxlength="12" placeholder="enter your aadhar number" required><span id="ad" style="color:red;"></span></p></td></tr>
   <tr><td width="50%"> <p align="center">PAN<input type="text" name="pan" maxlength="10" placeholder="enter pan card number" required><span id="ac" style="color:red;"></span></p></td>
    <td width="50%"><p align="center">Passport<input type="text" name="passport" placeholder="enter passport number" required></p></td></tr>
    <tr><td width="50%"><p align="center">GST<input type="text" name="gst" value="" placeholder="enter gst number" required></p></td>
    <td width="50%"><p align="center">Date of Birth<input type="date" name="dob" required></p></td></tr>
  <tr><td width="50%"><p align="center">Status<select name="status" required>
  <option value="">Select</option>
    <option value="Individual">Individual</option>
    <option value="Partnership Firm">Partnership Firm</option>
    <option value="Trust">Trust</option>
    <option value="AOP">AOP</option>
	<option value="JV">JV</option>
	<option value="Pvt Ltd">Pvt Ltd</option>
	<option value="Public Ltd">Public Ltd</option>
	<option value="Listed">Listed</option>
	<option value="LLP">LLP</option>
	<option value="HUF">HUF</option>
  </select></p></td>
 <td width="50%"> <p align="center">Audit<select name="audit">
  <option value="">Select</option>
    <option value="Yes">Yes</option>
    <option value="No">No</option>
    
  </select></p></td></tr>
  <tr><td width="50%"><p align="center">Advance-Tax<select name="advance">
  <option value="">Select</option>
    <option value="Yes">Yes</option>
    <option value="No">No</option>
    
  </select></p></td>
<td width="50%"> <p align="center"> TDS*<select name="tds">
  <option value="">Select</option>
    <option value="Yes">Yes</option>
    <option value="No">No</option>
    
  </select></p></td></tr>
  <tr><td width="50%"><p align="center">GST*<select name="gsta">
  <option value="">Select</option>
    <option value="Yes">Yes</option>
    <option value="No">No</option>
    
  </select></p></td>
    <td width="50%"><p align="center">Contact-person-1<input type="text" name="contact" placeholder="enter name of first person" required></p></td></tr>
    <tr><td width="50%"><p align="center">Mobile<input type="text" name="mobile" placeholder="enter 10 digit mobile number" required></p></td>
    <td width="50%"><p align="center">Email*<input type="email" name="email" placeholder="enter valid email of person 1"></p></td></tr>
    <tr><td width="50%"><p align="center">Contact-person-2<input type="text" name="contact2" placeholder="enter name of second person"></p></td>
    <td width="50%"><p align="center">Mobile2<input type="text" name="mobile2" placeholder="enter mobile number of second person"></p></td></tr></table>
    <p align="center">Email2<input type="email" name="email2" placeholder="enter email of second person"></p>
  
  <p align="center"><input type="submit" value="submit" name="submit"/>
  <p align="center"><a href="upform.php">Click here for edit</a></p>
 <p align="center"><a href="search_groupwise.php">Click here for to see report Generation</a></p>
  
  

</form>
</div>
</div>
    
  </body>
</html>
