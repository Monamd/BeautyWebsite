<!DOCTYPE html>

<html>
<head>
<meta charset = "utf-8">
<title>Contact us</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type ="text/css">

   
       label{ display: block;
           width: 50%;
           height: 10%;
	    margin-bottom: 10px;
       border-style: hidden;
	   font-size: 20px;
	   font-weight: bolder;
     background-color: rgba(242, 242, 242, 0.5);
        
           
       }    
        
       input{ height:40% ;
           width:40% } 
       
       .select{ background-color: aliceblue;
	 border: none; 
   position :absolute;
         width: 50%;
           height: 15%;
         margin-right: 30%; 
           margin-left: -20%;
	    margin-bottom: 10px;
           left: 30%;
    }


input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=reset] {
  width: 10%;
  background-color: #003300;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: rgba(242, 242, 242, 0.5);
  color: #003300;
  border: 1px solid #003300;
}
input[type=submit] {
  width: 10%;
  background-color:#003300;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=reset]:hover {
  background-color: rgba(242, 242, 242, 0.5);
  color: #003300;
  border: 1px solid #003300;
}


.this{
  background-image: url(l9.JPG);
            background-clip: padding-box;
            background-position: 100% center;
           background-repeat: no-repeat;
           background-size: cover;
           background-origin: border-box;
  border-radius: 5px;
  background-color: #f2f2f2;
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
<div class="this">
<h1 class="word">Contact us</h1>
  <form method="post" action = "con.php">

<p><label><i></i>FullName:<br>
   <input type="text" id="FullName" name="FullName" maxLength="30" size="40" placeholder="Enter your Full Name please."></label>

    <br>
<label><i style="width:30px"> </i>E-mail:<br>
  <input type="email" name="email" placeholder="Enter your E-mail"></label>
 <label>Comments: <br/> <textarea name="comments" rows="9" cols="36">Enter comments here</textarea></label>  
</p>
  <p>
    <input type="submit" value="Submit">
    <input type="reset" value="Clear">
</p>

	  
	     <?php	

$FullName1=$_POST["FullName"];
$email1=$_POST["email"];
$comments1=$_POST["comments"];

$user='root';
$pas='';
$db='booking_db';


$con= new mysqli('localhost', $user, $pas, $db) or die ("Could not connect to the database ");	
$q= "INSERT INTO contact_us (FullName,email,comments) VALUES  ('$FullName1','$email1','$comments1')";
if (!mysqli_query ($con , $q)) 
{

print ("<p>  error  </p>");
die (mysqli_error($con)."</body></html>");

}

print ("<h1 style='color:green'> Your comment has been sent. Relax, we will reply ASAP!  <h1>");





mysqli_close($con);
     ?>
	  
  </form>
</div>
<div class="image">
  <p><img src="BB.jpg"   alt="logo" height="400" width="400" /></p>
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