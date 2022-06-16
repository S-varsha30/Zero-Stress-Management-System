<?php

$con=mysqli_connect("127.0.0.1:3307","root","","apartment");
if($con)
{
	$b="select * from complaint_form";
	$view=mysqli_query($con,$b);
	

?>

<html>
<head>
<title>Complaint Details</title>
<style>
button{
width:100%;
color:black;
padding:15px;;
margin:10px 0px;
border:none;
cursor:pointer;
}
input[type=text]{
width:100%;
padding:12px 20px;
margin:8px 0;
display:inline-block;
border:1px solid #ccc;
box-sizing:border-box;
}
.aa{
	text-align: right;
}
th{
	text-align: left;
}

</style>
</head>
<body>
<h3 class="aa"><a href="admin_logout.php">Logout</a></h3>
<center><h1>Complaint Details</h1>
<?php
while($row=mysqli_fetch_array($view))
{
?>
<form method="post">
<table>
<div class="container">
<tr>
<th><label>ID: </label></th>
<th><input type="text" name="id" value="<?php echo $row['id']; ?>"></th>
</tr>
<tr>
<th><label>First Name: </label></th>
<th><input type="text" name="fname" value="<?php echo $row['fname']; ?>"></th>
</tr>
<tr>
<th><label>Phone Number: </label></th>
<th><input type="text" name="phoneNo" value="<?php echo $row['PhNo']; ?>"></th>
</tr>
<tr>
<th><label>Floor: </label></th>
<th><input type="text" name="floor" value="<?php echo $row['floor']; ?>"></th>
</tr>
<tr>
<th><label>Category of complain: </label></th>
<th><input type="text" name="section" value="<?php echo $row['section']; ?>"></th>
</tr>
<tr>
<th><label>Complaint Details: </label></th>
<th><input type="text" name="CDetails" value="<?php echo $row['CDetails']; ?>"></th>
</div>
<br><br><br>
<?php } 
}
else	
	echo mysqli_connect_error();
	
?>
</table>
</form>
</body>
</html>