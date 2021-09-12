<?php 
$titre = "Voyage inexploré | Accueil";

include('view/header.php');

    include('view/navigation.php');
?>
<div class="logo_mobile">
    <img src="public/images/mainLogo2.svg">
</div>
<div class="ct_background">
    <img class="img_background" src="public/images/background_anime.svg" alt="Arrière plan (Forêt, Montagne, Oiseau)">
    <div class="ct_voyager">
        <div class="sous_ct_voyager">
            <div class="ct_search _ct_pays">
                <h4 class="name_block_search">Pays</h4>
                <input type="text" id="input_pays" placeholder="Où allez-vous ?">
            </div>

            <div class="ct_search _ct_saison">
                <h4 class="name_block_search">Saisons</h4>
                <select id="select_saison">
                    <option class="option_lock" selected disabled>Quelle période ?</option>
                    <option value="#">Été</option>
                    <option value="#">Automne</option>
                    <option value="#">Hiver</option>
                    <option value="#">Printemps</option>
                    <option value="#">N'importe quelle saisons</option>
                </select>
            </div>

            <div class="ct_search _group_btn">
                <div class="group_saison">
                    <h4 class="name_block_search">Activtés</h4>
                    <select id="select_activite">
                        <option class="option_lock" selected disabled>Que faire ?</option>
                        <option value="#">Randonnés</option>
                        <option value="#">Nautiques</option>
                        <option value="#">Repos</option>
                        <option value="#">Découverte de lieux</option>
                        <option value="#">N'importe quelle activités</option>
                    </select>
                </div>
                <div class="search_voyager">
                    <button id="btn_search"><i class="fab fa-sistrix"></i></button>
                </div>
            </div>
        </div>
        <div class="wrapper-no4">
            <button class="button-bird">
                <p class="button-bird__text"><i class="fas fa-crow"></i>&nbsp; <span>Commençons le voyage ! </span></p>
                <svg version="1.1" class="feather" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 75 38"
                    style="enable-background:new 0 0 75 38;" xml:space="preserve">
                    <g>
                        <path d="M20.8,31.6c3.1-0.7,2.9-2.3,2,1c9.1,4.4,20.4,3.7,29.1-0.8l0,0c0.7-2.1,1-3.9,1-3.9c0.6,0.8,0.8,1.7,1,2.9
                    c4.1-2.3,7.6-5.3,10.2-8.3c0.4-2.2,0.4-4,0.4-4.1c0.6,0.4,0.9,1.2,1.2,2.1c4.5-6.1,5.4-11.2,3.7-13.5c1.1-2.6,1.6-5.4,1.2-7.7
                    c-0.5,2.4-1.2,4.7-2.1,7.1c-5.8,11.5-16.9,21.9-30.3,25.3c13-4,23.6-14.4,29.1-25.6C62.8,9,55.6,16.5,44.7,20.7
                    c2.1,0.7,3.5,1.1,3.5,1.6c-0.1,0.4-1.3,0.6-3.2,0.4c-7-0.9-7.1,1.2-16,1.5c1,1.3,2,2.5,3.1,3.6c-1.9-0.9-3.8-2.2-5.6-3.6
                    c-0.9,0.1-10.3,4.9-22.6-12.3C5.9,17.7,11.8,26.9,20.8,31.6z" />
                    </g>
                </svg>
                <div class="cache"></div>
                <span class="bird"></span>
                <span class="bird--1"></span>
                <span class="bird--3"></span>
                <span class="bird--4"></span>
                <span class="bird--6"></span>
                <span class="bird--7"></span>
                <span class="bird--9"></span>
                <span class="bird--10"></span>
                <span class="bird--18"></span>
                <span class="bird--19"></span>
                <span class="bird--21"></span>
                <span class="bird--22"></span>
                <span class="bird--24"></span>
                <span class="bird--25"></span>
                <span class="bird--30"></span>
        </div>
    </div>
</div>
<div class="headband">
    <div class="_left">
        <div class="_svg1">
            <img src="public/images/telescope.svg" alt="illustration téléscope">
        </div>
        <div class="_text_svg1">
            <h4>Découvrez</h4>
            <p>
                Imaginez des milliers de voyages, hors des sentiers battus, près de chez vous ou plus loin
            </p>
        </div>
    </div>
    <div class="_mid">
        <div class="_svg2">
            <img src="public/images/world.svg" alt="illustration monde">
        </div>
        <div class="_text_svg2">
            <h4>Choisissez</h4>
            <p>
                Imaginez des milliers de voyages, hors des sentiers battus, près de chez vous ou plus loin
            </p>
        </div>
    </div>
    <div class="_right">
        <div class="_svg3">
            <img src="public/images/light.svg" alt="illustration ampoule">
        </div>
        <div class="_text_svg3">
            <h4>Voyagez</h4>
            <p>
                Vivez des expériences authentiques avec un impact positif sur les économies locales
            </p>
        </div>
    </div>
</div>
<div class="promote">
    <div class="leading_title">
        <h1>Où partir en 2022 ?</h1>
        <h2>Notre sélection des meilleurs destinations pour voyager en toute sécurité</h2>
    </div>
    <div class="ct_selection">
        <div class="_selection">
            <img class="picture" src="public/images/icelande.jpg" alt="Image illustration du pays">
            <h3>Islande</h3>
            <button class="btn_selection">Découvrir</button>
            <div class="filter"></div>
        </div>
        <div class="_selection">
            <img class="picture" src="public/images/norway.png" alt="Image illustration du pays"> <h3>Norvège</h3>
            <button class="btn_selection">Découvrir</button>
            <div class="filter"></div>
        </div>
        <div class="_selection">
            <img class="picture" src="public/images/canada.jpg" alt="Image illustration du pays"> <h3>Canada</h3>
            <button class="btn_selection">Découvrir</button>
            <div class="filter"></div>
        </div>
    </div>
</div>

<?php    
include('view/footer.php');    
?>