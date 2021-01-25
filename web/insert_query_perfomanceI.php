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
        <?php require_once '../insertinfo/insert_query_perfomance.php'?>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="add_info add_info_perfomance">
                    <form action="" method="post">
                        <h2 class='h2_info'>Adding a new production</h2>
                        <p class="p_info">Enter the name of the production:
                            <input type="text" name='name_perfomance' class='perfomance_input_name' maxlength='50'>
                        </p>

                        <p class="p_info"> Enter the genre of the production:
                            <select name="genre_perfomance" id="" class='perfomance_input_genre'>
                                <option value="comedy">comedy</option>
                                <option value="tragedy">tragedy</option>
                                <option value="melodrama">melodrama</option>
                                <option value="political theatre">political theatre</option>
                                <option value="physical theatre">physical theatre</option>
                                <option value="commedia dell’arte">commedia dell’arte</option>
                            </select>
                        </p>

                        <p class="p_info"> Enter the author of the production:
                            <input type="text" name='author_perfomance' class='perfomance_input_author' maxlength='30'>
                        </p>

                        <p class="p_info">Enter the ID of the production manager:
                            <input type="number" name ='dirID_perfomance' class='perfomance_input_dirID' min='1' max='100'>
                        </p>

                        <p class="p_info">Enter the premiere date of the production:
                            <input type="date" name='premier_perfomance' class='perfomance_input_premier' min='1900-01-01'>
                        </p>

                        <p class="p_info">Enter the last date of the production:
                            <input type="date" name='last_perfomance' class='perfomance_input_last' min='1900-01-01'>
                        </p>

                        <button class='btn_add btn_add_perfomance'>
                            <span class='btn_add_span'>Add Perfomance</span>
                        </button>
                    </form>
                </div>
                
                <div class="select_info_actor">
                    <?php require_once '../connection.php'?>
                    <?php require_once '../selectinfo/select_query_perfomance.php'?>
                </div>
            </div>
        </div>
    </section>


    

</body>
</html>