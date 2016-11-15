<?php

/**
 * Created by Daen Rebel & Pim Immink
 * User: Daen & Pim
 * Date: 10/11/2016
 * Time: 14:19
 */

class connect
{
    public $connsql;

    public function makeconn($arg1){
        $db_name = "mobile";
        $db_user = "rooster_student";
        $db_passwd = "GLURooster";

        // $con = mysqli_connect("localhost",$db_user,$db_passwd,$db_name);
        // $con = mysqli_connect("rooster.glu.nl",$db_user,$db_passwd,$db_name);
        $con = mysqli_connect("rooster.glu.nl/overview/class/data?d=Untis&_=1479205442197",$db_user,$db_passwd,$db_name);

        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($con, $arg1);

        return $result;
    }

}

?>