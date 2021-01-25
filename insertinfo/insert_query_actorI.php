<?php 
if(isset($_POST['name_actor']) && isset($_POST['surname_actor']) && isset($_POST['sex_actor']) && isset($_POST['birthdate_actor'])){
 
   
     $sql = 'INSERT INTO actorInfo (fName,lName,sex,birthDate) VALUES (?,?,?,?)';
    $params = array($_POST['name_actor'],$_POST['surname_actor'],$_POST['sex_actor'],$_POST['birthdate_actor']);

    $stmt = sqlsrv_query( $conn, $sql, $params);
    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
    }
    
    header("Location: ../web/insert_query_actorI.php");
}
?>