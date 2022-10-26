<!doctype html> <!-- base de la page html-->
<html lang="en"> <!-- Initialise la langue de la page en anglais-->

    <!-- DEBUT EN-TETE -->

    <head> 
        <meta charset="utf-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mon Cv</title> <!-- titre de l'onglet-->
        <link rel="icon" type="image/png" sizes="16x16" href="image/icononglet.png"> <!-- icon en haut de l'onglet-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> <!-- donne une bibliothèque bootstrap utile pour la réalisation de page web et ici utile pour la responsive-->
        <link rel="stylesheet" href="css/admin.css"> <!-- relie le css au html-->
    </head>

    <body>
        

        <section class="fond">
            <video autoplay loop muted>
                <source src="video/waves.mp4">
            </video>
            <div class="content">
                <div class="slider">
                    <div class="card">
                        <h3 class="title"> Espace Administrateur</h3>
                        <span class="logo"></span>
                        <?php include_once "script_login.php" ?>
                        <?php if(isset($erreur)) 
                        {
                            echo "$erreur";
                        }
                        ?>

                        <form action="" method="post">
                            <hr>
                            <label for="Username">Username:</label>
                            <br>
                            
                            <input class="Username" type="text" name="Username" placeholder="Username" required>
                            <br>
                            <label for="Username">Password:</label>
                            <br>
                            <input class="Password" type="password" name="password" placeholder="password" required>
                            <br><br>
                            <button type="submit" name="submit">Se connecter</button>
                        </form>
                    </div>
                </div>
            </div>

        </section>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>      
    </body>
