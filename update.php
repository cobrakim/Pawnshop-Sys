<?php

include('config.php');

if (isset($_POST['update']))
{
	 $id=$_POST['lbc_id'];
	 $valid =mysqli_real_escape_string($db, $_POST['valid']);
	 $expdate =mysqli_real_escape_string($db, $_POST['expdate']);
	 $surname = mysqli_real_escape_string($db, $_POST['surname']);
	 $firstname =mysqli_real_escape_string($db, $_POST['firstname']);
	 $middlename = mysqli_real_escape_string($db, $_POST['middlename']);
	 $contactnumbers =mysqli_real_escape_string ($db, $_POST['contactnumbers']);
	 $presentaddress = mysqli_real_escape_string($db, $_POST['presentaddress']);
	 $dateofbirth =mysqli_real_escape_string ($db, $_POST['dateofbirth']);
	 $sssgsistin =mysqli_real_escape_string($db, $_POST['sssgsistin']);
	 $encash =mysqli_real_escape_string($db, $_POST['encash']);
	 $tracking =mysqli_real_escape_string($db, $_POST['tracking']);
	 $expamount = mysqli_real_escape_string($db, $_POST['expamount']);
	 $exactamount = mysqli_real_escape_string($db, $_POST['exactamount']);
	 
	 mysqli_query($db,"UPDATE lbc SET valid='$valid', expdate='$expdate' ,surname='$surname', firstname='$firstname', middlename='$middlename', contactnumbers='$contactnumbers', presentaddress='$presentaddress', dateofbirth='$dateofbirth', sssgsistin='$sssgsistin', encash='$encash', tracking='$tracking', expamount='$expamount', exactamount='$exactamount' WHERE lbc_id='$id'");
header("Location:viewdata.php");
}


if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{

$id = $_GET['id'];
$result = mysqli_query($db,"SELECT * FROM lbc WHERE lbc_id=".$_GET['id']);

$row = mysqli_fetch_array($result);

if($row)
{
	 $id = $row['lbc_id'];
	 $valid = $row['valid'];
	 $expdate = $row['expdate'];
	 $surname = $row['surname'];
	 $firstname = $row['firstname'];
	 $middlename = $row['middlename'];
	 $contactnumbers = $row['contactnumbers'];
	 $presentaddress = $row['presentaddress'];
	 $dateofbirth = $row['dateofbirth'];
	 $sssgsistin = $row['sssgsistin'];
	 $encash = $row['encash'];
	 $tracking = $row['tracking'];
	 $expamount = $row['expamount'];
	 $exactamount = $row['exactamount'];
}
else
{
echo "No results!";
}
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
</head>
<body>
<center>
<table>
<style>
table {
width: 500px	;

  background-color: orange;
  padding: 5px;
  margin-bottom: 1em;
    opacity: 0.8; 
}

td, th {
  border: 1px solid gray;
  text-align: left;
  padding:20px;
}

tr:nth-child(even) {
  background-color: red;
  
}

</style>

<form action="" method="post" action="viewdata.php" >
<input type="hidden" name="lbc_id" value="<?php echo $id; ?>"/>

<table border="1">
<tr>
<td colspan="2"><b><font color='orange'>EDIT DATA </font></b></td>
</tr>

<tr>
<td width="179"><b><font >Valid Id<em>*</em></font></b></td>
<td><label>
<input type="text" name="valid" value="<?php echo $valid; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font >Expire Date<em>*</em></font></b></td>
<td><label>
<input type="date" name="expdate" value="<?php echo $expdate; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font >Surname<em>*</em></font></b></td>
<td><label>
<input type="text" name="surname" value="<?php echo $surname; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font >Firstname<em>*</em></font></b></td>
<td><label>
<input type="text" name="firstname" value="<?php echo $firstname; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font >Middlename<em>*</em></font></b></td>
<td><label>
<input type="text" name="middlename" value="<?php echo $middlename; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font >Contact No.<em>*</em></font></b></td>
<td><label>
<input type="text" name="contactnumbers" value="<?php echo $contactnumbers; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font >Present Address <em>*</em></font></b></td>
<td><label>
<input type="text" name="presentaddress" value="<?php echo $presentaddress; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font >Date of Birth<em>*</em></font></b></td>
<td><label>
<input type="date" name="dateofbirth" value="<?php echo $dateofbirth; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font >ID<em>*</em></font></b></td>
<td><label>
<input type="text" name="sssgsistin" value="<?php echo $sssgsistin; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font >encash<em>*</em></font></b></td>
<td><label>
<input type="date" name="encash" value="<?php echo $encash; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font >tracking<em>*</em></font></b></td>
<td><label>
<input type="text" name="tracking" value="<?php echo $tracking; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font >Expected Amount<em>*</em></font></b></td>
<td><label>
<input type="text" name="expamount" value="<?php echo $expamount; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font >Exact Amount<em>*</em></font></b></td>
<td><label>
<input type="text" name="exactamount" value="<?php echo $exactamount; ?>" />
</label></td>
</tr>

<tr align="Right">
<td colspan="2"><label>
<input type="submit" name="update" value="Edit Records">

</label></td>
</tr>
</table>
</form>
</center>
</body>
</html>