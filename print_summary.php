<!DOCTYPE html>

<html>
<head>
<meta charset = "utf-8">
<title>Print</title>
<link rel="stylesheet" type="text/css" href="style.css">

<style type = "text/css">
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 70%;
 
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #336600;
  border: 1px solid black;
  color: white;
}
 		.this {
 background-image: url(BB2.JPG);
            background-clip: padding-box;
            background-position: 100% center;
           background-repeat: repeat-y;
           background-size: 400px 400px;
           background-origin: border-box;
  border-radius: 5px;

  padding: 20px;
}
 
  		.this1 {
 background-image: url(xx.png);
            
             background-position: top left;
           background-repeat: no-repeat;
           background-size: 400px 300px;
           
  border-radius: 5px;
margin: 20px;
  padding: 20px;
}
 
</style>

</head>

<body>


<div class="navbar">
  <a href="Beauty.html">Home</a>
<a href="Gallery.php">Gallary</a>
<a href="contactUs.html">Contact Us</a>
<a href="Booking.php?item_id=IT&category=non">Booking</a>
<a href="Cancel.html">Cancel</a>
<a href="Print.html">Print</a>
<a href="AboutUs.html">About Us</a>

  <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
	<a href="Beauty.html"><img src= "home.png"   width="60" height="60" alt="home" style="text-align: center;"/></a>
<a href="Gallery.php"><img   src="art.png"   width="60" height="60" alt="art"/></a> 
<a href="contactUs.html"><img   src="contact.png"   width="60" height="60" alt="contact"/></a>
<a href="Booking.php?item_id=IT&category=non"><img   src="booking.png" width="60" height="60"   alt="booking"/></a>
<a href="Cancel.html"><img   src="cancel.png"   width="60" height="60" alt="cancel"/></a> 
<a href="Print.html"><img   src="Print.png"   width="60" height="60" alt="Print"/></a>
<a href="AboutUs.html"><img   src="About.png" width="60" height="60"   alt="AboutUs"/></a>

    </div>
  </div> 

</div>

<div class="image">
  <p><img src="BB.jpg"   alt="logo" height="400" width="400" /></p>
</div>

<h1 class="word"> Print</h1>

<br>
<br>
<br>
<br>
<div class="this1">

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="this">
<br>
<br>
<br>
<br>
<br>
<?php
$print_id = $_POST['numb'];
$user='root';
$pas='';
$db='booking_db';

$con= new mysqli('localhost', $user, $pas, $db) or die ("Could not connect to db");
$query= "SELECT booking_id FROM booking_records";
$result= mysqli_query($con, $query);
$query2= "SELECT * FROM `booking_records` WHERE `booking_id` = '".$_POST["numb"]."'";
$result2= mysqli_query($con, $query2);

if(!mysqli_query($con,$query) || !mysqli_query($con,$query2)) {
	print("Could not execute query");
	die(mysqli_error($con) . "</body></html>");
}

$str="";

/* This sets the $time variable to the current hour in the 24 hour clock format */
    $time = date("H");
    /* Set the $timezone variable to become the current timezone */
    $timezone = date("e");
    /* If the time is less than 1200 hours, show good morning */
    if ($time < "12") {
        echo "<h2 class='word' style='text-align: left;'>Good morning <br> Your booking summery is:</h2>";
    } else
    /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
    if ($time >= "12" && $time < "17") {
        echo "<h2 class='word' style='text-align: left;'>Good afternoon <br> Your booking summery is:</h2>";
    } else
    /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
    if ($time >= "17" && $time < "19") {
        echo "<h2 class='word' style='text-align: left;'>Good evening <br> Your booking summery is:</h2>";
    } else
    /* Finally, show good night if the time is greater than or equal to 1900 hours */
    if ($time >= "19") {
        echo "<h2 class='word' style='text-align: left;'>Good night <br> Your booking summery is:</h2>";
    }


while($row=mysqli_fetch_assoc($result)) {
	if($print_id == $row["booking_id"]) {
		while ( $row = mysqli_fetch_row( $result2 ) ) 
    {   
        $str= "<table id='customers'>" .
                            "<tr>
                                <th>booking ID</th>
                                <th>Item ID</th>
                                <th>FullName</th>
                                <th>Phone</th>
								<th>Quantity</th>
                                <th>Total Price</th>
                                <th>City</th>
                                <th>District</th>
								<th>Booking date</th>
                            </tr>" .
                            "<tr>
                                <td>" .$row[0]."</td>
                                <td>" . $row[ 1 ]. "</td>
                                <td>" . $row[2 ] . "</td>
                                <td>" . $row[ 3 ] . "</td>
								<td>".$row[ 4 ]."</td>
                                <td>" . $row[ 5 ]. "</td>
                                <td>" . $row[6 ] . "</td>
                                <td>" . $row[ 7 ] . "</td>
								<td>" . $row[ 8] . "</td>
                            </tr>
                            </table>";
			print($str);
            
    } }
	
}

if($str =="")
	echo "<script type='text/javascript'>alert('wrong booking id');</script>";


	
mysqli_close($con);

?>

</div>
</div>
<footer>
<div class="navbar">
<a ><strong> &nbsp; Beauty &copy; &nbsp;</strong> </a>
<a href="http://www.facebook.com"><img   src= "facebook.png"   width="20" height="20" alt="FaceBook"/></a>
<a href="http://www.instagram.com"><img   src= "instagram.png"   width="20" height="20" alt="instgram"/></a>
<a href="http://www.twitter.com"><img   src= "twitter.png"   width="20" height="20" alt="twitter"/></a>
</div>
</footer>
</body>

</html>