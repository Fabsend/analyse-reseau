<?php
require("./inclu/function.php");
require("./inclu/pdo.php");
$errors = [];
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="test.css">
    <script src="./assets/script/script.js" defer></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon.png">
    <title> NovaLinK | Page d'accueil </title>
</head>

<body>

<?php include_once "./inclu/header.php" ?>
    <h1 class="animate-text"> LES SPECIALISTES DE L'ANALYSE RESEAU SUR LE WEB</h1>
    <!-- DARK MODE START -->
    <div class="toggle_qsn">
        <input type="checkbox" name="" id="dark-mode" class="checkbox_qsn">
        <label for="dark-mode" class="label_qsn">
            <i class="fas fa-moon"></i>
            <i class="fas fa-sun"></i>
            <div class="ball_qsn"></div>
        </label>
    </div>
<!-- DARK MODE END -->

    <?php include_once "./inclu/header.php" ?>
    <main class="main_accueil">
    <div class="background_accueil"></div>


    <!-- <a href="#bloc_accueil_texte">
        <h2 id="en_savoir_plus" class="button">En savoir plus</h2>
    </a> -->

    <h1 id="titre_bloc_accueil_texte"> POURQUOI UTILISER NOVALINK ?</h1>
    <div id="bloc_accueil_texte">

        <div class="accueil_texte">
            <center><img src="./assets/img/vue_ensemble.png" alt="" width="50%"></center>
            <h3>BENEFICIER D'UNE VUE D'ENSEMBLE SUR VOTRE RESEAU</h3>
            <p>En administrateur responsable que vous ??tes, vous aimeriez disposer d???une vue d???ensemble sur la quantit??
                de trafic qui transite par votre r??seau. NOVALINK vous permet d???optimiser la planification des capacit??s
                r??seau. Vous pouvez ??galement v??rifier si l???int??gralit?? de votre forfait de transmission de donn??es est
                effectivement consomm??e et ainsi d??terminer s???il vous faut acheter davantage de capacit??s ou si vous
                pouvez vous accommoder de ce que vous avez.
            </p>

        </div>
        <div class="accueil_texte">
            <center><img src="./assets/img/analyser_reseau.png" alt="" width="50%"></center>
            <h3>ANALYSER UN RESEAU</h3>
            <p>La connexion Internet de votre entreprise est de moins en moins fiable ? Votre r??seau rencontre des
                erreurs dont vous ignorez la cause ? Avec NOVALINK, vous disposez d???un outil de supervision du trafic
                r??seau qui analyse votre consommation de donn??es et met au jour les causes des probl??mes qui perturbent
                votre r??seau. Il vous permettra par ailleurs d???identifier les goulots d?????tranglement et les failles de
                s??curit??. Vous trouverez plus d???informations sur la s??curit?? r??seau ici.
            </p>

        </div>
        <div class="accueil_texte">
            <center><img src="./assets/img/optimiser_reseau.png" alt="" width="50%"></center>
            <h3>OPTIMISER UN RESEAU</h3>
            Tous les r??seaux sont phagocyt??s par de gros consommateurs de bande passante. Cela peut venir d???une
            application pr??cise, d???un flux vid??o comme d???un r??seau WLAN satur??, mais peut aussi ??tre d?? ?? un probl??me
            autrement plus b??te, comme une t??che d???impression en attente contenant des fichiers tr??s lourds qui bouchent
            transitoirement le r??seau. NOVALINK vous permet d???identifier les programmes et ??l??ments qui accaparent votre
            bande passante et donc de mieux ma??triser votre consommation de donn??es.</p>

        </div>

        <div id="bloc_accueil_texte_deux">
            <div id="telephone">
                <img src="./assets/img/iphone_png.png" alt="iphone6" height="100%">
            </div>
            <div id="text_telephone">
                <h3> <mark> TRAVAILLER OU ON VEUT </mark> </h3>
                <h3> <mark> D'OU L'ON VEUT </mark></h3>
                <p>Notre ??quipe utilise un pool de technos pour r??pondre au plus pr??s de vos besoins. Le site est adapt??e sur MAC, Windows, Smartphones, Tablettes & autres outils num??riques pour un confort d'utilisation optimal. Une application d??di??e est disponible d??s maintenant.</p>
                <a href="https://download.fr"><img src="./assets/img/google_app-removebg-preview.png" alt="google_play_store" width="50%"></a>
            </div>
            <div id="ordi">
                <img src="./assets/img/ordi_png.png" alt="ordinateur" height="100%">
            </div>
        </div>
    </div>
    <div id="bloc_accueil_texte_trois">
        <h1>LES AVIS DE NOS UTILISATEURS</h1>
        <figure class="icon-cards mt-3">
            <div class="icon-cards__content">
                <div class="icon-cards__item d-flex align-items-center justify-content-center"><span class="h1">
                            <h5>Pauline THOMAS</h5> DESIGN FLUIDES, GRAPHIQUES RAFFINES <br> ???????????? <br> <br> Depuis que j'utilise cet analyseur de reseau, je n'ai plus aucun problemes de gestion de ce dernier. Un grand merci ! Les designs sont vraiment magnifiques & le site est tr??s moderne ??a change ????
                        </span></div>
                <div class="icon-cards__item d-flex align-items-center justify-content-center"><span class="h1">
                            <h5>Roger FERNANDEZ</h5> UNE FACILITE D'UTILISATION <br> ??????????????? <br> <br> Tout est assez clair, moi qui suis pas tr??s fut?? sur le web. Mon voisin n'a du m'expliquer qu'une seule fois le fonctionnement. Je valide !
                        </span></div>
                <div class="icon-cards__item d-flex align-items-center justify-content-center"><span class="h1">
                            <h5>Christophe CARON</h5> LE TOP POUR TRAVAILLER A DISTANCE <br> ??????????????? <br> <br> Avec le covid, c'??tait beaucoup trop compliqu?? pour moi de g??rer. heureusement il y a m??me une interface mobile li??. C'est vraiment g??nial. ????
                        </span></div>
                </div>
            </figure>
        </div>

       <!--  <div id="bloc_accueil_texte_quatre">
            <div class="accueil_texte_quatre" id="text_left">
                <h1>Des forfaits <br> pour chaque <br> besoin</h1>

            </div>
        </figure>
    </div>

    <div id="bloc_accueil_texte_quatre">
        <div class="accueil_texte_quatre" id="text_left">
            <h1>Des forfaits <br> pour chaque <br> besoin</h1>

        </div>
        <div class="accueil_texte_quatre">
            <div id="header_card_accueil_left">
                <h2>BASIQUE</h2>
                <h3>GRATUIT</h3>
            </div>
            <div id="card_accueil_left">
                <h5>Inclus:</h5>
                <ul class="forfait">
                    <li>??? Affichage des LOGS</li>
                    <li>??? Graphiques comparatifs</li>
                    <li>??? Darkmode pour travailler partout</li>
                    <li>??? Template de base</li>
                </ul>
                <a href="">
                    <button id="bouton_obtenir">OBTENIR</button>
                </a>
            </div>
        </div>
        <div class="accueil_texte_quatre">
            <div id="header_card_accueil_right">
                <h2>PACK PRO (Bient??t disponible)</h2>
                <h3>19.99???</h3>
            </div>
            <div id="card_accueil_right">
                <h4>Inclus:</h4>
        </div> 

                <ul>
                    <li>??? Affichage des LOGS</li>
                    <li>??? Affichage des trames </li>
                    <li>??? Tableaux personnalisables</li>
                    <li>??? Nouveaux Templates deverouill??s </li>
                </ul>
                <a href="">
                    <button id="bouton_obtenir">OBTENIR</button>
                </a>
            </div>-->
        </div>
    </div>
</main>

<?php include_once "./inclu/footer.php" ?>

</body>

</html>