
<!DOCTYPE html>
<html>
<head>
<title>Systems Request </title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$("#file").blur(function () {
    $.post(pop.php, { name: $(this).val() }, function (data) {
        $("#nm").val(data);
    });
});
</script>

</head>
<body>

<div align="center">

<form action = "#" method ="post" class="form" style="width: 285px; height: 192px">

<br><br>File<br>
<input type="text" id="file" name="file">

<br>&nbsp;Name<br>
<input type="text" id="nm" name="nm" ><br><br>

<input type="submit" value= "Submit Name "><br>

</form>
</div>
</body>
</html>