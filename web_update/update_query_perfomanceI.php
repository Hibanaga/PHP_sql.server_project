<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style_index.css">
    <link rel="stylesheet" href="../styles/style_update.css">
    <title>Document</title>
</head>
<body class='body_update'>
<?php require_once '../connection.php'?>
    <header class='header'>
        <div class="container">
            <div class="row row_head">
               <a href="../web/index.php" class='link_head'><img src="../images/logo.png" alt="" class='img_logo'></a>

                <a href="update_query_actorI.php" class='link_insert'>Update Actor</a>
                <a href="update_query_directorI.php" class='link_insert'>Update Director</a>
                <a href="update_query_perfomanceI.php" class='link_insert'>Update Perfomance</a>
                <a href="update_query_teamI.php" class='link_insert'>Update Team</a>


                <div class="block_search_actor_get">
                    <form action="" method="get">
                        <input type="number" name='id_perfomance_get' class='search_input'  min='1'>
                        <input type="submit" value='' class='edit_btn'>
                    </form>
                </div>
            </div>
        </div>    
    </header>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="update_row row_perfomance">
                    <?php require_once '../updateinfo/update_query_perfomance.php'?>
                </div>

                <div class="select_query select_query_perfomance">
                <?php require_once '../selectinfo/select_query_perfomance.php'?>
                </div>
            </div>
        </div>
    </section>


    
</body>
</html>