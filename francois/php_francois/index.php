<!doctype html> <!-- base de la page html-->
<html lang="en"> <!-- Initialise la langue de la page en anglais-->

    <!-- DEBUT EN-TETE -->

    <head> 
        <meta charset="utf-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mon Cv</title> <!-- titre de l'onglet-->
        <link rel="icon" type="image/png" sizes="16x16" href="image/icononglet.png"> <!-- icon en haut de l'onglet-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> <!-- donne une bibliothèque bootstrap utile pour la réalisation de page web et ici utile pour la responsive-->
        <link rel="stylesheet" href="css/style.css"> <!-- relie le css au html-->
    </head>

<!-- ~~~~~~~~~~~~~~~~~~~~ FIN EN-TETE ~~~~~~~~~~~~~~~~~~~~ -->

<!-- ~~~~~~~~~~~~~~~~~~~~ DEBUT CORPS ~~~~~~~~~~~~~~~~~~~~ -->

    <body>
        <label for="darkorlight">
            <input type="checkbox" id="darkorlight" name="darkorlight" onclick="darkOrlight()">
            <span class="check"></span>
        </label>
        <div id="couleurtexte">
            <div id="marge">
                <nav  class = "navbar navbar-expand-lg bg-dark navbar-dark">
                    <div>
                        <div class="container-fluid">
                          <a class="navbar-brand" href="#"><img src="image/hard gamer.png" alt="logo gamerrock" style="width:40px;" class="rounded-pill"></a>
                        
                          <button class="navbar-toggler" style="color: rgb(19, 19, 19)" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="navbar-nav" >
                              <li class="nav-item">
                                <a class="nav-link"  href="#about"> À Propos</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link"  href="#skills">Compétences</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#langues">Langues</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#centres d'interet">Centres d'Intérêt</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#presentation">Présentation</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#work experience"> Professionelles</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#studies and internships">Études et Stages</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                    </div>
                  </nav>
                </div>
            </div>
            <div class="row mx-2 my-2"> <!-- Création d'une ligne-->

