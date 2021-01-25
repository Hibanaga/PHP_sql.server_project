<?php
    if(isset($_GET['id_proc_director_get'])) {

        $sql = "exec SelectPerfomance @tempPlay_ID=?";

        $params = array($_GET['id_proc_director_get']);

        $stmt = sqlsrv_query($conn,$sql,$params);


        echo "<table><tr><th>Name Director</th> <th>Surname Director</th> <th>Theater Name</th> <th>Premier Date</th> <th>Last Date</th></tr>";

        while ($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC)) {
            
            echo '<tr>';
                for($j=0;$j<5;++$j) echo "<td>$row[$j]</td>";
            echo '</tr>';
        }

        sqlsrv_free_stmt( $stmt);

       
    }

?>