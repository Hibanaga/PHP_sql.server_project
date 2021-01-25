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
        <?php require_once '../insertinfo/insert_query_actorI.php'?>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="add_info">
                    <form action="" method="post">
                        <h2 class='h2_info'>Adding a new actor</h2>
                        <p class='p_info'>Enter the name of the new actor:
                            <input type="text" name='name_actor' class='actor_input_name' maxlength='30'>
                        </p>

                        <p class='p_info'>Enter the surname of the new actor:
                            <input type="text" name='surname_actor' class='actor_input_surname' maxlength='30'>
                        </p>

                        <p class='p_info'>Enter the gender of the new actor:
                            <select name="sex_actor" class='actor_input_gender'>
                                <option value="">select the gender</option>
                                <option value="M">M</option>
                                <option value="W">W</option>
                            </select>
                        </p>

                        <p class='p_info'>Enter the date of birth of the new actor:
                            <input type="date" name='birthdate_actor' class='actor_input_birth' min="1900-01-01" >
                        </p>

                       <button class='btn_add'>
                            <span class='btn_add_span'>Add Actor</span>
                       </button>
                    </form>
                </div>

                <div class="select_info_actor">
                    <?php require_once '../connection.php'?>
                    <?php require_once '../selectinfo/select_query_actorI.php'?>
                </div>
            </div>
        </div>
    </section>


   
    
</body>
</html>