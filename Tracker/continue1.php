<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
input[type=submit] {
    padding:5px 15px; 
    background:blue; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
}
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
	</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
  <h1 align="center">Ravi Ladia & Co.</h1>
  <div class="well" align="center" style="font-size:30px; color:yellow; background-color:blue; width:100%;">Task & Track</div>
  
<form action="action1.php" method="post">
<table width="100%">
<tr>
<td width="50%">
  <p align="center">File No.<input type="text" name="file" value="<?php echo $_POST['file']; ?>" /></p></td>
  <td width="50%"><p align="center">Name<input type="text" name="nm" value="<?php echo $_POST['nm']; ?>" /></p></td></tr>
 <tr><td width="50%"> <p align="center">PAN<input type="text" name="pan" value="<?php echo $_POST['pan']; ?>" /></p></td>
  <td width="50%"><p align="center">Asignment No.<input type="text" name="assignment" value="<?php echo $_POST['assignment']; ?>" /></p></td></tr>
  <tr><td width="50%"><p align="center">Assignment detail<input type="text" name="assignmentd" value="<?php echo $_POST['assignmentd']; ?>" /></p></td>
 <td width="50%"> <p align="center">Deadline<input type="text" name="deadline" value="<?php echo $_POST['deadline']; ?>" /></p></td></tr>
 <tr><td width="50%"> <p align="center">Billable<input type="text" name="bilable" value="<?php echo $_POST['bilable']; ?>" /></p></td>
 <td width="50%"> <p align="center">Assigned to<input type="text" name="assignedt" value="<?php echo $_POST['assignedt']; ?>" /></p></td></tr>
  <tr><td width="50%"><p align="center">Status:
  <select name="status1">
  <option value="Pending">Pending</option>
  <option value="Complete">Complete</option>
  </select></p></td>
 <td width="50%"> <p align="center">Pending From:
  <select name="pending">
  <option value="firm">Firm</option>
  <option value="client">Client</option>
  </select></p></td></tr>
  <tr><td width="50%"><p align="center">Remarks.<input type="text" name="remarks" value="" placeholder="remarks" required="required" /></p></td>
  <td width="50%"><p align="center">Billing<input type="text" name="biling" value="<?php echo $_POST['bilable']; ?>" /></p></td></tr></table>
  <p align="center"><input type="submit" name="submit" value="complete the Task" /></p>
  <p align="center"><a href="search_track_groupwise.php">Click here for to see report Generation</a></p>
  
  
  </form>
</body>
</html>
