<?php
function onSubmit($response)
{
$tempuser=$response["name"];
$temppass=$response["rollno"];

//include 'ConFunctions.php';

include 'ConFunctions.php';
$conn=StartCon();

//Here I clean the query to prevent injections
$inuser=mysqli_real_escape_string($conn,$tempuser);
$inpass=mysqli_real_escape_string($conn,$temppass);

$query1 = "INSERT INTO Names (name,rollno) Values ('$inuser', '$inpass')";

$back= mysqli_query($conn,$query1);
//$num=mysqli_num_rows($back);

if(!$back){echo "Some Error";}

}
if(array_key_exists('submit', $_POST))
{
$user=$_POST["name"];
$pass=$_POST["rollno"];
//echo $user;
onSubmit($_POST);
}

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body style="background-image:url('sp.jpg'); background-repeat: no-repeat;background-size: cover;">
<form class="form1" method="post">
<h1>Add Record</h1>
<label for="name">Name</label>
<input type="text" placeholder="Enter Name" name="name">
<br>
<label for="rollno">Roll Number</label>
<input type="text" name="rollno" placeholder="Enter RollNo.">
<br>
<button style="background-color: #eeee00;color:#000;border:1px;" name="submit" type="submit" value="submit">Submit</button>
 <table style="text-align:center;margin:auto">
<tr>
	<th>Name</th>
	<th>Roll No.</th>
</tr>
<?php
include_once 'ConFunctions.php';
$conn=StartCon();
$query2 = "SELECT name,rollno FROM Names";
$back2= mysqli_query($conn,$query2);
if(!$back2||mysqli_num_rows($back2)>0)
{
	while($row=mysqli_fetch_assoc($back2)){
		echo "<tr>";
		echo "<td>".$row["name"]."</td>";
		echo "<td align='center'>".$row["rollno"]."</td>";
		echo "</tr>";			
	}
}
?>
</table>
</form>

</body>
</html>
