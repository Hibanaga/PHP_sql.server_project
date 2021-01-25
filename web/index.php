
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

<link rel="stylesheet" href="../styles/style_index.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    

    <header class='header'>
        <div class="container">
            <div class="row row_head">
               <a href="index.php" class='link_head'><img src="../images/logo.png" alt="" class='img_logo'></a>


                <nav>
                    <ul class="nav_panel">
                        <li class='menu_toggle'><a href="" class='link_prewiew box'>Insert Info </a>
                            <ul class="drop_down">
                                <li><a href="insert_query_actorI.php" class='insert_actor_first box_link'>Insert into actors</a></li>
                                <li><a href="insert_query_directorI.php" class='insert_actor_first box_link'>Insert into directors</a></li>
                                <li><a href="insert_query_perfomanceI.php" class='insert_actor_first box_link'>Insert into perfomance</a></li>
                                <li><a href="insert_query_teamI.php" class='insert_actor_first box_link'>Insert into team</a></li>
                            </ul>
                    
                       </li>
                        <li class='menu_toggle'><a href="" class='link_prewiew box'>Update Info</a>
                            <ul class="drop_down">
                                <li><a href="../web_update/update_query_actorI.php" class='insert_actor_first box_link'>Update actors</a></li>
                                <li><a href="../web_update/update_query_directorI.php" class='insert_actor_first box_link'>Update directors</a></li>
                                <li><a href="../web_update/update_query_perfomanceI.php" class='insert_actor_first box_link'>Update perfomance</a></li>
                                <li><a href="../web_update/update_query_teamI.php" class='insert_actor_first box_link'>Update team</a></li>
                            </ul>
                         </li>
                        <li class='menu_toggle'><a href="" class='link_prewiew box'>Delete Info</a>
                            <ul class="drop_down">
                                <li><a href="../web_delete/delete_query_actorI.php" class='insert_actor_first box_link'>Delete from actors</a></li>
                                <li><a href="../web_delete/delete_query_directorI.php" class='insert_actor_first box_link'>Delete from directors</a></li>
                                <li><a href="../web_delete/delete_query_perfomanceI.php" class='insert_actor_first box_link'>Delete from perfomance</a></li>
                                <li><a href="../web_delete/delete_query_teamI.php" class='insert_actor_first box_link'>Delete from team</a></li>
                            </ul>
                        </li>

                        <li class='menu_toggle'><a href="" class='link_prewiew box'>Advanced</a>
                            <ul class="drop_down">
                                <li><a href="../web_advanced/advanced_query_search.php" class='insert_actor_first box_link'>Actors and Perfomance</a></li>
                                <li><a href="../web_advanced/advanced_query_directorS.php" class='insert_actor_first box_link'>Perfomances date</a></li>
                               
                            </ul>
                        </li>

                    </ul>  

                 
               </nav>
               <a href="../system_auth/login.php" class='exit_link'><img src="../images/exit.png" alt="" class='img_exit'></a>
            </div>
        </div>    
    </header>

    <section class="section_main">
        <div class="container">
            <div class="row">
               
            </div>
        </div>
    </section>

    <footer class="footer_main">
        <h2 class="h2_footer">
            © 2021 ALL RIGHTS RESERVED
        </h2>
    </footer>

    

   
  
    <script src='../scripts/jquery.js'></script>
    <script src='../scripts/main.js'></script>
</body>
</html>

