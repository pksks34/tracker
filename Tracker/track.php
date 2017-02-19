<!DOCTYPE html>
<html>
<head>
<title>Ravi Ladia & Co.|Task & Track</title>
<style>


/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 20%;
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
  $(function() {
    $( "#nm" ).autocomplete({
      source: 'search2.php'
    });
  });
  </script>
   <script>
  $(function() {
    $( "#pan" ).autocomplete({
      source: 'search3.php'
    });
  });
  </script>
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
    color:black;
    font-family: courier;
    font-size: 160%;
}
select {
  font-weight: bold;
}
	</style>
  

</head>
<body>
<div class="container">
  <h1 align="center">Ravi Ladia & Co.</h1>
  <div class="well" align="center" style="font-size:30px; color:yellow; background-color:blue; width:100%;">Task & Track</div>
  
      
</div>
<form action="continue.php" method="post">
  <table width="100%"><tr><td width="50%"><p align="center"><label for="file">File: </label>
  <input id="file" type="text" name="file" placeholder="enter file No." required></p></td>
  <td width="50%"><p align="center"><label for="name">NAME: </label>
  <input id="nm" type="text" name="nm" placeholder="enter name" required></p></td></tr>
 <tr><td width="50%"> <p align="center"><label for="skills">PAN: </label>
  <input id="pan" type="text" name="pan" placeholder="enter 10 digit pan number" required></p></td>
  <td width="50%">
  <?php
include("config.php");

$sql = "SELECT t.assignment from track t ORDER BY t.assignment DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
         $id=++$row["assignment"];
		 echo "<p align='center'>Assignment No.<input type='text' value='$id' name='assignment'/></p>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</td></tr>
  <tr><td width="50%"><p align="center"><label for="assignmentd">Assignment Detail: </label>
  <input id="assignmentd" type="text" name="assignmentd" placeholder="enter assignment detail" required></p></td>
   <td width="50%"><p align="center"><label for="deadline">Deadline: </label>
  <input id="deadline" type="date" name="deadline"></p></td></tr>
   <tr><td width="50%"><p align="center"><label for="billable">Billable: </label>
  <select name="bilable">
  <option value="">Select</option>
  <option value="yes">Yes</option>
  <option value="no">No</option>
  </select></p></td>
  <td width="50%"><p align="center"><label for="assignedt">Assigned to: </label>
  <select name="assignedt">
  <option value="">Select</option>
  <option value="staff1">staff1</option>
  <option value="staff2">staff2</option>
  </select></p></td></tr></table>
  <p align="center"><input type="submit" name="submit" value="submit" /></p>
  
  
  </form>


</body>
</html>

