<?php
    

    $serverName = "DESKTOP-JCOUO6F\SQLEXPRESS"; //serverName\instanceName

    // Since UID and PWD are not specified in the $connectionInfo array,
    // The connection will be attempted using Windows Authentication.
    $connectionInfo = array( "Database"=>"theaterDB");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    
    if( $conn === false ) {
         die( print_r( sqlsrv_errors(), true));
    }


    if(isset($_POST['username_user']) && isset($_POST['password_user'])) {
            $user = $_POST['username_user'];
            $password = $_POST['password_user'];

        $sql = "SELECT * FROM accounts WHERE username = ? OR password_acc=?";
        $params = array($_POST['username_user'],$_POST['password_user']);

        $stmt = sqlsrv_query( $conn, $sql, $params);
        

        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
                if ($row[0] == $user && $row[2] == $password) {
                    header("Location: ../web/index.php");
                } else {
                    echo "Wrong Username or Password";
    
                }
            }
    }


      

?>