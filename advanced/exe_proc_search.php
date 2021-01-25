<?php
    if(isset($_GET['id_proc_get'])) {
        $sql = "EXEC SelectPlayIDproc @tempPlay_ID=?";

        $params = array($_GET['id_proc_get']);

        $stmt = sqlsrv_query($conn,$sql,$params);


       
        echo "<table><tr><th>Name</th> <th>Genre</th> <th>fName</th> <th>lName</th></tr>";
        while ($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC)) {
            
            echo '<tr>';
                for($j=0;$j<4;++$j) echo "<td>$row[$j]</td>";
            echo '</tr>';
        }
            
        sqlsrv_free_stmt( $stmt);
    }

?>