<!-- ~~~~~~~~~~~~~~~~~~~~ DEBUT DE LA COLONNE DE GAUCHE ~~~~~~~~~~~~~~~~~~~~ -->

                <div class="col-lg-4 col-md-4 col-12"> <!-- Création de la colonne de gauche-->
                    <div class="left-column">
                        <div class="card">      <!--conteneur de contenu flexible et extensible-->
                            <div>
                                <div class="card-body"> 
                                    <div class="portrait">
                                        <img src="image/me,myself and I.JPG" alt="Photo de LAHALLE François"> <!-- photo de profil-->
                                        <h3 class="shadow"> <span>François LAHALLE</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div>
                                <div class="card-body">
                                    <div> <!-- Initialise le texte en noir-->
                                        <h3 class="colorpurple1" id="about"> <!-- sélecteur sélectionne les éléments avec un attribut de classe spécifique -->   
                                            <svg class="icon icon-tabler icon-tabler-3d-cube-sphere" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path> <!-- view-box: établit un système de coordonnées logiques sur lequel les coordonnées de l'image SVG s'appuient de façon relative-->
                                            <path d="M6 17.6l-2 -1.1v-2.5"></path>
                                            <path d="M4 10v-2.5l2 -1.1"></path>
                                            <path d="M10 4.1l2 -1.1l2 1.1"></path>
                                            <path d="M18 6.4l2 1.1v2.5"></path>
                                            <path d="M20 14v2.5l-2 1.12"></path>
                                            <path d="M14 19.9l-2 1.1l-2 -1.1"></path>
                                            <line x1="12" y1="12" x2="14" y2="10.9"></line>
                                            <line x1="18" y1="8.6" x2="20" y2="7.5"></line>
                                            <line x1="12" y1="12" x2="12" y2="14.5"></line>
                                            <line x1="12" y1="18.5" x2="12" y2="21"></line>
                                            <path d="M12 12l-2 -1.12"></path>
                                            <line x1="6" y1="8.6" x2="4" y2="7.5"></line>
                                            </svg> <!-- icon cube 3D--> À Propos
                                        </h3>
                                        <p>Le <strong>Jeu Vidéo</strong> est l'une de mes plus grandes passions. <!-- Saute la ligne-->
                                        J'aime tous les genres de jeu vidéo et j'aime jouer sur tout type de support: console, pc, mobile, borne d'arcade... 
                                        Passioné de <strong>programmation</strong>, ce domaine est mon plus gros atout pour le jeu vidéo</p>  
                                        
                                        <p>J'aime beaucoup l'<strong>anglais</strong>, je regarde beaucoup de séries et de films en anglais. De plus j'adore traduire les paroles de chansons pour enrichir mon vocabulaire </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">      <!--conteneur de contenu flexible et extensible-->
                            <div>
                                <div class="card-body">
                                    <div><!-- Initialise le texte en noir-->
                                        <h3 class="colorpurple1" id="skills"> 
                                            <svg class="icon icon-tabler icon-tabler-adjustments" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="6" cy="10" r="2"></circle>
                                            <line x1="6" y1="4" x2="6" y2="8"></line>
                                            <line x1="6" y1="12" x2="6" y2="20"></line>
                                            <circle cx="12" cy="16" r="2"></circle>
                                            <line x1="12" y1="4" x2="12" y2="14"></line>
                                            <line x1="12" y1="18" x2="12" y2="20"></line>
                                            <circle cx="18" cy="7" r="2"></circle>
                                            <line x1="18" y1="4" x2="18" y2="5"></line>
                                            <line x1="18" y1="9" x2="18" y2="20"></line>
                                            </svg>Compétences
                                        </h3>
                                        <h6> C </h6>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-opacity-75 bg-black"  role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"> 
                                                75%
                                            </div>
                                        </div>
                                        <h6> Ocaml </h6>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-opacity-75 bg-black"  role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"> 
                                                75%
                                            </div>
                                        </div>  
                                        <h6> Python </h6>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-opacity-50 bg-black"  role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"> 
                                                50%
                                            </div>
                                        </div> 
                                        <h6> HTML/CSS </h6>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-opacity-25 bg-black"  role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> 
                                                25%
                                            </div>
                                        </div>
                                        <h6> MYSQL </h6>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-opacity-25 bg-black"  role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> 
                                                25%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">      <!--conteneur de contenu flexible et extensible-->
                            <div>
                                <div class="card-body">
                                    <div><!-- Initialise le texte en noir-->
                                        <h3 class="colorpurple1" id="langues"> 
                                            <svg class="icon icon-tabler icon-tabler-world" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="12" cy="12" r="9"></circle>
                                            <line x1="3.6" y1="9" x2="20.4" y2="9"></line>
                                            <line x1="3.6" y1="15" x2="20.4" y2="15"></line>
                                            <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                                            <path d="M12.5 3a17 17 0 0 1 0 18"></path>
                                            </svg>Langues
                                        </h3>
                                        <h6> Français </h6>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-opacity-100 bg-black"  role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"> 
                                                    100%
                                                </div>
                                            </div>
                                        <h6> Anglais </h6>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-opacity-75 bg-black"  role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"> 
                                                    75%
                                                </div>
                                            </div>  
                                        <h6> Espagnol </h6>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-opacity-25 bg-black"  role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> 
                                                    25%
                                                </div>
                                            </div> 
                                        <h6> Coréen </h6>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-opacity-10 bg-black"  role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"> 
                                                    10%
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">      <!--conteneur de contenu flexible et extensible-->
                            <div>
                                <div class="card-body">
                                    <div>    <!-- Initialise le texte en noir-->
                                        <h3 class="colorpurple1" id="centres d'interet">
                                            <svg class="icon icon-tabler icon-tabler-apps" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                                            <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                                            <rect x="14" y="14" width="6" height="6" rx="1"></rect>
                                            <line x1="14" y1="7" x2="20" y2="7"></line>
                                            <line x1="17" y1="4" x2="17" y2="10"></line>
                                            </svg>Centres d'intérêt
                                        </h3>
                                        <div class="btn-group">
                                            <div>
                                                <div>
                                                    <button type="button"  class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false"> <!-- data-bs-toggle: sélectionne une classe ou un ID et connecte l’élément à un widget particulier/aria-expanded: possède un élément interactif qui contrôle leur ouverture et leur fermeture. L’attribut est appliqué à ce contrôle interactif focalisable qui bascule la visibilité de l’objet.-->
                                                        Jeu Vidéo
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">League of Legends</a></li>
                                                        <li><a class="dropdown-item" href="#">Tom Clancy's Rainbow Six Siège</a></li>
                                                        <li><a class="dropdown-item" href="#">Overwatch 2</a></li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                                        Théâtre
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Improvisation</a></li>
                                                        <li><a class="dropdown-item" href="#">Comédie</a></li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                                        Musique
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="../monCV-main/musique/ZZ Top - Gimme All Your Lovin (Official Music Video).mp3" target="_blank">Hard Rock</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="../monCV-main/musique/ACDC - Whole Lotta Rosie (Live At River Plate, December 2009).mp3" target="_blank">Rock</a></li>
                                                        <li><a class="dropdown-item" href="../monCV-main/musique/Avenged Sevenfold - Nightmare [Official Music Video].mp3" target="_blank">Heavy Metal</a></li>
                                                        <li><a class="dropdown-item" href="../monCV-main/musique/Five Finger Death Punch - Wash It All Away (Explicit).mp3" target="_blank">Thrash Metal</a></li>
                                                        <li><a class="dropdown-item" href="../monCV-main/musique/Metallica Hardwired (Official Music Video).mp3" target="_blank">Speed Metal</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">      <!--conteneur de contenu flexible et extensible-->
                            <div>
                                <div class="card-body">
                                    <div>    <!-- Initialise le texte en noir-->
                                        <h3 class="colorpurple1" id="contact">
                                            <svg class="icon icon-tabler icon-tabler-address-book" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M20 6v12a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2z"></path>
                                            <path d="M10 16h6"></path>
                                            <circle cx="13" cy="11" r="2"></circle>
                                            <path d="M4 8h3"></path>
                                            <path d="M4 12h3"></path>
                                            <path d="M4 16h3"></path>
                                            </svg>Contact
                                        </h3>
                                        <h6>
                                            <svg class="icon icon-tabler icon-tabler-brand-discord" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="9" cy="12" r="1"></circle>
                                            <circle cx="15" cy="12" r="1"></circle>
                                            <path d="M7.5 7.5c3.5 -1 5.5 -1 9 0"></path>
                                            <path d="M7 16.5c3.5 1 6.5 1 10 0"></path>
                                            <path d="M15.5 17c0 1 1.5 3 2 3c1.5 0 2.833 -1.667 3.5 -3c.667 -1.667 .5 -5.833 -1.5 -11.5c-1.457 -1.015 -3 -1.34 -4.5 -1.5l-1 2.5"></path>
                                            <path d="M8.5 17c0 1 -1.356 3 -1.832 3c-1.429 0 -2.698 -1.667 -3.333 -3c-.635 -1.667 -.476 -5.833 1.428 -11.5c1.388 -1.015 2.782 -1.34 4.237 -1.5l1 2.5"></path>
                                            </svg>DemonXlegenD#6805
                                        </h6>
                                        <h6>
                                            <a href="https://www.instagram.com/francoislahalle/" target="_blank">
                                                <svg class="icon icon-tabler icon-tabler-brand-instagram" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <rect x="4" y="4" width="16" height="16" rx="4"></rect>
                                                <circle cx="12" cy="12" r="3"></circle>
                                                <line x1="16.5" y1="7.5" x2="16.5" y2="7.501"></line>
                                                </svg>François Lahalle
                                            </a>
                                        </h6>
                                        <h6>
                                            <a href="https://www.linkedin.com/in/françois-lahalle-08178b252/" target="_blank">
                                                <svg class="icon icon-tabler icon-tabler-brand-linkedin" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                                                <line x1="8" y1="11" x2="8" y2="16"></line>
                                                <line x1="8" y1="8" x2="8" y2="8.01"></line>
                                                <line x1="12" y1="16" x2="12" y2="11"></line>
                                                <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                                                </svg>François Lahalle
                                            </a> 
                                        </h6>
                                        <h6>
                                            <a href="mailto:flahalle@gaming.tech">
                                                <svg class="icon icon-tabler icon-tabler-at" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <circle cx="12" cy="12" r="4"></circle>
                                                <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28"></path>
                                                </svg>flahalle@gaming.tech</a>
                                        </h6>
                                        <h6>
                                            <a href="tel:+33 06 73 74 47 55"> 
                                                <svg class="icon icon-tabler icon-tabler-phone-call" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                                                <path d="M15 7a2 2 0 0 1 2 2"></path>
                                                <path d="M15 3a6 6 0 0 1 6 6"></path>
                                                </svg>06 73 74 47 55
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- ~~~~~~~~~~~~~~~~~~~ FIN DE LA COLONNE DE GAUCHE ~~~~~~~~~~~~~~~~~~~~ -->

