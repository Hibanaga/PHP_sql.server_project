<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style_index.css">
    <link rel="stylesheet" href="../styles/style_update.css">
    <title>Document</title>
</head>
<body>
<header class='header'>
        <div class="container">
            <div class="row row_head">
               <a href="../web/index.php" class='link_head'><img src="../images/logo.png" alt="" class='img_logo'></a>

                <a href="delete_query_actorI.php" class='link_insert'>Delete Actor</a>
                <a href="delete_query_directorI.php" class='link_insert'>Delete Director</a>
                <a href="delete_query_perfomanceI.php" class='link_insert'>Delete Perfomance</a>
                <a href="delete_query_teamI.php" class='link_insert'>Delete Team</a>

                <div class="block_search_actor_get">
                    <form action="" method="get">
                        <input type="number" name='id_perfomance_get_del' class='search_input'>
                        <input type="submit" value='' class='edit_btn'>
                    </form>
                </div>
            </div>
        </div>    
    </header>
    <?php require_once '../connection.php'?>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="select_query">
                    <?php require_once '../selectinfo/select_query_perfomance.php'?>
                </div>

                <div class="update_row">
                   
                    <?php require_once '../deleteinfo/delete_query_perfomance.php'?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>