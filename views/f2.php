<html>
<head>

    <link rel="stylesheet" type="text/css" href="../lib/css/main.css" />
    <style>
        body{
        background: white;
         }
    </style>
</head>
<body style="background:rgba(246, 248, 250, 1);">

<form method="POST" enctype="multipart/form-data">
<?php
$path=$_SERVER['SERVER_NAME']."/admin/uploads/C4.png";
if(isset($_POST['reg']))
{
$fname=$_FILES['a']['name'];
$fsize=$_FILES['a']['size'];
$ftype=$_FILES['a']['type'];
$ftmp=$_FILES['a']['tmp_name'];
$randno=rand();
$storage_path=$_SERVER['SERVER_NAME']."/admin/uploads/".$_GET['id'].$randno.".jpg";
if(move_uploaded_file($ftmp,$storage_path))
{
//echo "file uploaded";
    $path=$storage_path;
}
}
?>
<?php
echo "<img src=".$path." height='200px' width='200px'>"
    ?>
<br><input type="file" name="a"/>
<p>
    <input type="submit" class="btn btn-info" name="reg" value="Save Image"/></p>
</form>    
</body>
</html>
