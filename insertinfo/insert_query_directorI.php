<?php 
    if(isset($_POST['name_director']) && isset($_POST['surname_director']) && isset($_POST['theater_name'])){
    
    
        $sql = 'INSERT INTO directorInfo (fName,lName,theaterName) VALUES (?,?,?)';
        $params = array($_POST['name_director'],$_POST['surname_director'],$_POST['theater_name']);

        $stmt = sqlsrv_query( $conn, $sql, $params);
        if( $stmt === false ) {
            die( print_r( sqlsrv_errors(), true));
        }    
    }

   //header("Location: ../web/insert_query_director.php");
?>