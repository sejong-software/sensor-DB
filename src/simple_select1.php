<?php
    $s =mysqli_connect("localhost","root","607610") or die("Fail.");
    mysqli_select_db($s, "db1");

    $res = mysqli_query($s ,"SHOW TABLES");
    while($cRow = mysqli_fetch_array($res))
    {
        print $cRow[0];
        print " <br>";
    }
    
    $re = mysqli_query($s,"SELECT * FROM tof3");

    print  " id  | tof_name | Manufacturer | FOV_V | FOV_H<BR>";
    $col_count = 5;

    echo "<table>";
    while($result = mysqli_fetch_array($re)){
        echo "<tr>";
        $col_index = 0;
        
        while($col_index < $col_count){
            echo "<td>$result[$col_index]</td>";
            $col_index = $col_index +1 ;
            
            }
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($s);
    print " <br><a href='send1.html'>메인 화면</a>"

    /*
        while($result = mysqli_fetch_array($re)){

            print $result[0];
            print "\t";
            print $result[1];
            print "\t";
            print $result[2];
            print "\t";
            print $result[3];
            print "\t";
            print $result[4];
            print "<BR>";
            }
            */


?>