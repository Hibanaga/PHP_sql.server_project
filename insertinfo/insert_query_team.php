<?php

if(isset($_POST['playid_team']) && isset($_POST['actorid_team']) && isset($_POST['role_team']) && isset($_POST['main_team']) && isset($_POST['gender_team']) ){
    
    
    $sql = 'exec AddNewTIproc @tempPlayID=?,@tempActorID=?,@temoRole=?,@tempMainTeam=?,@tempSex=?';
    $params = array($_POST['playid_team'],$_POST['actorid_team'],$_POST['role_team'],$_POST['main_team'],$_POST['gender_team']);

    $stmt = sqlsrv_query( $conn, $sql, $params);
    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
    }

}


?>