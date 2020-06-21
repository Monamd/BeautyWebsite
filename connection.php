<?php
//Connect to Mysql
if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
    die( "Couldn't connect to database." );

//Connect to Booking_db
if ( !( mysqli_select_db( $database, "booking_db" ) ) )
    die( "Couldn't open booking_db." );

if($_GET["type"] == "booking")
{
   $q = "SELECT * FROM `booking_records` WHERE `item_id` = '" . $_GET[ "item_id" ] . "' AND `booking_date` = '" . $_GET[ "str" ] . "' AND `status` = 'ACTIVE'";
        $tmp = mysqli_query( $database, $q );
        if(mysqli_num_rows($tmp) > 0)
        {
            echo "Sorry! you can't book at this date and time!";
        }else
        {
            $query = "SELECT * FROM `items` WHERE `item_id` = '" . $_GET[ "item_id" ] . "'";
            $result = mysqli_query( $database, $query);

                if(mysqli_num_rows($result) > 0)
                {
                    $row = mysqli_fetch_row( $result );
                    if ( $row[ "4" ] >= $_GET[ "Quantity" ] ) {
                        echo "OK";
                    }else
                    {
                        echo "The Quantity more than what is available!";
                    }
                }else
                {
                    echo "Error in the ITEM ID or Category";
                }
           
        }
            
}elseif($_GET["type"] == "cancel_summary")
{
   $q = "SELECT * FROM `booking_records` WHERE `booking_id` = '" . $_GET[ "booking_id" ] . "' AND `status` = 'ACTIVE'";
        $tmp = mysqli_query( $database, $q );
        if(mysqli_num_rows($tmp) > 0)
        {
            echo "OK";
        }else
           echo "Error in the Booking ID";
}

?>