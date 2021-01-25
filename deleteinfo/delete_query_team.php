<?php
    if(isset($_GET['id_team_get_del'])) {
        $sql = "exec dropOrderTIproc @tempTeamID=?";

        $params = array($_GET['id_team_get_del']);
        
        $stmt = sqlsrv_query( $conn, $sql,$params);

        header("Location: ../web_delete/delete_query_teamI.php");
    }



?>