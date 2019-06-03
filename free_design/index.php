<?php

include 'database/database_connect.php';


?>

<!DOCTYPE html>
<html>

<head>
    <title>Projet Tutoré</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" />
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
                    <li><a href="#a_propos" class=" w3-hide-small"><i class="fa fa-user"></i> A PROPOS</a></li>
                    <li><a href="#portfolio" class="w3-hide-small"><i class="fa fa-th"></i> PORTFOLIO</a></li>
                    <li><a href="#contact" class="w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a></li>
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
            <h1 class="mainTitle">Lilli, Entre adultère et drogue</h1>
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

    <section class="content">
        <div class="listProjects">
            <article class="project">
                <h1>Gateau au chocolat fondant</h1>

                <img src="images/gateau_choco_fondant.jpg" alt="choco" />

                <p>Découvrez la meilleure recette du gâteau au chocolat fondant. Un gâteau au chocolat très facile à réaliser avec un coeur moelleux et un dessus croustillant. Testez vite ce gâteau au chocolat.</p>

                <p class="suite"><a href="recettes/gateau_choco_fondant.html">Lire la suite</a></p>
            </article>
            <article class="project">
                <h1>Truffes au chocolat</h1>

                <img src="images/recette_truffes.jpg" alt="truffes" />

                <p>Qui a dit que les truffes au chocolat n'étaient réservées que pour Noël ? Non non non... Pas question de se faire plaisir avec ce délice qu'une fois par an ! Un anniversaire, un goûter gourmand... </p>

                <p class="suite"><a href="recettes/truffes.html">Lire la suite</a></p>
            </article>
            <article class="project">
                <h1>Macarons au chocolat</h1>

                <img src="images/recette_macarons.jpg" alt="macarons" />

                <p>Le macaron est l’un des desserts pâtissiers préférés des Français ! Confectionné en accolant deux coques de meringue italienne ou française l’une à l’autre avec une ganache, il n’est pas si difficile à réaliser.</p>

                <p class="suite"><a href="recettes/macarons.html">Lire la suite</a></p>
            </article>
            <article class="project">
                <h1>Succès au chocolat</h1>

                <img src="images/recette_succes.jpg" alt="succes" />

                <p>Son origine certaine est difficile à déterminer, mais dès le début du xxe siècle, des pâtisseries du sud-ouest de la France en vendaient. Dans tout les cas, c'est un très bon gateau à faire !</p>

                <p class="suite"><a href="recettes/succes.html">Lire la suite</a></p>
            </article>
            <article class="project">
                <h1>Cheesecake au chocolat blanc</h1>

                <img src="images/cheescake.jpg" alt="cheesecake chocoblanc" />

                <p>Un gâteau américain parsemé d'un zeste de French touch... Crème au cottage cheese adoucie de chocolat blanc pour un délice de cheesecake !</p>

                <p class="suite"><a href="recettes/cheesecake_choco_blanc.html">Lire la suite</a></p>
            </article>
            <article class="project">
                <h1>Fondant au chocolat</h1>

                <img src="images/recette_fondant.jpg" alt="succes" />

                <p>Son origine certaine est difficile à déterminer, mais dès le début du xxe siècle, des pâtisseries du sud-ouest de la France en vendaient. Dans tout les cas, c'est un très bon gateau à faire !</p>

                <p class="suite"><a href="recettes/fondant.html">Lire la suite</a></p>
            </article>
        </div>
        
        <p class="center">Chargez plus</p>
    </section>

    <div class="background-2">
        <div style="white-space:nowrap;">
            <h1 class="bg2-title">DUT 2ème année</h1>
        </div>
    </div>

    <section class="content">
        <div class="listProjects">
            <article class="project">
                <h1>Gateau au chocolat fondant</h1>

                <img src="images/gateau_choco_fondant.jpg" alt="choco" />

                <p>Découvrez la meilleure recette du gâteau au chocolat fondant. Un gâteau au chocolat très facile à réaliser avec un coeur moelleux et un dessus croustillant. Testez vite ce gâteau au chocolat.</p>

                <p class="suite"><a href="recettes/gateau_choco_fondant.html">Lire la suite</a></p>
            </article>
            <article class="project">
                <h1>Truffes au chocolat</h1>

                <img src="images/recette_truffes.jpg" alt="truffes" />

                <p>Qui a dit que les truffes au chocolat n'étaient réservées que pour Noël ? Non non non... Pas question de se faire plaisir avec ce délice qu'une fois par an ! Un anniversaire, un goûter gourmand... </p>

                <p class="suite"><a href="recettes/truffes.html">Lire la suite</a></p>
            </article>
            <article class="project">
                <h1>Macarons au chocolat</h1>

                <img src="images/recette_macarons.jpg" alt="macarons" />

                <p>Le macaron est l’un des desserts pâtissiers préférés des Français ! Confectionné en accolant deux coques de meringue italienne ou française l’une à l’autre avec une ganache, il n’est pas si difficile à réaliser.</p>

                <p class="suite"><a href="recettes/macarons.html">Lire la suite</a></p>
            </article>
            <article class="project">
                <h1>Succès au chocolat</h1>

                <img src="images/recette_succes.jpg" alt="succes" />

                <p>Son origine certaine est difficile à déterminer, mais dès le début du xxe siècle, des pâtisseries du sud-ouest de la France en vendaient. Dans tout les cas, c'est un très bon gateau à faire !</p>

                <p class="suite"><a href="recettes/succes.html">Lire la suite</a></p>
            </article>
            <article class="project">
                <h1>Cheesecake au chocolat blanc</h1>

                <img src="images/cheescake.jpg" alt="cheesecake chocoblanc" />

                <p>Un gâteau américain parsemé d'un zeste de French touch... Crème au cottage cheese adoucie de chocolat blanc pour un délice de cheesecake !</p>

                <p class="suite"><a href="recettes/cheesecake_choco_blanc.html">Lire la suite</a></p>
            </article>
            <article class="project">
                <h1>Fondant au chocolat</h1>

                <img src="images/recette_fondant.jpg" alt="succes" />

                <p>Son origine certaine est difficile à déterminer, mais dès le début du xxe siècle, des pâtisseries du sud-ouest de la France en vendaient. Dans tout les cas, c'est un très bon gateau à faire !</p>

                <p class="suite"><a href="recettes/fondant.html">Lire la suite</a></p>
            </article>
        </div>
    </section>

    <div class="background-2">
        <div style="white-space:nowrap;">
            <h1 class="bg2-title">Licence Pro</h1>
        </div>
    </div>

    <section class="content">
        <div class="listProjects">
            <article class="project">
                <h1>Gateau au chocolat fondant</h1>

                <img src="images/gateau_choco_fondant.jpg" alt="choco" />

                <p>Découvrez la meilleure recette du gâteau au chocolat fondant. Un gâteau au chocolat très facile à réaliser avec un coeur moelleux et un dessus croustillant. Testez vite ce gâteau au chocolat.</p>

                <p class="suite"><a href="recettes/gateau_choco_fondant.html">Lire la suite</a></p>
            </article>
            <article class="project">
                <h1>Truffes au chocolat</h1>

                <img src="images/recette_truffes.jpg" alt="truffes" />

                <p>Qui a dit que les truffes au chocolat n'étaient réservées que pour Noël ? Non non non... Pas question de se faire plaisir avec ce délice qu'une fois par an ! Un anniversaire, un goûter gourmand... </p>

                <p class="suite"><a href="recettes/truffes.html">Lire la suite</a></p>
            </article>
            <article class="project">
                <h1>Macarons au chocolat</h1>

                <img src="images/recette_macarons.jpg" alt="macarons" />

                <p>Le macaron est l’un des desserts pâtissiers préférés des Français ! Confectionné en accolant deux coques de meringue italienne ou française l’une à l’autre avec une ganache, il n’est pas si difficile à réaliser.</p>

                <p class="suite"><a href="recettes/macarons.html">Lire la suite</a></p>
            </article>
            <article class="project">
                <h1>Succès au chocolat</h1>

                <img src="images/recette_succes.jpg" alt="succes" />

                <p>Son origine certaine est difficile à déterminer, mais dès le début du xxe siècle, des pâtisseries du sud-ouest de la France en vendaient. Dans tout les cas, c'est un très bon gateau à faire !</p>

                <p class="suite"><a href="recettes/succes.html">Lire la suite</a></p>
            </article>
            <article class="project">
                <h1>Cheesecake au chocolat blanc</h1>

                <img src="images/cheescake.jpg" alt="cheesecake chocoblanc" />

                <p>Un gâteau américain parsemé d'un zeste de French touch... Crème au cottage cheese adoucie de chocolat blanc pour un délice de cheesecake !</p>

                <p class="suite"><a href="recettes/cheesecake_choco_blanc.html">Lire la suite</a></p>
            </article>
            <article class="project">
                <h1>Fondant au chocolat</h1>

                <img src="images/recette_fondant.jpg" alt="succes" />

                <p>Son origine certaine est difficile à déterminer, mais dès le début du xxe siècle, des pâtisseries du sud-ouest de la France en vendaient. Dans tout les cas, c'est un très bon gateau à faire !</p>

                <p class="suite"><a href="recettes/fondant.html">Lire la suite</a></p>
            </article>
        </div>
    </section>

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
        <p class="admConnect"><a href="#connection">Connexion</a></p>
    </footer>

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
    </script>

</body></html>
