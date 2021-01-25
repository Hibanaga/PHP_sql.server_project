<?php 
  

        $sql = "SELECT * FROM perfomanceInfo";
       
    $stmt = sqlsrv_query($conn, $sql);
    
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }
    echo "<table><tr> <th>Id</th> <th>name perfomance</th> <th>genre</th> <th>author</th> <th>dir_ID</th> <th>premierDate</th> <th>Last Date</th></tr>";
    

    // retrieve date as string
    $date = sqlsrv_get_field($stmt, 4, SQLSRV_PHPTYPE_STRING("UTF-8"));
        echo "$date";
   


    if($stmt) {
        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
            echo '<tr>';
                for($j=0;$j<7;++$j) echo "<td>$row[$j]</td>";
            echo '</tr>';
        }
    }
        
    
  


        sqlsrv_free_stmt( $stmt);
       

    ?>