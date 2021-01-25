<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style_index.css">
    <title>Document</title>
</head>
<body>
<?php require_once '../connection.php'?>
    <header class='header'>
        <div class="container">
            <div class="row row_head">
               <a href="index.php" class='link_head'><img src="../images/logo.png" alt="" class='img_logo'></a>

                <a href="insert_query_actorI.php" class='link_insert'>Insert Actor</a>
                <a href="insert_query_directorI.php" class='link_insert'>Insert Director</a>
                <a href="insert_query_perfomanceI.php" class='link_insert'>Insert Perfomance</a>
                <a href="insert_query_teamI.php" class='link_insert'>Insert Team</a>
                <a href="index.php" class='home_link'><img src="../images/home.png" alt=""></a>
            </div>
        </div>    
    </header>

    <?php require_once '../insertinfo/insert_query_team.php'?>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="add_info add_info_team">
                    <form action="" method="post">
                        <h2 class="h2_info">
                            Adding new team
                        </h2>

                        <p class="p_info">Enter id staging:
                            <input type="number" name='playid_team' class='team_input_playID' min='1'>
                        </p>

                        <p class="p_info">Enter actor ID in the team:
                            <input type="number" name='actorid_team' class='team_input_actorID' min='1'>
                        </p>

                        <p class="p_info"> Enter the role in the team:
                            <input type="text" name='role_team' class='team_input_role' maxlength='30'>
                            
                        </p>

                        <p class="p_info"> Enter mainteam in the team:
                            <input type="text" name='main_team' class='team_input_mainTeam' maxlength='30'>
                        </p>

                        <p class='p_info'> Enter gender in the team:
                            <select name="gender_team" id="" class='team_input_gender'>
                                <option value="">select the gender</option>
                                <option value="M">M</option>
                                <option value="W">W</option>
                            </select>
                        </p>

                        <button class='btn_add'>
                            <span class='btn_add_span'>Add Team</span>
                       </button>

                    </form>
                </div>

                <div class="select_info_actor">
                    <?php require_once '../selectinfo/select_query_teamI.php'?>
                </div>

            </div>
        </div>
    </section>


   
</body>
</html>