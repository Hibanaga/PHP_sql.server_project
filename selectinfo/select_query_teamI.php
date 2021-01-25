<?php 
        $sql = "SELECT * FROM teamInfo";
       
    $stmt = sqlsrv_query($conn, $sql);
    
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }
    echo "<table><tr> <th>Id</th> <th>play_ID</th> <th>actor_ID</th> <th>role</th> <th>main Team</th> <th>gender</th></tr>";

    // retrieve date as string
    $date = sqlsrv_get_field($stmt, 4, SQLSRV_PHPTYPE_STRING("UTF-8"));
        echo "$date";
   


    if($stmt) {
        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
            echo '<tr>';
                for($j=0;$j<6;++$j) echo "<td>$row[$j]</td>";
            echo '</tr>';
        }
    }
        
        sqlsrv_free_stmt( $stmt);

      
    ?>