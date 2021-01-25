<?php
    
    if (isset($_GET['id_actor_get_del'])) {
        $sql = "DELETE FROM teamInfo WHERE actor_ID=? ";
        $sql_quest = "DELETE FROM actorInfo WHERE actor_ID=?";
        $params = array($_GET['id_actor_get_del']);
        $params_quest = array($_GET['id_actor_get_del']);

        $stmt = sqlsrv_query( $conn, $sql,$params);
        $stmt_quest = sqlsrv_query( $conn, $sql_quest,$params_quest);

        header("Location: ../web_delete/delete_query_actorI.php");
    }

    
?>