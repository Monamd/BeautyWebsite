<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Summary</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
        .home {
            padding: 5px;
        }
       
        .home:hover {
            border-bottom: 6px solid #608000;
            background-image: url(le.jpg);
            background-repeat: repeat-y;
            background-size: 300px 300px;
            background-position: right;
        }
       
        p {
            text-indent: 50px;
            text-align: justify;
            display: block;
            color: black;
            font-weight: bold;
            font-size: 30px;
            font-family: "Times New Roman", Times, serif;
        }
       
        a:hover {
            text-decoration: none;
            color: #009933;
        }
       
        a {
            text-decoration: none;
            color: #003300;
        }
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
           background-size: 500px 500px;
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
        <p><img src="BB.jpg" alt="logo" height="400" width="400"/>
        </p>
    </div>
    <h1 class="word"> Cancel Summary</h1>


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
	
	
	/* This sets the $time variable to the current hour in the 24 hour clock format */
    $time = date("H");
    /* Set the $timezone variable to become the current timezone */
    $timezone = date("e");
    /* If the time is less than 1200 hours, show good morning */
    if ($time < "12") {
        echo "<h2 class='word' style='text-align: left;'>Good morning <br> Your summry is:</h2>";
    } else
    /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
    if ($time >= "12" && $time < "17") {
        echo "<h2 class='word' style='text-align: left;'>Good afternoon <br> Your summry is:</h2>";
    } else
    /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
    if ($time >= "17" && $time < "19") {
        echo "<h2 class='word' style='text-align: left;'>Good evening <br> Your summry is:</h2>";
    } else
    /* Finally, show good night if the time is greater than or equal to 1900 hours */
    if ($time >= "19") {
        echo "<h2 class='word' style='text-align: left;'>Good night <br> Your summry is:</h2>";
    }
	
	
$user='root';
$pas='';
$database='booking_db';
$con= new mysqli('localhost', $user, $pas, $database) or die ("Could not connect to db");
$query = "SELECT * FROM `booking_records` WHERE `booking_id` = '" . $_POST[ "booking_id" ] . "' AND `status` = 'ACTIVE'";
$result=mysqli_query($con,$query);
if(!mysqli_query($con,$query)) {
	print("Could not execute query");
	die(mysqli_error($con) . "</body></html>");
}
	
			
            if(mysqli_num_rows($result) > 0)
            {
                while ( $row = mysqli_fetch_row( $result ) ) {
					$withoutFees= $row[5] - $row[10];
                        echo "<table id='customers'>
                            <tr>
                                <th>Name</th>
                                <th>Booking ID</th>
                                <th>Item ID</th>
                                <th>Quantity</td>
                                <th>Money you will recive</th>
                            </tr>
                            <tr>
                                <td>".$row[ 2 ]."</td>
                                <td>" . $_POST[ 'booking_id' ] . "</td>
                                <td>" . $row[ 1 ]. "</td>
                                <td>" . $row[4 ] . "</td>
                                <td>" . $withoutFees . "</td>
                                </td>
                            </tr>
                            </table>";
                    
                    
                    $tmp = mysqli_query($con, "SELECT * FROM `items` WHERE `item_id` = '" . $row[ 1 ] . "'");
                    $r = mysqli_fetch_row($tmp);
                    
                     mysqli_query( $con, "update `items` set `status` = 'AVAILABLE', `quantity` = ".($r[4]+$row[4])." WHERE `item_id` = '" . $row[ 1 ] . "'" );

                    mysqli_query( $con, "update `booking_records` set `status` = 'CANCEL', `total_price` = 0 WHERE `booking_id` = '" . $_POST[ "booking_id" ] . "'" );
                    
                    $tot_price = mysqli_query($con, "select * from `total`");
                    $tot_price_ro   =   mysqli_fetch_row($tot_price);
                    mysqli_query($con, "update  `total` set `total_price` = ".($tot_price_ro[0] - ($row[5] - $row[10])));
					
					echo "<h2 class='word' style='text-shadow: 2px 2px 4px #ccffcc; text-align: left;' >Thank you, we hope you come back again!</h2>";
                }
            }else
            {
                echo "Error in the Booking ID";
            }
			
			
mysqli_close($con);
    ?>
</div>
</div>
    <footer>
        <div class="navbar">
            <a><strong> &nbsp; Beauty &copy; &nbsp;</strong> </a>
            <a href="http://www.facebook.com"><img   src= "facebook.png"   width="20" height="20" alt="FaceBook"/></a>
            <a href="http://www.instagram.com"><img   src= "instagram.png"   width="20" height="20" alt="instgram"/></a>
            <a href="http://www.twitter.com"><img   src= "twitter.png"   width="20" height="20" alt="twitter"/></a>
        </div>
    </footer>
</body>

</html>