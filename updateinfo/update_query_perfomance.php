<?php 
if(isset($_POST['id_change_perfomance']) && isset($_POST['name_change_perfomance']) && isset($_POST['genre_change_perfomance']) && isset($_POST['author_change_perfomance']) && isset($_POST['dirID_change_perfomance']) && isset($_POST['premier_change_perfomance']) && isset($_POST['last_change_perfomance'])){


        $sql = "UPDATE perfomanceInfo SET name_p = ?,genre = ?,author = ?,dir_ID = ?,premiereDate = ?,lastDate = ? 
        WHERE play_ID = ?";
    $params = array($_POST['name_change_perfomance'], $_POST['genre_change_perfomance'],$_POST['author_change_perfomance'],$_POST['dirID_change_perfomance'],$_POST['premier_change_perfomance'],$_POST['last_change_perfomance'],$_POST['id_change_perfomance']);

    $stmt = sqlsrv_query( $conn, $sql, $params);
    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
    }
    header("Location: ../web_update/update_query_perfomanceI.php");

} 

 // если запрос GET
 if(isset($_GET['id_perfomance_get']))
 {   
     
    $sql = "SELECT * FROM perfomanceInfo WHERE play_ID=?";
    $params = array($_GET['id_perfomance_get']);

    $stmt = sqlsrv_query( $conn, $sql,$params);
        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
            // echo $row[0].", ".$row[1]."<br />";
            $id = $row[0];
            $name = $row[1];
            $genre = $row[2];
            $author = $row[3];
            $dirID = $row[4];
            $premier = $row[5];
            $lastD = $row[6];
            

            echo "<form action='' method='post' class='update_perfomance'>
            <h2 class='h2_info'>Updating Perfomance data</h2>
            <input type='hidden' value='$id' name='id_change_perfomance'>
            <p class='p_info'> Adding a new perfomance name:
                <input type='text' value='$name' name='name_change_perfomance' class='perfomance_change_name' maxlength='30'>
            </p>
            
            <p class='p_info'> Adding a new perfomance genre:
                <select name='genre_change_perfomance' value='$genre' class='perfomance_change_genre'>
                    <option value='comedy'>comedy</option>
                    <option value='tragedy'>tragedy</option>
                    <option value='melodrama'>melodrama</option>
                    <option value='political theatre'>political theatre</option>
                    <option value='physical theatre'>physical theatre</option>
                    <option value='commedia dell’arte'>commedia dell’arte</option>
                </select>
            </p>

            <p class='p_info'> Adding a new author perfomance :
                <input type='text' value='$author' name='author_change_perfomance' class='perfomance_change_author' maxlength='30'>
            </p>

            <p class='p_info'> Adding a new id of producer:
                <input type='number' value='$dirID' name='dirID_change_perfomance' class='perfomance_change_dirID' min='1'>
            </p>

            <p class='p_info'> Adding a new premier date of perfomance:
                <input type='date' value='$premier' name='premier_change_perfomance' class='perfomance_change_premier' min='1900-01-01'>
            </p>

            <p class='p_info'> Adding a new last date of perfomance:
                <input type='date' value='$lastD' name='last_change_perfomance' class='perfomance_change_last' min='1900-01-01'>
            </p>

                <button class='button'>
                    Change Director
                </button>
            </form>";
        }

        
    }
    
?>