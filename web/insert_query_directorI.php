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
        <?php require_once '../insertinfo/insert_query_directorI.php'?>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="add_info add_info_director">
                    <form action="" method="post">
                        <h2 class='h2_info'>Adding a new producer </h2>

                        <p class='p_info'>New Producer Name:
                            <input type="text" name='name_director' class='director_input_name' maxlength='30'>
                        </p>    

                        <p class="p_info">Surname of the new producer:
                            <input type="text" name='surname_director' class='director_input_surname' maxlength='30'>
                        </p>
                        
                        <p class='p_info'>The name of the theater where the producer works:
                            <input type="text" name='theater_name' class='director_input_theatre' maxlength='50'>
                        </p>

                        <button class='btn_add'>
                            <span class='btn_add_span'>Add Director</span>
                       </button>
                    </form>
                </div>

                <div class="select_info_actor">
                    <?php require_once '../connection.php'?>    
                    <?php require_once '../selectinfo/select_query_directorI.php'?>
                </div>
            </div>
        </div>
    </section>


   
</body>
</html>