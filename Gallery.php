<?php

//Connect to Mysql
if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
    die( "Couldn't connect to database." );

//Connect to Booking_db
if ( !( mysqli_select_db( $database, "booking_db" ) ) )
    die( "Couldn't open booking_db." );

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
    function validate(status)
        {
            if(status == "BOOKED")
            {
                alert("Already Booked!");
                return false;
            }
            else
                return true;
        }
    </script>
    
    <style type="text/css">
        .gallery {
            margin: 5px;
            border: 1px solid #ccc;
            width: 180px;
            display: inline-block;
        }
        
        .gallery:hover {
            border: 1px solid #777;
        }
        
        .gallery img {
            width: 100%;
            height: auto;
        }
        
        .desc {
            padding: 15px;
            text-align: left;
            color: #003300;
        }
        
        * {
            box-sizing: border-box;
            text-align: center;
        }
        
        .mySlides {
            display: none;
            width: 600px;
            height: 600px;
        }
        
        img {
            vertical-align: middle;
        }
        
        /* Slideshow container */
        .slideshow-container {
            max-width: 600px;
            position: relative;
            margin-top: 50px;
            margin-left: 300px;
            text-align: center;
        }
        
        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }
        
        .mySlides:hover {
            opacity: 0.5;
            border-bottom: 6px solid #608000;
        }
        
        /* Position the "next button" to the right */
        .next {
            position: absolute;
            left: 557px;
            border-radius: 3px 0 0 3px;
        }
        
        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
        
        .prev {
            position: absolute;
            left: 0px;
        }
        
        /* Caption text */
        .text {
            background-color: rgba(242, 242, 242, 0.5);
            color: #f2f2f2;
            font-size: 40px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 600px;
            text-align: center;
        }
        
        /* Number text (1/4 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }
        
        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            position: relative;
            left: -60px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }
        
        .active,
        .dot:hover {
            background-color: #717171;
        }
        
        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
            width: 600px;
            height: 600px;
        }
        
        @keyframes fade {
            from {
                opacity: .4
            }
            to {
                opacity: 1
            }
        }
        
        .all {
            position: relative;
            top: 100px;
        }
        
        .sub {
            color: #003300;
            text-align: center;
            text-shadow: 2px 2px 4px #000000;
        }
		input[type=submit]:hover {
  background-color: rgba(242, 242, 242, 0.5);
  color: #003300;
  border: 1px solid #003300;
}
input[type=submit] {
  width: 60%;
  background-color:#003300;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

    </style>
    <script type="text/javascript">
        var quantity = 0;
        var str = "<form action='http://www.google.com'>" + "<p><input type='submit'" + "value='Book'></p></form>";

        function quantity() {
            if ( quantity == 0 ) {
                x.disabled = true;
                x.setAttribute( value, "Unavailable" );
            }
        }

        function start() {
            var x = document.getElementById( "not" );
            x.addEventListener( "click", quantity, false );
        }
        window.addEventListener( "load", start, false );
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
    <div class="word">
        <h2>Gallery</h2>
    </div>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <a href="#skin">
                <div class="numbertext">1 / 4</div>
                <img src="skin.jpg" style="width:600px; height:600px;">
                <div class="text">Skin Care</div>
            </a>
        </div>
        <div class="mySlides fade">
            <a href="#nails">
                <div class="numbertext">2 / 4</div>
                <img src="nails.jpg" style="width:600px; height:600px;">
                <div class="text">Nails</div>
            </a>
        </div>
        <div class="mySlides fade">
            <a href="#scrub">
                <div class="numbertext">3 / 4</div>
                <img src="scrub.jpg" style="width:600px; height:600px;">
                <div class="text">Body Scrub</div>
            </a>
        </div>
        <div class="mySlides fade">
            <a href="#msg">
                <div class="numbertext">4 / 4</div>
                <img src="msg.jpg" style="width:600px; height:600px;">
                <div class="text">Body Massage</div>
            </a>
            </div>
        <a
 class="prev" onclick="plusSlides(-1)">&#10094;</a> <a class="next" onclick="plusSlides(1)">&#10095;</a> </div>
    <br>
    <div style="text-align:center"> <span class="dot" onclick="currentSlide(1)"></span> <span class="dot" onclick="currentSlide(2)"></span> <span class="dot" onclick="currentSlide(3)"></span> <span class="dot" onclick="currentSlide(4)"></span> </div>
    <script>
        var slideIndex = 1;
        showSlides( slideIndex );

        function plusSlides( n ) {
            showSlides( slideIndex += n );
        }

        function currentSlide( n ) {
            showSlides( slideIndex = n );
        }

        function showSlides( n ) {
            var i;
            var slides = document.getElementsByClassName( "mySlides" );
            var dots = document.getElementsByClassName( "dot" );
            if ( n > slides.length ) {
                slideIndex = 1
            } <!-- forr the last slide to go back to the first-->   
            if ( n < 1 ) {
                slideIndex = slides.length
            } <!-- oppisite-->
            for ( i = 0; i < slides.length; i++ ) { <!--to hide other pictures when sliding-->
                slides[ i ].style.display = "none";
            }
            for ( i = 0; i < dots.length; i++ ) {
                dots[ i ].className = dots[ i ].className.replace( " active", "" );
            }
            slides[ slideIndex - 1 ].style.display = "block";
            dots[ slideIndex - 1 ].className += " active";
        }
        
        function validate(status)
        {
            if(status == "BOOKED")
            {
                alert("Already Booked!");
                return false;
            }
            else
                return true;
        }
    </script>
    <div class="all">
        <h2 class="sub" id="skin">Skin Care</h2>
        <?php
        $query = "SELECT * FROM `items` WHERE `category_name` = 'Skin Care'";
        if ( !( $result = mysqli_query( $database, $query ) ) )
            die( "Couldn't execute database query." );
        while ( $row = mysqli_fetch_row( $result ) ) {
            echo
                "<div class='gallery'> 
                    <a> 
                        <img src='" . $row[5] . "' alt='Cinque Terre' width='600' height='400'> </a>
                    <div class='desc'>Item name:" . $row[ 1] . "<br>
                      Item ID:" . $row[ 0] . "<br>
                      Booking Price:" . $row[ 2 ] . "<br>
                      Category:" . $row[ 3 ] . "<br>
                      Quantity:" . $row[ 4 ] . "<br>
                      Item Status:" . $row[ 6 ] . "<br>
                      <form action='Booking.php?item_id=".$row[ 0]."&category=".$row[3]."' method='POST' onclick='return validate(\"".$row[ 6 ]."\")'>
                        <p>
                          <input id='not' type='submit' value='Book'>
                        </p>
                      </form>
                    </div>
                  </div>";
        }

        ?>

    </div>
    <div class="all">
        <h2 class="sub" id="nails">Nails</h2>
        
        <?php
        $query = "SELECT * FROM `items` WHERE `category_name` = 'Nails'";
        if ( !( $result = mysqli_query( $database, $query ) ) )
            die( "Couldn't execute database query." );
        while ( $row = mysqli_fetch_row( $result ) ) {
            echo
                "<div class='gallery'> 
                    <a> 
                        <img src='" . $row[5] . "' alt='Cinque Terre' width='600' height='400'> </a>
                    <div class='desc'>Item name:" . $row[ 1] . "<br>
                      Item ID:" . $row[ 0] . "<br>
                      Booking Price:" . $row[ 2 ] . "<br>
                      Category:" . $row[ 3 ] . "<br>
                      Quantity:" . $row[ 4 ] . "<br>
                      Item Status:" . $row[ 6 ] . "<br>
                      <form action='Booking.php?item_id=".$row[ 0]."&category=".$row[3]."' method='POST' onclick='return validate(\"".$row[ 6 ]."\")'>
                        <p>
                          <input id='not' type='submit' value='Book'>
                        </p>
                      </form>
                    </div>
                  </div>";
        }

        ?>
    </div>
    <div class="all">
        <h2 class="sub" id="scrub">Body Scrub</h2>
        <?php
        $query = "SELECT * FROM `items` WHERE `category_name` = 'Body Scrub'";
        if ( !( $result = mysqli_query( $database, $query ) ) )
            die( "Couldn't execute database query." );
        while ( $row = mysqli_fetch_row( $result ) ) {
            echo
                "<div class='gallery'> 
                    <a> 
                        <img src='" . $row[5] . "' alt='Cinque Terre' width='600' height='400'> </a>
                    <div class='desc'>Item name:" . $row[ 1] . "<br>
                      Item ID:" . $row[ 0] . "<br>
                      Booking Price:" . $row[ 2 ] . "<br>
                      Category:" . $row[ 3 ] . "<br>
                      Quantity:" . $row[ 4 ] . "<br>
                      Item Status:" . $row[ 6 ] . "<br>
                      <form action='Booking.php?item_id=".$row[ 0]."&category=".$row[3]."' method='POST' onclick='return validate(\"".$row[ 6 ]."\")'>
                        <p>
                          <input id='not' type='submit' value='Book'>
                        </p>
                      </form>
                    </div>
                  </div>";
        }

        ?>
    </div>
    <div class="all">
        <h2 class="sub" id="msg">Body Massage</h2>
        <?php
        $query = "SELECT * FROM `items` WHERE `category_name` = 'Body Massage'";
        if ( !( $result = mysqli_query( $database, $query ) ) )
            die( "Couldn't execute database query." );
        while ( $row = mysqli_fetch_row( $result ) ) {
            echo
                "<div class='gallery'> 
                    <a> 
                        <img src='" . $row[5] . "' alt='Cinque Terre' width='600' height='400'> </a>
                    <div class='desc'>Item name:" . $row[ 1] . "<br>
                      Item ID:" . $row[ 0] . "<br>
                      Booking Price:" . $row[ 2 ] . "<br>
                      Category:" . $row[ 3 ] . "<br>
                      Quantity:" . $row[ 4 ] . "<br>
                      Item Status:" . $row[ 6 ] . "<br>
                      <form action='Booking.php?item_id=".$row[ 0]."&category=".$row[3]."' method='POST' onclick='return validate(\"".$row[ 6 ]."\")'>
                        <p>
                          <input id='not' type='submit' value='Book'>
                        </p>
                      </form>
                    </div>
                  </div>";
        }

        ?>
    </div>
	<br><br><br><br><br><br>
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