<?php
if(count($_FILES) > 0) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
	mysql_connect("localhost", "root", "raghav33");
	mysql_select_db ("ioneeds");
	$imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
	$imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
	$imgData1 =addslashes(file_get_contents($_FILES['userImage1']['tmp_name']));
	$imageProperties1 = getimageSize($_FILES['userImage1']['tmp_name']);
	
	$sql = "INSERT INTO output_images(imageType,imageData,imageType1,imageData1, major, minor, name, age, sex, pnr, flight, seat, class, boarding, gate, departure, arrival, baggages)
	VALUES('{$imageProperties['mime']}', '{$imgData}','{$imageProperties1['mime']}', '{$imgData1}', '".$_POST['major']."', '".$_POST['minor']."', '".$_POST['name']."', '".$_POST['age']."', '".$_POST['sex']."', '".$_POST['pnr']."', '".$_POST['flight']."','".$_POST['seat']."','".$_POST['class']."','".$_POST['boarding']."','".$_POST['gate']."','".$_POST['departure']."', '".$_POST['arrival']."', '".$_POST['baggages']."')";
	$current_id = mysql_query($sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysql_error());
	if(isset($current_id)) {
		header("Location: displayentered.php");
	}
}
}
?>
<HTML>
<HEAD>
<TITLE>Upload Passenger & Baggage Information to TeleBeacon</TITLE>
<link href="imageStyles.css" rel="stylesheet" type="text/css" />
</HEAD>
<BODY>
<form name="frmImage" enctype="multipart/form-data" action="" method="post" class="frmImageUpload">
<label for="device_id">Passenger & Tagged Luggage Information</label>
<label>Upload Passenger Picture:</label><br/>
<input name="userImage" type="file" class="inputFile" />

<label>Upload Baggages Picture:</label><br/>
<input name="userImage1" type="file" class="inputFile" />

<label for="name">Name</label>
<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">

<label for="age">Age</label>
<input type="text" class="form-control" id="age" name="age" placeholder="Enter Age">

<label for="sex">sex</label>
<input type="text" class="form-control" id="sex" name="sex" placeholder="Enter Sex">

<label for="pnr">pnr</label>
<input type="text" class="form-control" id="pnr" name="pnr" placeholder="Enter PNR No">

<label for="flight">flight</label>
<input type="text" class="form-control" id="flight" name="flight" placeholder="Enter Flight No">

<label for="seat">seat</label>
<input type="text" class="form-control" id="seat" name="seat" placeholder="Enter Seat No">

<label for="class">class</label>
<input type="text" class="form-control" id="class" name="class" placeholder="Enter Ticket Class">

<label for="boarding">boarding</label>
<input type="text" class="form-control" id="boarding" name="boarding" placeholder="Boarding Time">

<label for="boarding">gate</label>
<input type="text" class="form-control" id="gate" name="gate" placeholder="Gate No">

<label for="departure">Departure Airport</label>
<input type="text" class="form-control" id="departure" name="departure" placeholder="Enter Departure">

<label for="arrival">Arrival Airport</label>
<input type="text" class="form-control" id="arrival" name="arrival" placeholder="Enter Arrival">

<label for="baggages">No of Baggages</label>
<input type="text" class="form-control" id="baggages" name="baggages" placeholder="Enter No of linked baggages">

<label for="major">major</label>
<input type="text" class="form-control" id="major" name="major" placeholder="Enter Major ID">

<label for="minor">minor</label>
<input type="text" class="form-control" id="minor" name="minor" placeholder="Enter Minor ID">

<input type="submit" value="Submit" class="btnSubmit" />
</form>
</div>
</BODY>
</HTML>