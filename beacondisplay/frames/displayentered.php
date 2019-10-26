<?php
$conn = mysql_connect("localhost", "root", "raghav33");
mysql_select_db("ioneeds");
$sql    = "SELECT * FROM output_images ORDER BY imageId DESC LIMIT 1";
$result = mysql_query($sql);
?>
<HTML>
<HEAD>
<TITLE>TeleBeacon Passenger Information </TITLE>
<link href="imageStyles.css" rel="stylesheet" type="text/css" />
</HEAD>
<BODY>
<?php





if ($_GET['do'] == "delete") {
    if (mysql_query("DELETE FROM output_images WHERE imageId='" . $_GET['imageId'] . "'")) {
        echo '<div class="alert alert-success" role="alert">Rule deleted.</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Rule can\'t deleted.</div>';
    }
}

while ($row = mysql_fetch_array($result)) {
?>
<p>TeleBeacon- Hyderabad Airport Passenger Information</p>
	
		<img src="imageViewadd.php?image_id=<?php
    echo $row["imageId"];
?>" /><br/>


		<img src="imageViewadd1.php?image_id=<?php
    echo $row["imageId"];
?>" /><br/>




<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" value="<?php
    echo $row["name"];
?>" id="name" name="name" placeholder="name">
  </div>

<div class="form-group">
    <label for="age">Age</label>
    <input type="text" class="form-control" value="<?php
    echo $row["age"];
?>" id="age" name="age" placeholder="Enter Latest key">
  </div>

<div class="form-group">
    <label for="sex">Sex</label>
    <input type="text" class="form-control" value="<?php
    echo $row["sex"];
?>" id="sex" name="sex" placeholder="Enter Latest key">
  </div>

<div class="form-group">
    <label for="pnr">PNR</label>
    <input type="text" class="form-control" value="<?php echo $row["pnr"]; ?>" id="pnr" name="pnr" placeholder="Enter Latest key">
  </div>

<div class="form-group">
    <label for="flight">Flight</label>
    <input type="text" class="form-control" value="<?php echo $row["flight"]; ?>" id="flight" name="flight" placeholder="Enter Latest key">
  </div>

<div class="form-group">
    <label for="seat">Seat</label>
    <input type="text" class="form-control" value="<?php echo $row["seat"]; ?>" id="seat" name="seat" placeholder="Enter Latest key">
  </div>

<div class="form-group">
    <label for="class">Ticket Class</label>
    <input type="text" class="form-control" value="<?php echo $row["class"]; ?>" id="class" name="class" placeholder="Enter Latest key">
  </div>

<div class="form-group">
    <label for="gate">Gate No</label>
    <input type="text" class="form-control" value="<?php echo $row["gate"]; ?>" id="gate" name="gate" placeholder="Enter Latest key">
  </div>

<div class="form-group">
    <label for="boarding">Boarding Time</label>
    <input type="text" class="form-control" value="<?php echo $row["boarding"]; ?>" id="boarding" name="boarding" placeholder="Enter Latest key">
  </div>



<div class="form-group">
    <label for="departure">Departure</label>
    <input type="text" class="form-control" value="<?php
    echo $row["departure"];
?>" id="departure" name="departure" placeholder="Enter Latest key">
  </div>

<div class="form-group">
    <label for="arrival">Arrival</label>
    <input type="text" class="form-control" value="<?php
    echo $row["arrival"];
?>" id="arrival" name="arrival" placeholder="Enter Latest key">
  </div>
<div class="form-group">
    <label for="baggages">Linked Baggages No</label>
    <input type="text" class="form-control" value="<?php
    echo $row["baggages"];
?>" id="baggages" name="baggages" placeholder="Enter Latest key">
  </div>

<div class="form-group">
    <label for="latest">Latest</label>
    <input type="text" class="form-control" value="<?php
    echo $row["latest"];
?>" id="latest" name="latest" placeholder="Enter Latest key">
  </div>

<div class="form-group">
    <label for="major">Major</label>
    <input type="text" class="form-control" value="<?php
    echo $row["major"];
?>" id="major" name="major" placeholder="Enter Major ID">
  </div>
<div class="form-group">
    <label for="minor">Minor</label>
    <input type="text" class="form-control" value="<?php
    echo $row["minor"];
?>" id="minor" name="minor" placeholder="Enter Minor key">
  </div>

<a href="?do=delete&imageId=<?php
    echo $row["imageId"];
?>" class="btn btn-sm btn-danger" onclick="return confirm(\'Are you sure?\')">Delete</a></td>

<?php
}
mysql_close($conn);
?>
</BODY>
</HTML>