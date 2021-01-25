<?php
    if(isset($_GET['id_perfomance_get_del'])) {
        $sql = "DELETE FROM perfomanceInfo WHERE play_ID=?";

        $params = array($_GET['id_perfomance_get_del']);
        
        $stmt = sqlsrv_query( $conn, $sql,$params);

        header("Location: ../web_delete/delete_query_perfomanceI.php");
    }



?>