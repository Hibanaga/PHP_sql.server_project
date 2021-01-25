<?php 
if(isset($_POST['id_change_actor']) && isset($_POST['name_change_actor']) && isset($_POST['surname_change_actor']) && isset($_POST['sex_change_actor'])   && isset($_POST['birth_change_actor'])){


        $sql = "UPDATE actorInfo SET fName = ?,lName=?,sex=?,birthDate=? WHERE actor_ID = ?";
    $params = array($_POST['name_change_actor'],$_POST['surname_change_actor'],$_POST['sex_change_actor'],$_POST['birth_change_actor'],$_POST['id_change_actor']);

    $stmt = sqlsrv_query( $conn, $sql, $params);
    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
    }
    header("Location: ../web_update/update_query_actorI.php");

} 

 // если запрос GET
 if(isset($_GET['id_actor_get']))
 {   
     
    $sql = "SELECT * FROM actorInfo WHERE actor_ID=?";
    $params = array($_GET['id_actor_get']);

    $stmt = sqlsrv_query( $conn, $sql,$params);
        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
            // echo $row[0].", ".$row[1]."<br />";
            $id = $row[0];
            $name = $row[1];
            $surname = $row[2];
            $sex = $row[3];
            $birthDate=$row[4];
            

            echo "<div class='update_query'>
            <form action='' method='post'>
                <h2 class='h2_info'>Updating actor data</h2>
                <input type='hidden' value='$id' name='id_change_actor' >
                <p class='p_info'> Adding a new actor name:
                    <input type='text' value='$name' name='name_change_actor' class='actor_change_name' maxlength='30'>
                </p>
                
                <p class='p_info'> Adding a new actor's surname:
                    <input type='text' value='$surname' name='surname_change_actor' class='actor_change_surname' maxlength='30'>
                </p>
        
                <p class='p_info'> Adding a new gender to the actor
                    <select name='sex_change_actor' value='$sex' class='actor_change_sex'>
                        <option value='M'>M</option>
                        <option value='W'>W</option>
                    </select>
                </p>
        
                <p class='p_info'> Adding a new date of birth:
                    <input type='date' value='$birthDate' name='birth_change_actor' class='actor_change_birth'>
                </p>
        
                <button class='button'>
                    Change Actor 
                </button>
            </form>
        </div>";
        }

        
    }
    
?>