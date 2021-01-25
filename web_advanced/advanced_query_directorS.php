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

                <a href="advanced_query_search.php" class='link_insert margin_link'>Actors and Perfomance</a>
                <a href="advanced_query_directorS.php" class='link_insert margin_link'>Perfomances Date</a>

                <div class="block_search_actor_get search_margin">
                    <form action="" method="get">
                        <input type="number" name='id_proc_director_get' class='search_input'>
                        <input type="submit" value='' class='edit_btn'>
                    </form>
                </div>
            </div>
        </div>    
    </header>


    <section class="section">
        <div class="container">
            <div class="row">
                <div class="advanced_block">
                    <?php require_once '../connection.php'?>
                    <?php require_once '../advanced/exec_proc_director_serch.php'?>
                </div>
            </div>
        </div>
    </section>


</body>
</html>