

<div style="text-align:center">
<?
include_once("config.php");
$name=$_POST["name"];
$age=$_POST["age"];
$city=$_POST["city"];
//echo "Welcome <b>".$name."</b><br>";
//echo "your age is <b>".$age."</b><br>";
//echo "yourcity is <b>".$city."</b></br>";
//echo "youremail is <b>".$name.".".$city."@dit.edu.in</b></br>";
$result=mysqli_query($mysql,"insert into emp values('$name','$age','$city')");
if($result==true)
{
	echo "<h1>Record Inserted";
}
else{
	echo "error";
}
?>
</div>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>