<!-- ~~~~~~~~~~~~~~~~~~~ DEBUT DE LA COLONNE DE DROITE ~~~~~~~~~~~~~~~~~~~~ -->

                <div class="col-lg-8 col-md-8 col-12">
                    <div class="fond3" class="header">
                        <div class="card">      <!--conteneur de contenu flexible et extensible-->
                            <div>
                                <div class="card-body">    
                                    <h1 id="presentation"><strong>François</strong> <span>LAHALLE</span> </h1>
                                    <h5 id="couleurviolette" class="colorpurple" class="textgras">
                                        <a href="https://gamingcampus.fr" target="_blank"> <img src="image/gamingcampuslogo.jpg" width="100px  " alt= Logo du Gaming Campus/></a>
                                        Etudiant au Gaming Campus de Paris
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">      <!--conteneur de contenu flexible et extensible-->
                        <div>
                            <div class="card-body">
                                <h2 id="work experience"><svg class="icon icon-tabler icon-tabler-briefcase" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="3" y="7" width="18" height="13" rx="2"></rect>
                                    <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2"></path>
                                    <line x1="12" y1="12" x2="12" y2="12.01"></line>
                                    <path d="M3 13a20 20 0 0 0 18 0"></path>
                                    </svg>
                                    Expériences Professionelles
                                </h2>
                                <hr>
                                <ul>
                                    <li class="losange">
                                        <h5 class="couleurgrise">

                                            Juillet 2022
                                            <svg class="icon icon-tabler icon-tabler-arrow-big-right-lines" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M12 9v-3.586a1 1 0 0 1 1.707 -.707l6.586 6.586a1 1 0 0 1 0 1.414l-6.586 6.586a1 1 0 0 1 -1.707 -.707v-3.586h-3v-6h3z"></path>
                                                <path d="M3 9v6"></path>
                                                <path d="M6 9v6"></path>
                                            </svg>
                                            Septembre 2022

                                        </h5>
                                    </li>
                                    <p> Travail en restauration au <em>Hangar de la Darkfood</em> à <strong>Tours</strong> </p>
                                    <li class="losange">
                                        <h5 class="couleurgrise">
                                            Juillet 2021
                                            <svg  class="icon icon-tabler icon-tabler-arrow-big-right-lines" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M12 9v-3.586a1 1 0 0 1 1.707 -.707l6.586 6.586a1 1 0 0 1 0 1.414l-6.586 6.586a1 1 0 0 1 -1.707 -.707v-3.586h-3v-6h3z"></path>
                                                <path d="M3 9v6"></path>
                                                <path d="M6 9v6"></path>
                                            </svg>  
                                            Août 2021
                                        </h5>
                                    
                                    </li>
                                    <p> Travail en restauration au <em>Pizza Hut</em> de <strong>Tours</strong> </p>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">  <!--conteneur de contenu flexible et extensible-->
                        <div>
                            <div class="card-body">
                                <h2 id="studies and internships">
                                    <svg  class="icon icon-tabler icon-tabler-notebook" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18"></path>
                                        <line x1="13" y1="8" x2="15" y2="8"></line>
                                        <line x1="13" y1="12" x2="15" y2="12"></line>
                                    </svg>
                                    Études et Stages
                                </h2>
                                <hr>
                                <h4>Études Supérieures </h4>
                                <ul>
                                    <li class="losange">
                                        <h5 class="couleurgrise">

                                                Septembre 2022
                                                <svg  class="icon icon-tabler icon-tabler-arrow-big-right-lines" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M12 9v-3.586a1 1 0 0 1 1.707 -.707l6.586 6.586a1 1 0 0 1 0 1.414l-6.586 6.586a1 1 0 0 1 -1.707 -.707v-3.586h-3v-6h3z"></path>
                                                    <path d="M3 9v6"></path>
                                                    <path d="M6 9v6"></path>
                                                </svg>
                                                Actuellement

                                        </h5>
                                    </li>
                                    <p> <strong>Étudiant</strong> au <em>Gaming Campus </em>de Paris</p>
                                    <p class="souligné">
                                        Projets:
                                    <ol>
                                        <li><p>Création d'un CV en HTML/CSS</p></li>
                                    </ol>
                                    </p>
                                    <li class="losange">
                                        <h5 class="couleurgrise">

                                                Septembre 2021
                                                <svg  class="icon icon-tabler icon-tabler-arrow-big-right-lines" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M12 9v-3.586a1 1 0 0 1 1.707 -.707l6.586 6.586a1 1 0 0 1 0 1.414l-6.586 6.586a1 1 0 0 1 -1.707 -.707v-3.586h-3v-6h3z"></path>
                                                    <path d="M3 9v6"></path>
                                                    <path d="M6 9v6"></path>
                                                </svg>  
                                                Juillet 2022

                                        </h5>                                   
                                    </li>
                                    <p> <strong>Étudiant</strong> en première année de Classe Préparatoire aux Grandes Écoles <strong>MP2I</strong> au <em>Lycée Descartes</em> de Tours (année réussie)</p>
                                </ul>
                                <hr>
                                <h4>Second Cycle </h4>
                                <ul>
                                    <li class="losange">
                                        <h5 class="couleurgrise">

                                            Juillet 2021

                                        </h5>
                                    </li>
                                    <p> Diplomé du <strong>Baccalauréat</strong> avec mention <strong>Très Bien</strong> au <em>Lycée Silvia Monfort</em> de Luisant<br/>
                                        Diplomé du <strong>Cambridge English Certificate</strong> au <em>Lycée Silvia Monfort</em> de Luisant</p>
                                    <li class="losange">
                                        <h5 class="couleurgrise">

                                                Septembre 2018
                                                <svg  class="icon icon-tabler icon-tabler-arrow-big-right-lines" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M12 9v-3.586a1 1 0 0 1 1.707 -.707l6.586 6.586a1 1 0 0 1 0 1.414l-6.586 6.586a1 1 0 0 1 -1.707 -.707v-3.586h-3v-6h3z"></path>
                                                    <path d="M3 9v6"></path>
                                                    <path d="M6 9v6"></path>
                                                </svg>  
                                                Juillet 2021

                                        </h5>
                                    </li>
                                    <p> <strong>Élève</strong> au <em>Lycée Silvia Monfort</em> de Luisant</p>
                                </ul>
                                <h4>Premier Cycle </h4>
                                <ul>
                                    <li class="losange">
                                        <h5 class="couleurgrise">

                                                Juin 2018

                                        </h5>
                                    </li>
                                    <p> Diplomé du <strong>Brevet</strong> avec mention <strong>Bien</strong> au <em>Collège Saint Jacques de Compostelle</em> de Mignières</p>
                                    <li class="losange">
                                        <h5 class="couleurgrise">

                                                Février 2018

                                        </h5>    
                                    </li>
                                    <p><strong>Stage</strong> de 3ème au <em>CETI</em> de Chartres</p>
                                    <li class="losange">
                                        <h5 class="couleurgrise">

                                                Septembre 2014
                                                <svg  class="icon icon-tabler icon-tabler-arrow-big-right-lines" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M12 9v-3.586a1 1 0 0 1 1.707 -.707l6.586 6.586a1 1 0 0 1 0 1.414l-6.586 6.586a1 1 0 0 1 -1.707 -.707v-3.586h-3v-6h3z"></path>
                                                    <path d="M3 9v6"></path>
                                                    <path d="M6 9v6"></path>
                                                </svg>  
                                                Juin 2018

                                        </h5>
                                    
                                    </li>
                                    <p> <strong>Élève</strong> au <em>Collège Saint Jacques de Compostelle</em> de Mignières</p>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div id="marge">  
                            <?php
                                $pdo = new PDO('mysql:host=localhost;dbname=contact', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                            ?>



                            <!-- Formulaire -->
                            <form action="" method="post">
                                <label for="nom"> Nom:</label>
                                <br>
                                <input type="text" placeholder= "Nom" name="nom" required></input>
                                <br>
                                <label for="prenom"> Prénom:</label>
                                <br>
                                <input type="text" placeholder= "Prénom" name="prenom" required></input>
                                <br>
                                <label for="email"> Email:</label>
                                <br>
                                <input type="text" placeholder= "Email" name="email" required></input>
                                <br>
                                <label for="telephone"> Téléphone:</label>
                                <br>
                                <input type="text" placeholder= "Téléphone" name="telephone" required></input>
                                <br>
                                <label for="message"> Message:</label>
                                <br>
                                <textarea type="text" placeholder= "Message" name="message" required></textarea>
                                <button type="text" id="post" name="post"> poster </button>

                            </form>

                            <?php
                            if($_POST)
                            {
                                //Variable du nom
                                $nom =  $_POST['nom'];

                                //Variable du prénom
                                $prenom =  $_POST['prenom'];

                                //Variable de l'email
                                $email =  $_POST['email'];

                                //Variable du numéro de téléphone
                                $tel = $_POST['telephone'];

                                //Variable du numéro de téléphone
                                $message = $_POST['message'];

                                //Valider le nom
                                if(preg_match('#^(?=.*[a-z])(?=.*[A-Z])#', $nom)) 
                                //preg_match: Effectue une recherche de correspondance avec une expression rationnelle standard
                                {
                                
                                    $validenom = 1;    //Contient vrai puisque c'est conforme
                                }
                                else
                                {
                                    $validenom = 0;    //Contient faux puisque ce n'est pas conforme
                                }
                            
                                //Valider le prénom
                                if(preg_match('#^(?=.*[a-z])(?=.*[A-Z])#', $prenom)){
                                    $valideprenom = 1;    //Contient vrai puisque c'est conforme
                                  }
                                else
                                  {
                                    $valideprenom = 0;    //Contient faux puisque ce n'est pas conforme
                                  }
                              
                              
                                //Valider l'email
                                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                                    $validemail = 1;    //Contient vrai puisque c'est conforme
                                  }
                                else
                                  {
                                    $validemail = 0;    //Contient faux puisque ce n'est pas conforme
                                  }
                              
                              
                                //Valider le numéro de téléphone
                                if (preg_match("#[0][6][- \.?]?([0-9][0-9][- \.?]?){4}$#", $tel) || preg_match("#[0][7][- \.?]?([0-9][0-9][- \.?]?){4}$#", $tel))
                                {
                                    $validetel = 1;    //Contient vrai puisque c'est conforme
                                
                            	}
                                else 
                                {
                                    $validetel = 0;    //Contient faux puisque ce n'est pas conforme
                            	}	
                            }

                                //Vérification du post, de la validité du mot de passe, de l'email et du numéro de téléphone
                                if(!empty($_POST && $validemail) && $validetel && $validenom && $valideprenom) 
                                {
                                    $pdo->exec("INSERT INTO identifiant (nom, prenom, email, telephone, message) VALUES ('$nom', '$prenom', '$email', '$tel', '$message')");
                                }
                            ?>
                        </div>
                    </div>
                    <!-- ~~~~~~~~~~~~~~~~~~~~ FIN DE LA COLONNE DE DROITE ~~~~~~~~~~~~~~~~~~~~ -->
                </div>
            </div>
        </div>

<!-- ~~~~~~~~~~~~~~~~~~~~ DEBUT DE JAVASCRIPT ~~~~~~~~~~~~~~~~~~~~ -->

    <script src="../php_francois/Javascript/Javascript.js"></script>        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>      
        
<!-- ~~~~~~~~~~~~~~~~~~~~ FIN DE JAVASCRIPT ~~~~~~~~~~~~~~~~~~~~ -->

    
    </body>

<!-- ~~~~~~~~~~~~~~~~~~~~ DEBUT DU PIED DE PAGE ~~~~~~~~~~~~~~~~~~~~ -->

    <footer>

        <h4> @François LAHALLE alias DemonXlegenD</h4>
        <a href="../admin/codeadmin.php" target="_blank"> Admin</a>                           
    </footer>

<!-- ~~~~~~~~~~~~~~~~~~~~ FIN DU PIED DE PAGE ~~~~~~~~~~~~~~~~~~~~ -->

</html>
