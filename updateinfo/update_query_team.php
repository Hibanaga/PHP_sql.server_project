

<?php 
if(isset($_POST['id_change_team']) && isset($_POST['playID_change_team']) && isset($_POST['actorID_change_team'])
&& isset($_POST['role_change_team']) && isset($_POST['mainteam_change_team']) && isset($_POST['gender_change_team'])){


        $sql = "exec updateOrderTIproc @tempTeamID=?,@tempPlayID=?,@tempActorID=?,@tempRole=?,@tempMainTeam=?,@tempSex=?";
    $params = array($_POST['id_change_team'],$_POST['playID_change_team'],$_POST['actorID_change_team'],$_POST['role_change_team'],$_POST['mainteam_change_team'],$_POST['gender_change_team']);

    $stmt = sqlsrv_query( $conn, $sql, $params);
    if( $stmt === false ) {
        die( print_r( sqlsrv_errors(), true));
    }
    header("Location: ../web_update/update_query_teamI.php");

} 

 // если запрос GET
 if(isset($_GET['id_team_get']))
 {   
     
    $sql = "SELECT * FROM teamInfo WHERE team_ID=?";
    $params = array($_GET['id_team_get']);

    $stmt = sqlsrv_query( $conn, $sql,$params);
        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
            // echo $row[0].", ".$row[1]."<br />";
            $teamID = $row[0];
            $playID = $row[1];
            $actorID = $row[2];
            $role = $row[3];
            $mainteam = $row[4];
            $gender = $row[5];

            echo "<form action='' method='post'>
            <h2 class='h2_info'>Updating team data</h2>
            <input type='hidden' value='$teamID' name='id_change_team'>
            <p class='p_info'> Adding a new playID:
                <input type='number' value='$playID' name='playID_change_team' class='team_change_playID' min='1'>
            </p>
            
            <p class='p_info'> Adding a new actorID:
                <input type='number' value='$actorID' name='actorID_change_team' class='team_change_actorID' min='1'>
            </p>

            <p class='p_info'> Adding a new role:
                <input type='text' value='$role' name='role_change_team' class='team_change_role' maxlength='30'>
            </p>

            <p class='p_info'> Adding a new mainteam:
                <input type='text' value='$mainteam' name='mainteam_change_team' class='team_change_mainteam' maxlength='30'>
            </p>

            <p class='p_info'> Adding a new mainteam:
                <select name='gender_change_team' value='$gender' class='team_change_gender'>
                    <option value='M'>M</option>
                    <option value='W'>W</option>
                </select>
            </p>

                <button class='button'>
                    Change Actor 
                </button>
            </form>";
        }

        
    }
    
?>
