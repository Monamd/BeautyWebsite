<!DOCTYPE html>

<html>
<head>
<meta charset = "utf-8">
<title>Booking</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type ="text/css">
       
       label{ 
	   display: block;
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


.this {
 background-image: url(leaf2.JPG);
            background-clip: padding-box;
            background-position: 100% center;
           background-repeat: no-repeat;
           background-size: 100% 116%;
           background-origin: border-box;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

</style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        
function check_data() {
    item_id = document.getElementById("item_id").value;
    str = document.getElementById("date1").value + " " +document.getElementById("time1").value;
    Quantity = document.getElementById("Quantity").value;
    
    $.ajax({
			   type: "GET",
			   data: '',
			   url: "connection.php?type=booking&str="+str+"&item_id="+item_id+"&Quantity="+Quantity,
			   success: function(data) {
				  		if(data == "OK")
                        {
                            document.form.submit();
                        }

                    else
                        {
                            alert(data);
                        }
				},
			   error: function() {alert("error");}
			});
}
</script>
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
<h1 class="word">Booking</h1>
  <form id="form" action="Summary.php" method="post" name="form"  onsubmit="javascript: check_data(); return false;">
<label>FullName: <br>
   <input type="text" id="FullName" name="FullName" maxLength="30" size="40" placeholder=" Enter your Full Name please." pattern="[A-Za-z\s]+" required> </label>
<label>Phone Number: <br> <input type="tel" id="tel" name="tel" placeholder="966######## or 00966########" pattern="^((?:[+?0?0?966]+)(?:\s?\d{2})(?:\s?\d{7}))$" title="966######## or 00966########" required ></label>
 <label for = "txtList">Services: 
     <?php
     if($_GET['category'] != "non")
     {
      ?>]
     <input type =  "text" id ="txtList" name ="txtList"
            placeholder = "Select a Services" value="<?php echo $_GET['category']; ?>"/>
     <datalist id="Services">
     <option value="Skin Care">
     <option value="Nails"> 
     <option value="Body scrub">
     <option value="Body Massage">
     <option value="">
     </datalist>
     <?php
     }else
     {
    ?>
     <input type =  "text" id ="txtList" name ="txtList"
            placeholder = "Select a Services" list="Services" />
     <datalist id="Services">
     <option value="Skin Care">
     <option value="Nails"> 
     <option value="Body scrub">
     <option value="Body Massage">
     <option value="">
     </datalist>
     
     <?php
     }
     ?>
     
     </label>
	  <label> Item ID: <br>
   <input type="text" id="item_id" name="item_id" maxLength="20" size="10" placeholder=" Enter the Item ID." value="<?php echo $_GET["item_id"] ?>"> </label>

	 
 <label> Quantity: <br>
   <input type="number" id="Quantity" name="Quantity" maxLength="20" min="1" size="10" placeholder=" Enter the Services Quantity." required> </label>

   
 <label for="City">City: <br>
              
    <select id="City" name="City"> 
    <option value="Riyadh">Riyadh</option>
    <option value="jeddah">jeddah</option>
    <option value="Qassim">Qassim</option>
    <option value="Macca">Macca</option>
    <option value="Madinah">Madinah</option> 
    <option value="Taif">Taif</option> 
    <option value="Dammam">Dammam</option>   
    </select>
    </label> 
          
     <label for="District"> 
     <i class="fa fa-map-pin"></i> District 
    <select id="District" name="District">
    <option value="AS Sahafah ">AS Sahafah </option>
    <option value="AlYasmin">AlYasmin</option>
    <option value="AlMalqa">AlMalqa</option>
    <option value="AN Narjis">AN Narjis</option>
    <option value="AN Nafal">AN Nafal</option> 
    <option value="Hattin">Hattin</option> 
    <option value="AlWadi">AlWadi</option>  
    <option value="AlFalah">AlFalah</option> 
    </select> 
         </label>
      
<label>Date: <br>
           <input type="Date" id="date1" name="date1" value="<?php echo date('Y-m-d'); ?>" required>
       </label> 

        <label>Time: <br>
        <input type ="time" name="time1" id="time1" required>
               </label>
  <p>
    <input type="submit" value="Book">
    <input type="reset" value="Clear">
</p>

  </form>
   
</div>

    
<div class="image">
  <p><img src="BB.jpg"   alt="logo" height="400" width="400" /></p>
</div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
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
