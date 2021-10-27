<?php?>
<!DOCTYPE html>
<html>
<head></head>
<title></title>
<style>

* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body style="background:gray;">

<h1 style="color:red;text-align: center"><strong>LBC Encashment Form</strong></h1>

<div class="container">
  <form method="POST" action="viewdata.php">
  
<fieldset> 
<legend>CONSIGNEE DETATILS(Detalya ng Tagatanggap</legend>
<fieldset> 
<div>
  <label for="valid">Valid ID and No.Presented:</label>
  <input type="text" id="valid" name="valid" required>
  <label for="expdate">Expiry Date:</label>
  <input type="date" id="expdate"name="expdate" required>
</div>
</fieldset>
<fieldset>
<fieldset>
<legend>Name(Pangalan)</legend>
  <div class="row">
    <div class="col-25">
      <label for="surname">Surname</label>
    </div>
    <div class="col-75">
      <input type="text" id="surname" name="surname" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="firstname">Firstname</label>
    </div>
    <div class="col-75">
      <input type="text" id="firstname" name="firstname" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="middlename">Middlename</label>
    </div>
    <div class="col-75">
      <input type="text" id="middlename" name="middlename" required >
    </div>
  </div>
</fieldset>
<fieldset>
    <div class="row">
    <div class="col-25">
      <label for="contactnumbers">Contact Number/s:</label>
    </div>
    <div class="col-75">
      <input type="text" id="contactnumbers" name="contactnumbers"  required>
    </div>
	</div>
	
</fieldset>
<fieldset>
  <div class="row">
    <div class="col-25">
      <label for="presentaddress">Consignee's Present Address:</label>
    </div>
    <div class="col-75">
      <input type="text" id="presentaddress" name="presentaddress" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="dateofbirth">Consignee's Date of Birth:</label>
    </div>
    <div class="col-75">
      <input type="date" id="dateofbirth" name="dateofbirth"  >
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="sssgsistin">SSS/GSIS/TIN#:</label>
    </div>
    <div class="col-75">
      <input type="text" id="sssgsistin" name="sssgsistin" required>
    </div>
  </div>
</fieldset>
</fieldset>
</fieldset>
<fieldset> 
<legend>ENCASHMENT DETATILS(Detalye ng Tagatanggapin</legend>
<fieldset>
  <div class="row">
    <div class="col-25">
      <label for="encash">Date of Encashment:</label>
    </div>
    <div class="col-75">
      <input type="date" id="encash" name="encash" required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="tracking">Tracking No.:</label>
    </div>
    <div class="col-75">
      <input type="text" id="tracking" name="tracking" required>
    </div>
  </div>
</fieldset>
<fieldset>
  <div class="row">
    <div class="col-25">
      <label for="expamount">Expected Amount to Receive:</label>
    </div>
    <div class="col-75">
      <input type="text" id="expamount" name="expamount" required>
    </div>
  </div>
</fieldset>
<fieldset>
  <div class="row">
    <div class="col-25">
      <label for="exactamount">Exact Amount Received:</label>
    </div>
    <div class="col-75">
      <input type="text" id="exactamount" name="exactamount" required>
    </div>
  </div>
</fieldset>
  <div class="row">
  <div class="col-95">
    <input type="submit" name="save"  value="Submit">
  </div>
  </div>
  </form>
</div>
</body>
</html>