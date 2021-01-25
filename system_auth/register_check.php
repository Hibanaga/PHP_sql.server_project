<?php

    $errors = array(); 
    $serverName = "DESKTOP-JCOUO6F\SQLEXPRESS"; //serverName\instanceName

    // Since UID and PWD are not specified in the $connectionInfo array,
    // The connection will be attempted using Windows Authentication.
    $connectionInfo = array( "Database"=>"theaterDB");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    
    if( $conn === false ) {
         die( print_r( sqlsrv_errors(), true));
    }
    
    if(isset($_POST['username_reg']) && isset($_POST['email_reg']) && isset($_POST['password_reg'])) {
            $user_reg = $_POST['username_reg'];
            $email_reg = $_POST['email_reg'];
            $pass_reg = $_POST['password_reg'];

            // $sql_quest = "SELECT * FROM accounts WHERE username = ? ";
            // $params_quest = array($user_reg);
            // $stmt_quest = sqlsrv_query( $conn, $sql_quest, $params_quest);
            // while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC)){
            //     if ($row[0] == $user_reg) {
            //         echo "THIS USER ALREADY EXISTS";
            //         exit;
            //     }
            // }



            $sql = "INSERT INTO accounts(username,email,password_acc) VALUES (?,?,?)";

            $params = array($user_reg,$email_reg,$pass_reg);

            $stmt = sqlsrv_query( $conn, $sql, $params);

            if ($stmt) {
                header("Location: login.php");
            }
    }


?>