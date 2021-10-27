
<?php
include_once 'database.php';
if(isset($_POST['save']))
{
 $valid = $_POST['valid'];
 $expdate = $_POST['expdate'];
 $surname = $_POST['surname'];
 $firstname = $_POST['firstname'];
 $middlename = $_POST['middlename'];
 $contactnumbers = $_POST['contactnumbers'];
 $presentaddress = $_POST['presentaddress'];
 $dateofbirth = $_POST['dateofbirth'];
 $sssgsistin = $_POST['sssgsistin'];
 $encash = $_POST['encash'];
 $tracking = $_POST['tracking'];
 $expamount = $_POST['expamount'];
 $exactamount = $_POST['exactamount'];

 
 $sql = "INSERT INTO lbc ( valid, expdate, surname, firstname, middlename, contactnumbers, presentaddress, dateofbirth, sssgsistin, encash, tracking, expamount, exactamount)
VALUES ('$valid','$expdate','$surname','$firstname','$middlename','$contactnumbers','$presentaddress','$dateofbirth','$sssgsistin','$encash','$tracking','$expamount','$exactamount')";

	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);

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
<tbody>
													<thead class="text-uppercase">
													<tr class="table-active">
													<th scope="col">Id</th>
                                                    <th scope="col">Valid ID and No.Presented</th>
                                                    <th scope="col">Expiry Date</th>
                                                    <th scope="col">Surname</th>
                                                    <th scope="col">Firstname</th>
													<th scope="col">Middlename</th>
													<th scope="col">Contact Number/s</th>
													<th scope="col">Consignee's Present Address</th>
                                                    <th scope="col">Consignee's Date of Birth</th>
                                                    <th scope="col">SSS/GSIS/TIN#</th>
                                                    <th scope="col">Date of Encashment</th>
													<th scope="col">Tracking No</th>
													<th scope="col">Expected Amount to Receive</th>
													<th scope="col">Exact Amount Received</th>												       
													</tr>
													</thead>
													</tbody>
<?php 
               $conn = new mysqli("localhost","root","","lbc_form");
               $sql = "SELECT * FROM lbc";
               $result = $conn->query($sql);
					$count=0;
               if ($result -> num_rows >  0) {
				  
                 while ($row = $result->fetch_assoc()) 
				 {
					  $count=$count+1;
                   ?>

				   
                   <tr>
                    <th><?php echo $count ?></th>
                      <th><?php echo $row["valid"] ?></th>
                      <th><?php echo $row["expdate"]  ?></th>
                      <th><?php echo $row["surname"]  ?></th>
					  <th><?php echo $row["firstname"]  ?></th>
					  <th><?php echo $row["middlename"]  ?></th>
					  <th><?php echo $row["contactnumbers"]  ?></th>
					  <th><?php echo $row["presentaddress"]  ?></th>
					  <th><?php echo $row["dateofbirth"]  ?></th>
					  <th><?php echo $row["sssgsistin"]  ?></th>
					  <th><?php echo $row["encash"]  ?></th>
					  <th><?php echo $row["tracking"]  ?></th>
					  <th><?php echo $row["expamount"]  ?></th>
					  <th><?php echo $row["exactamount"]  ?></th>
					  
						<th>
						<a href="up"edit></a><a href="update.php?id=<?php echo $row["lbc_id"] ?>">Update</a> <a href="up"edit></a>
						<a href="delete.php?id=<?php echo $row["lbc_id"] ?>">Delete</a>
						</th>
                    
                      
                    </tr>
<?php
                }
			   }
             ?>		
</table>			 
</body>
</html>