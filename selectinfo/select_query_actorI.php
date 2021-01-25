<?php 

    $sql = "SELECT * FROM actorInfo";
       
    $stmt = sqlsrv_query($conn, $sql);
    
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }
    echo "<table><tr> <th>Id</th> <th>first Name</th> <th>Last Name</th> <th>gender</th> <th>birthdate</th></tr>";

    if($stmt) {
        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
            echo '<tr>';
                for($j=0;$j<5;++$j) echo "<td>$row[$j]</td>";
            echo '</tr>';
        }
    }
        
        sqlsrv_free_stmt( $stmt);
       
       
    ?>