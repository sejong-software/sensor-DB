<?php

    $s =mysqli_connect("localhost","root","607610") or die("실패입니다.");
    mysqli_select_db($s, "db1");

    $tof_p = $_POST["tof_se"];
    $re = mysqli_query($s,"SELECT * FROM tof WHERE tof_name LIKE '%$tof_p%'");

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





?>