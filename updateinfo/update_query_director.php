

<?php 
if(isset($_POST['id_change_director']) && isset($_POST['name_change_director']) && isset($_POST['surname_change_director']) && isset($_POST['theater_change_director'])){


        $sql = "UPDATE directorInfo SET fName = ?,lName = ?,theaterName = ? WHERE dir_ID = ?";
    $params = array($_POST['name_change_director'],$_POST['surname_change_director'],$_POST['theater_change_director'],$_POST['id_change_director']);

    $stmt = sqlsrv_query( $conn, $sql, $params);
    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
    }
    header("Location: ../web_update/update_query_directorI.php");

} 

 // если запрос GET
 if(isset($_GET['id_director_get']))
 {   
     
    $sql = "SELECT * FROM directorInfo WHERE dir_ID=?";
    $params = array($_GET['id_director_get']);

    $stmt = sqlsrv_query( $conn, $sql,$params);
        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
            // echo $row[0].", ".$row[1]."<br />";
            $id = $row[0];
            $name = $row[1];
            $surname = $row[2];
            $theater = $row[3];
            

            echo "<div class='update_query'>
            <form action='' method='post'>
                <h2 class='h2_info'>Updating producer data</h2>
                <input type='hidden' value='$id' name='id_change_director'>
                <p class='p_info'> Adding a new producer's name:
                    <input type='text' value='$name' name='name_change_director' class='director_change_name' maxlength='30'>
                </p>
                
                <p class='p_info'> Adding a new producer's surname:
                    <input type='text' value='$surname' name='surname_change_director' class='director_change_surname' maxlength='30'>
                </p>
        
                <p class='p_info'> Adding a new theater's name:
                    <input type='text' value='$theater' name='theater_change_director' class='director_change_theater' maxlength='50'>
                </p>
        
                <button class='button'>
                    Change Director
                </button>
            </form>
        </div>";
        }

        
    }
    
?>

