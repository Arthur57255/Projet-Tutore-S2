<?php

session_start();
// session_destroy(); // Temporaire, à décommenter pour se déconnecter manuellement en attendant un système automatique

include 'database/database_connect.php';

$user = $psw = $userErr = $pswErr = '';
$result = $queryErr = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["user"])) {
        $userErr = " * L'identifiant est requis.";
    }
    else {
        $user = testInput($_POST["user"]);
    }

    if(empty($_POST["password"])) {
        $pswErr = " * Le mot de passe est obligatoire.";
    }
    else {
        $psw = testInput($_POST["password"]);
    }

    if(!empty($_POST["user"] AND !empty($_POST["password"]))) {
        $query = $db->prepare('SELECT id, login, password FROM account WHERE login = :login AND password = :pass');
        $query->execute(array(
            'login' => $user,
            'pass' => $psw,
        ));

        $result = $query->fetch();

        if(!$result)
        {
            $queryErr = "Ce pseudo n'existe pas ou le mot de passe est incorrect !";
            ?>
            <script>document.getElementById('connectBlock').style.display = 'block';</script>
            <?php
        }
        else
        {
            session_start();
            $_SESSION['login'] = $user;
            header('Location:index.php');
        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Projet Tutoré</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/styleconnect.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="styles/style.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>

<body>
<header id="navbar">
    <!-- Desktop Navbar -->
    <nav class="nav-desktop">
        <!-- Bouton pour small screens, à garder tempo ici
<a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
            <i class="fa fa-bars"></i></a> -->

        <!-- Voir w3-button en cas de problème -->
        <div id="menu">
            <ul>
                <li><a href="#home">ACCUEIL</a></li>
                <li><a href="#a_propos"><i class="fa fa-user"></i> A PROPOS</a></li>
                <li><a href="#portfolio"><i class="fa fa-th"></i> PORTFOLIO</a></li>
                <li><a href="#contact"><i class="fa fa-envelope"></i> CONTACT</a></li>
                <?php if(!empty($_SESSION['login'])) {?><li><a href="#">Ajouter un article</a></li><?php } ?>
            </ul>
        </div>

        <div id="searchBar">
            <a href="#"><i class="fa fa-search"></i></a>
        </div>
    </nav>

    <!-- Navbar on small screens
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
        <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
        <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
        <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
        <a href="#" class="w3-bar-item w3-button">SEARCH</a>
    </div> -->
</header>
<!-- Première image parallaxe -->
<div class="background-1" id="home">
    <div style="white-space:nowrap;">
        <h1 class="mainTitle">IUT de Metz : Département Informatique</h1>
    </div>
</div>

<div class="content">
    <p>
        Vulputate sociosqu nascetur eu lorem parturient elementum maecenas ornare? Nulla dolor leo nunc sollicitudin sodales! Tellus dictum ut urna sit montes in gravida ornare sociosqu. A bibendum convallis nisl eleifend ornare venenatis cursus posuere lorem dictum fringilla augue. Sem sollicitudin ad mollis mi odio ultrices. Ut at eu penatibus porttitor; dictumst in maecenas vehicula per orci eget. Parturient facilisi adipiscing pharetra amet, platea potenti vel eros. Suscipit cras elit mus cursus sit interdum varius hac curae; quam magna. Sodales vestibulum inceptos posuere neque potenti litora urna inceptos suspendisse. Ligula leo fusce libero nibh. Montes.
    </p>
    <p>
        Ullamcorper semper fames erat cursus quis nam turpis eleifend? Ipsum quisque curae; molestie, tristique elementum volutpat laoreet arcu. Accumsan proin volutpat auctor ac parturient parturient euismod. Sociosqu turpis ad ut ullamcorper accumsan sapien aenean aliquam. Sed sociis a pellentesque natoque consectetur? Morbi molestie taciti taciti adipiscing praesent luctus. Varius hac risus placerat. Bibendum porttitor tempor cum. Sem sed penatibus parturient semper congue pretium lacinia magnis luctus neque laoreet purus. Nam ullamcorper torquent faucibus maecenas ligula in aliquam. Praesent ullamcorper conubia ad sed nascetur, ligula praesent. Sociis at conubia at.
    </p>
    <p>
        Hendrerit amet metus eu morbi vitae vulputate magnis. Felis nulla rhoncus congue et vehicula class varius diam pellentesque. Sollicitudin, maecenas inceptos duis habitasse. Id placerat lacinia rutrum quis faucibus vivamus vehicula vel cubilia laoreet curae;. Bibendum laoreet iaculis, sagittis sagittis cubilia vivamus fusce felis id vestibulum est. Nisi ultrices; vivamus venenatis. Velit commodo elit varius praesent elementum volutpat suspendisse vel phasellus.
    </p>
    <p>
        Est ultrices aptent pulvinar tristique felis tempus eget tempor adipiscing ultricies. Nisl semper erat metus consectetur, nisl suspendisse. Porta class dictum consectetur cursus ad per. Odio facilisis, sagittis arcu. Turpis tincidunt ipsum ligula? Nulla litora vitae lacus semper orci consectetur interdum. Gravida duis hac tempus. Scelerisque rutrum erat varius mus hac cubilia hendrerit augue rutrum dui elit. Id lacinia nam massa eleifend. Odio conubia fames vivamus amet parturient. Orci porttitor mus cras sollicitudin. Praesent bibendum porttitor blandit?
    </p>
    <p>
        Laoreet urna nulla tellus enim aliquet purus etiam lectus habitasse. Neque dis dictumst class dolor aptent lobortis. Conubia cum metus nam euismod volutpat molestie habitant. Sit per fusce fames consectetur molestie semper cum himenaeos id. Interdum eu curae; vivamus ligula mauris. Ad ut enim ipsum sit mauris enim urna pharetra potenti! Sagittis, eu dolor ad sagittis potenti. Erat dictum eu rutrum sapien sit rutrum proin congue. Ultrices habitant ac ut malesuada dictumst etiam mus et cubilia ultrices sociis. Aenean massa odio duis sapien! Consectetur ante nunc massa. Interdum ante!
    </p>
    <p>
        Ridiculus iaculis metus laoreet. Lorem quisque nascetur pulvinar enim mi ultrices. Vestibulum inceptos placerat conubia morbi in tellus natoque. Vestibulum eget malesuada quam a leo massa himenaeos cubilia facilisi vitae cras? Inceptos lectus ultrices cras ultricies morbi potenti cubilia aenean hac! Varius, sollicitudin nam a mollis cum lacus eu ridiculus etiam non sollicitudin? Sit maecenas a augue eros metus erat netus praesent dapibus laoreet consequat.
    </p>
    <p>
        Est, taciti lacus sociis libero ad odio mollis hac quam mollis. Vivamus vivamus sed torquent nullam tempor sociosqu netus. Id mauris penatibus est phasellus montes odio cursus lobortis convallis dui porttitor. At id ante lorem sociosqu nisi varius nam condimentum litora orci purus sagittis. Ut posuere sollicitudin magna tellus accumsan vulputate quam ad elit sagittis lacinia. Torquent augue cubilia eros lacus? Conubia nam pellentesque laoreet ultrices facilisi? Lacus consequat odio ligula dui eros dictumst mi odio blandit sem?
    </p>
    <p>
        Cum; eleifend suscipit dapibus adipiscing! Etiam nulla in integer luctus hendrerit non. Facilisi ullamcorper lacinia montes. Ad ullamcorper nunc leo. Pharetra, euismod consequat facilisi vitae ac magna porta nibh rutrum ligula bibendum! Feugiat porta dui himenaeos sagittis convallis mattis lectus vehicula sapien purus vehicula. In facilisis curabitur convallis nibh lectus taciti ac at pulvinar mauris? Vestibulum etiam auctor nostra mauris mauris. Facilisi; vulputate nunc arcu habitant fringilla pulvinar? Felis ipsum per penatibus imperdiet integer.
    </p>
    <p>
        Mus mattis ultricies enim tempor gravida risus mi ad praesent mus. Sollicitudin rutrum class curae; proin! Arcu platea sagittis aliquet placerat ad varius lectus dis leo? Sapien, nisl sem nibh ante ultricies cursus purus! Urna tempus duis etiam primis habitasse. Per ultrices accumsan curabitur nibh habitant cursus class curabitur, quisque sem id! Urna nulla urna, nibh amet. Praesent eget faucibus aliquet orci mi at eleifend quis mollis. Sociosqu suspendisse dictum condimentum. Himenaeos ridiculus vulputate libero inceptos fusce metus.
    </p>
    <p>
        Lacus sapien dui rhoncus etiam dui morbi lacus risus amet natoque. Quam fames mauris facilisis potenti ultricies congue adipiscing tellus platea tristique cubilia porttitor. Ad elementum vestibulum mattis fermentum metus. Varius duis justo inceptos ante per hendrerit metus senectus facilisi praesent nunc pulvinar. Enim dictumst suscipit nullam morbi magnis porttitor elit bibendum vivamus etiam amet cursus. Aliquam ipsum quis pellentesque eros pharetra. Dis gravida rutrum duis lobortis hac hac. Vestibulum fringilla, class mi. Phasellus; amet tempus felis per integer. Eu odio class porta mollis accumsan placerat. Pretium pharetra.
    </p>
</div>

<!-- Second parallax -->
<div class="background-2">
    <div style="white-space:nowrap;">
        <h1 class="bg2-title">DUT 1ère année</h1>
    </div>
</div>

<div class="testimonial-section">
    <div class="inner-width">
        <h1>Projets en première année</h1>
        <div class="border"></div>

        <div class="slides owl-carousel">

            <div class="testimonial">
                <div class="test-info">
                    <img class="test-pic" src="images/logo/html.png" alt="">
                    <div class="test-name">
                        <span>Projet Tutoré S1</span>

                    </div>
                </div>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet temporibus minus nam, sed quaerat odio iste ipsa autem suscipit, magnam mollitia iusto enim praesentium possimus modi tenetur neque, molestiae ratione.
                </p>
                <a onclick="document.getElementById('present_projet').style.display='block'"> Voir plus </a>
            </div>

            <div class="testimonial">
                <div class="test-info">
                    <img class="test-pic" src="images/logo/c.png" alt="">
                    <div class="test-name">
                        <span>Projet Algo C</span>

                    </div>
                </div>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet temporibus minus nam, sed quaerat odio iste ipsa autem suscipit, magnam mollitia iusto enim praesentium possimus modi tenetur neque, molestiae ratione.
                </p>
                <a onclick="document.getElementById('present_projet').style.display='block'"> Voir plus </a>
            </div>

            <div class="testimonial">
                <div class="test-info">
                    <img class="test-pic" src="images/logo/sql.jpg" alt="">
                    <div class="test-name">
                        <span>Projet Base de Données</span>

                    </div>
                </div>



                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet temporibus minus nam, sed quaerat odio iste ipsa autem suscipit, magnam mollitia iusto enim praesentium possimus modi tenetur neque, molestiae ratione.
                </p>
                <a onclick="document.getElementById('present_projet').style.display='block'"> Voir plus </a>
            </div>
            <div class="testimonial">
                <div class="test-info">
                    <img class="test-pic" src="images/logo/asm.png" alt="">
                    <div class="test-name">
                        <span>Projet Assembleur 8086</span>

                    </div>
                </div>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet temporibus minus nam, sed quaerat odio iste ipsa autem suscipit, magnam mollitia iusto enim praesentium possimus modi tenetur neque, molestiae ratione.
                </p>
                <a onclick="document.getElementById('present_projet').style.display='block'"> Voir plus </a>
            </div>

            <div class="testimonial">
                <div class="test-info">
                    <img class="test-pic" src="images/logo/sql.jpg" alt="">
                    <div class="test-name">
                        <span>Projet Base de Données 2</span>

                    </div>
                </div>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet temporibus minus nam, sed quaerat odio iste ipsa autem suscipit, magnam mollitia iusto enim praesentium possimus modi tenetur neque, molestiae ratione.
                </p>
                <a onclick="document.getElementById('present_projet').style.display='block'"> Voir plus </a>
            </div>

            <div class="testimonial">
                <div class="test-info">
                    <img class="test-pic" src="images/logo/java.png" alt="">
                    <div class="test-name">
                        <span>Projet Java</span>

                    </div>
                </div>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet temporibus minus nam, sed quaerat odio iste ipsa autem suscipit, magnam mollitia iusto enim praesentium possimus modi tenetur neque, molestiae ratione.
                </p>
                <a onclick="document.getElementById('present_projet').style.display='block'"> Voir plus </a>
            </div>

            <div class="testimonial">
                <div class="test-info">
                    <img class="test-pic" src="images/logo/html.png" alt="">
                    <div class="test-name">
                        <span>Projet Tutoré S2</span>

                    </div>
                </div>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet temporibus minus nam, sed quaerat odio iste ipsa autem suscipit, magnam mollitia iusto enim praesentium possimus modi tenetur neque, molestiae ratione.
                </p>
                <a onclick="document.getElementById('present_projet').style.display='block'"> Voir plus </a>
            </div>

        </div>
    </div>
</div>

<div class="background-2">
    <div style="white-space:nowrap;">
        <h1 class="bg2-title">DUT 2ème année</h1>
    </div>
</div>

<div class="testimonial-section">
    <div class="inner-width">
        <h1>Projets en deuxième année</h1>
        <div class="border"></div>

        <div class="slides owl-carousel">

            <div class="testimonial">
                <div class="test-info">
                    <img class="test-pic" src="images/logo/html.png" alt="">
                    <div class="test-name">
                        <span>Projet Tutoré S1</span>

                    </div>
                </div>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet temporibus minus nam, sed quaerat odio iste ipsa autem suscipit, magnam mollitia iusto enim praesentium possimus modi tenetur neque, molestiae ratione.
                </p>
                <a onclick="document.getElementById('present_projet').style.display='block'"> Voir plus </a>
            </div>

            <div class="testimonial">
                <div class="test-info">
                    <img class="test-pic" src="images/logo/c.png" alt="">
                    <div class="test-name">
                        <span>Projet Algo C</span>

                    </div>
                </div>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet temporibus minus nam, sed quaerat odio iste ipsa autem suscipit, magnam mollitia iusto enim praesentium possimus modi tenetur neque, molestiae ratione.
                </p>
                <a onclick="document.getElementById('present_projet').style.display='block'"> Voir plus </a>
            </div>

            <div class="testimonial">
                <div class="test-info">
                    <img class="test-pic" src="images/logo/sql.jpg" alt="">
                    <div class="test-name">
                        <span>Projet Base de Données</span>

                    </div>
                </div>



                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet temporibus minus nam, sed quaerat odio iste ipsa autem suscipit, magnam mollitia iusto enim praesentium possimus modi tenetur neque, molestiae ratione.
                </p>
                <a onclick="document.getElementById('present_projet').style.display='block'"> Voir plus </a>
            </div>
            <div class="testimonial">
                <div class="test-info">
                    <img class="test-pic" src="images/logo/asm.png" alt="">
                    <div class="test-name">
                        <span>Projet Assembleur 8086</span>

                    </div>
                </div>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet temporibus minus nam, sed quaerat odio iste ipsa autem suscipit, magnam mollitia iusto enim praesentium possimus modi tenetur neque, molestiae ratione.
                </p>
                <a onclick="document.getElementById('present_projet').style.display='block'"> Voir plus </a>
            </div>

            <div class="testimonial">
                <div class="test-info">
                    <img class="test-pic" src="images/logo/sql.jpg" alt="">
                    <div class="test-name">
                        <span>Projet Base de Données 2</span>

                    </div>
                </div>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet temporibus minus nam, sed quaerat odio iste ipsa autem suscipit, magnam mollitia iusto enim praesentium possimus modi tenetur neque, molestiae ratione.
                </p>
                <a onclick="document.getElementById('present_projet').style.display='block'"> Voir plus </a>
            </div>

            <div class="testimonial">
                <div class="test-info">
                    <img class="test-pic" src="images/logo/java.png" alt="">
                    <div class="test-name">
                        <span>Projet Java</span>

                    </div>
                </div>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet temporibus minus nam, sed quaerat odio iste ipsa autem suscipit, magnam mollitia iusto enim praesentium possimus modi tenetur neque, molestiae ratione.
                </p>
                <a onclick="document.getElementById('present_projet').style.display='block'"> Voir plus </a>
            </div>

            <div class="testimonial">
                <div class="test-info">
                    <img class="test-pic" src="images/logo/html.png" alt="">
                    <div class="test-name">
                        <span>Projet Tutoré S2</span>

                    </div>
                </div>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet temporibus minus nam, sed quaerat odio iste ipsa autem suscipit, magnam mollitia iusto enim praesentium possimus modi tenetur neque, molestiae ratione.
                </p>
                <a onclick="document.getElementById('present_projet').style.display='block'"> Voir plus </a>
            </div>

        </div>
    </div>
</div>

<div class="background-2">
    <div style="white-space:nowrap;">
        <h1 class="bg2-title">Licence Pro</h1>
    </div>
</div>

<div class="testimonial-section">
    <div class="inner-width">
        <h1>Projets en Licence Pro</h1>
       <div class="border"></div>

        <div class="slides owl-carousel">

            <div class="testimonial">
                <div class="test-info">
                    <img class="test-pic" src="images/logo/html.png" alt="">
                    <div class="test-name">
                        <span>Projet Tutoré S1</span>

                    </div>
                </div>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet temporibus minus nam, sed quaerat odio iste ipsa autem suscipit, magnam mollitia iusto enim praesentium possimus modi tenetur neque, molestiae ratione.
                </p>
                <a onclick="document.getElementById('present_projet').style.display='block'"> Voir plus </a>
            </div>

            <div class="testimonial">
                <div class="test-info">
                    <img class="test-pic" src="images/logo/c.png" alt="">
                    <div class="test-name">
                        <span>Projet Algo C</span>

                    </div>
                </div>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet temporibus minus nam, sed quaerat odio iste ipsa autem suscipit, magnam mollitia iusto enim praesentium possimus modi tenetur neque, molestiae ratione.
                </p>
                <a onclick="document.getElementById('present_projet').style.display='block'"> Voir plus </a>
            </div>

            <div class="testimonial">
                <div class="test-info">
                    <img class="test-pic" src="images/logo/sql.jpg" alt="">
                    <div class="test-name">
                        <span>Projet Base de Données</span>

                    </div>
                </div>



                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet temporibus minus nam, sed quaerat odio iste ipsa autem suscipit, magnam mollitia iusto enim praesentium possimus modi tenetur neque, molestiae ratione.
                </p>
                <a onclick="document.getElementById('present_projet').style.display='block'"> Voir plus </a>
            </div>
            <div class="testimonial">
                <div class="test-info">
                    <img class="test-pic" src="images/logo/asm.png" alt="">
                    <div class="test-name">
                        <span>Projet Assembleur 8086</span>

                    </div>
                </div>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet temporibus minus nam, sed quaerat odio iste ipsa autem suscipit, magnam mollitia iusto enim praesentium possimus modi tenetur neque, molestiae ratione.
                </p>
                <a onclick="document.getElementById('present_projet').style.display='block'"> Voir plus </a>
            </div>

            <div class="testimonial">
                <div class="test-info">
                    <img class="test-pic" src="images/logo/sql.jpg" alt="">
                    <div class="test-name">
                        <span>Projet Base de Données 2</span>

                    </div>
                </div>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet temporibus minus nam, sed quaerat odio iste ipsa autem suscipit, magnam mollitia iusto enim praesentium possimus modi tenetur neque, molestiae ratione.
                </p>
                <a onclick="document.getElementById('present_projet').style.display='block'"> Voir plus </a>
            </div>

            <div class="testimonial">
                <div class="test-info">
                    <img class="test-pic" src="images/logo/java.png" alt="">
                    <div class="test-name">
                        <span>Projet Java</span>

                    </div>
                </div>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet temporibus minus nam, sed quaerat odio iste ipsa autem suscipit, magnam mollitia iusto enim praesentium possimus modi tenetur neque, molestiae ratione.
                </p>
                <a onclick="document.getElementById('present_projet').style.display='block'"> Voir plus </a>
            </div>

            <div class="testimonial">
                <div class="test-info">
                    <img class="test-pic" src="images/logo/html.png" alt="">
                    <div class="test-name">
                        <span>Projet Tutoré S2</span>

                    </div>
                </div>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet temporibus minus nam, sed quaerat odio iste ipsa autem suscipit, magnam mollitia iusto enim praesentium possimus modi tenetur neque, molestiae ratione.
                </p>
                <a onclick="document.getElementById('present_projet').style.display='block'"> Voir plus </a>
            </div>

        </div>
    </div>
</div>

<!-- Third parallax -->
<div class="background-3">
    <div style="white-space:nowrap;">
        <h1 class="bg3-title">La peur2</h1>
    </div>
</div>

<div class="content contactContainer" id="contact">
    <h2 class="center">Contact</h2>
    <form class="center" action="traitement.php">
        Nom :<br />
        <input type="text" name="nom"><br />
        Prénom :<br />
        <input type="text" name="prenom"><br />
        Message :<br />
        <textarea name="message" rows="10" cols="90"></textarea><br />
        <input type="submit" value="Valider">
    </form>
</div>

<footer>
    <a href="#home" class="button"><i class="fa fa-arrow-up w3-margin-right"></i> Retour vers le haut</a>
    <div class="social">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    <p>Crée par blabla</p>
    <button class="bConnect" onclick="document.getElementById('connectBlock').style.display='block'">Connexion</button>
</footer>


<div id="connectBlock" class="connectBlock">

    <form class="contentForm animate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] );?>" method="post">
        <div class="imgContainer">
            <span onclick="document.getElementById('connectBlock').style.display='none'" class="close" title="Fermer">&times;</span>
            <img src="images/lock.png" alt="Logo" class="logo">
        </div>

        <div class="container">
            <p><?php if(!$result) { echo $queryErr; } ?></p>
            <label for="user"><b>Identifiant</b></label> <span class="error"><?php echo $userErr;?></span>
            <input type="text" placeholder="Entrez votre identifiant" name="user" value="<?php echo $user ?>">

            <label for="password"><b>Mot de passe</b></label> <span class="error"><?php echo $pswErr;?></span>
            <input type="password" placeholder="Entrez votre mot de passe" name="password" value="<?php echo $psw ?>">

            <input type="submit" value="Connexion">
            <label>
                <input type="checkbox" checked="checked" name="remember"> Se souvenir de moi
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('connectBlock').style.display='none'" class="cancelbtn">Annuler</button>
            <span class="password">Mot de passe <a href="#">oublié ?</a></span>
        </div>
    </form>
</div>

<div id="present_projet" class="present_projet">

    <form class="form_projet animate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] );?>" method="post">

            <div class="testimonial">
                <div class="project-info">
                    <img class="project-pic" src="images/logo/html.png" alt="">
                    <div class="project-name">
                        <span>Projet Tutoré S1</span>

                    </div>
                </div>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet temporibus minus nam, sed quaerat odio iste ipsa autem suscipit, magnam mollitia iusto enim praesentium possimus modi tenetur neque, molestiae ratione.
                </p>
				
				    <img class="img-projet" src="images/logo/html.png" alt="">
					<img class="img-projet" src="images/logo/html.png" alt="">
            </div>

</div>




<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["user"])) {
        ?>
        <script>document.getElementById('connectBlock').style.display = 'block';</script>
        <?php
    }

    if (empty($_POST["password"])) {
        ?>
        <script>document.getElementById('connectBlock').style.display = 'block';</script>
    <?php
    }

    if(!empty($_POST["user"] AND !empty($_POST["password"]))) {
        if (!$result) {
            ?>
            <script>document.getElementById('connectBlock').style.display = 'block';</script>
            <?php
        }
    }
}

// -------------
// - Fonctions -
// -------------

function testInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<script>
    // Change le style de la navbar au scroll
    window.onscroll = function() {
        navScroll()
    };

    function navScroll() {
        var navbar = document.getElementById("navbar");
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 900) {
            navbar.className = "navbarJS-on" + " animeHeader";
        } else {
            navbar.className = "navbarJS-off";
        }
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    /* function toggleFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    } */

    // *********************
    // * Bloc de connexion *
    // *********************

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == document.getElementById('connectBlock')) {
            document.getElementById('connectBlock').style.display = "none";
        }
    }

    window.onclick = function(event) {
        if (event.target == document.getElementById('present_projet')) {
            document.getElementById('present_projet').style.display = "none";
        }
    }

    $(".owl-carousel").owlCarousel({
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            },
            680:{
                items:2
            },
            960:{
                items:3
            },
            1160:{
                items:4
            }
        }
    });
</script>

</body>
</html>
