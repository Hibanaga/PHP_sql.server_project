<?php 
    if(isset($_POST['name_perfomance']) && isset($_POST['genre_perfomance']) && isset($_POST['author_perfomance']) && isset($_POST['dirID_perfomance']) && isset($_POST['premier_perfomance']) && isset($_POST['last_perfomance'])){
    
    
        $sql = 'INSERT INTO perfomanceInfo (name_p,genre,author,dir_ID,premiereDate,lastDate) VALUES (?,?,?,?,?,?)';
        $params = array($_POST['name_perfomance'],$_POST['genre_perfomance'],$_POST['author_perfomance'],$_POST['dirID_perfomance'],$_POST['premier_perfomance'],$_POST['last_perfomance']);

        $stmt = sqlsrv_query( $conn, $sql, $params);
        if( $stmt === false ) {
            die( print_r( sqlsrv_errors(), true));
        }
    }

   // header("Location: ../web/insert_query_perfomanceI.php");
?>