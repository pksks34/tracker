<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ravi Ladia & Co.|Billing</title>
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
    $( "#assignment" ).autocomplete({
      source: 'search4.php'
    });
  });
  </script>
</head>

<body>
<div class="container">
  <h1 align="center">Ravi Ladia & Co.</h1>
  <div class="well" align="center" style="font-size:30px; color:yellow; background-color:blue; width:100%;">Billing</div>
  
      
</div>
<form action="action2.php" method="post">
  <p align="center">Date<input type="text" name="date" value="<?php echo date('m/d/y');?>"/></p>
   <?php
include("config.php");

$sql = "SELECT t.bill from billing t ORDER BY t.bill DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
         $id=++$row["bill"];
		 echo "<p align='center'>Bill No.<input type='text' value='$id' name='bill'/></p>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
  <p align="center">Client File<input type="text" name="client" id="file" value="" placeholder="enter client file number" required /></p>
  <p align="center">Client Name<input type="text" name="clientname" id="nm" value="" placeholder="enter client name" required /></p>
  <p align="center">Number of Assignment<select name="nassignment" id="slct">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  </select></p>
 <p align="center"> <select id="type">
 <option value="same"> Same amount fo all </option>
<option value="different"> Different amount </option>
  </select></p>
  <p align="center">Assignment No.<input type="number" name="assignment" id="assignment" value="" placeholder="detail" required/></p>
  <p align="center">Detail<input type="text" name="detail" id="assignment" value="" placeholder="detail" required/></p>
  <p align="center" id="container"></p>
 <!--<div id="x"> <p align="center">Amount*<input type="text" name="amount1" value="" placeholder="amount" required/></p></div>-->
  <p align="center">Service Tax*<input type="text" name="service" value="" placeholder="enter service tax" required/></p>
  
  <p align="center"><input type="submit" name="submit" value="complete the Task" /></p>
  
  
  </form>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript">
 $(document).ready(function () {

        $('#slct').change(function () {
            var value = $(this).val(); var toAppend = '';
            if (value == 1) {
                toAppend = "<input type='textbox' name='amount1' >"; $("#container").html(toAppend); return;
            }
            if (value == 2) {
                toAppend = "<input type='textbox' name='amount1'>&nbsp;<input type='textbox' name='amount2'>"; $("#container").html(toAppend); return;
            }
            if (value = 3) {
                toAppend = "<input type='textbox' name='amount1'>&nbsp;<input type='textbox' name='amount2'>&nbsp;<input type='textbox' name='amount3'>"; $("#container").html(toAppend); return;

            }
			if (value = 4) {
                toAppend = "<input type='textbox' name='amount1'>&nbsp;<input type='textbox' name='amount2'>&nbsp;<input type='textbox' name='amount3'>&nbsp;<input type='textbox' name='amount4'>"; $("#container").html(toAppend); return;

            }
			if (value = 5) {
                toAppend = "<input type='textbox' name='amount1'>&nbsp;<input type='textbox' name='amount2'>&nbsp;<input type='textbox' name='amount3'>&nbsp;<input type='textbox' name='amount4'>&nbsp;<input type='textbox' name='amount5'>"; $("#container").html(toAppend); return;

            }
			if (value = 6) {
                toAppend = "<input type='textbox' name='amount1'>&nbsp;<input type='textbox' name='amount2'>&nbsp;<input type='textbox' name='amount3'>&nbsp;<input type='textbox' name='amount4'>&nbsp;<input type='textbox' name='amount5'>&nbsp;<input type='textbox' name='amount6'>"; $("#container").html(toAppend); return;

            }
			if (value = 7) {
                toAppend = "<input type='textbox' name='amount1'>&nbsp;<input type='textbox' name='amount2'>&nbsp;<input type='textbox' name='amount3'>&nbsp;<input type='textbox' name='amount4'>&nbsp;<input type='textbox' name='amount5'>&nbsp;<input type='textbox' name='amount6'>&nbsp;<input type='textbox' name='amount7'>"; $("#container").html(toAppend); return;

            }
			if (value = 8) {
                toAppend = "<input type='textbox' name='amount1'>&nbsp;<input type='textbox' name='amount2'>&nbsp;<input type='textbox' name='amount3'>&nbsp;<input type='textbox' name='amount4'>&nbsp;<input type='textbox' name='amount5'>&nbsp;<input type='textbox' name='amount6'>&nbsp;<input type='textbox' name='amount7'>&nbsp;<input type='textbox' name='amount8'>"; $("#container").html(toAppend); return;

            }
			if (value = 9) {
                toAppend = "<input type='textbox' name='amount1'>&nbsp;<input type='textbox' name='amount2'>&nbsp;<input type='textbox' name='amount3'>&nbsp;<input type='textbox' name='amount4'>&nbsp;<input type='textbox' name='amount5'>&nbsp;<input type='textbox' name='amount6'>&nbsp;<input type='textbox' name='amount7'>&nbsp;<input type='textbox' name='amount8'>&nbsp;<input type='textbox' name='amount9'>"; $("#container").html(toAppend); return;

            }
			if (value = 10) {
                toAppend = "<input type='textbox' name='amount1'>&nbsp;<input type='textbox' name='amount2'>&nbsp;<input type='textbox' name='amount3'>&nbsp;<input type='textbox' name='amount4'>&nbsp;<input type='textbox' name='amount5'>&nbsp;<input type='textbox' name='amount6'>&nbsp;<input type='textbox' name='amount7'>&nbsp;<input type='textbox' name='amount8'>&nbsp;<input type='textbox' name='amount9'>&nbsp;<input type='textbox' name='amount10'>"; $("#container").html(toAppend); return;

            }

        });

    });
</script>
<script type="text/javascript">
$(function() {
    $('#type').change(function(){
        if($('#type').val() == 'same') {
            $('#container').hide(); 
        } else {
            $('#x').hide(); 
        } 
    });
});
</script>
<p align="center"><a href="search_bill_groupwise.php">Click here for report generatio</a></p>
</body>
</html>
