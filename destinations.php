<?php
$titre = "Voyage inexploré | Accueil";

include('view/header.php');

include('view/navigation.php');

require_once("model/config_bdd.php");
?>
<div class="logo_mobile">
    <img src="public/images/mainLogo2.svg">
</div>
<div class="ct_background_destinations">
    <img class="img_background" src="public/images/background.jpg" alt="Arrière plan (Forêt, Montagne)">
    <div class="_background_ct">
        <h1>Trouvez votre bonheur parmis notre sélection !</h1>
    </div>
</div>
<div class="container_carte_destinations">
    <?php
        $select_stmt = $db->prepare("SELECT name, image FROM country");
        $select_stmt->execute();
        while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
    ?>
        <div class="_carte">
            <div class="ct_img">
                <img src="public/upload/<?php echo $row['image']; ?>" alt="Image du pays">
            </div>
            <h4><?php echo $row['name']; ?></h4>
            <a href="construction.php">
                <button class="btn_choisir">Sélectionner</button>
            </a>
        </div>
    <?php
        }
    ?>
    <!-- <div class="_carte">
        <div class="ct_img">
            <img src="public/images/country/france.jpg" alt="Image du pays">
        </div>
        <h4>France</h4>
        <a href="construction.php">
            <button class="btn_choisir">Sélectionner</button>
        </a>
    </div>
    <div class="_carte">
        <div class="ct_img">
            <img src="public/images/country/canada.jpg" alt="Image du pays">
        </div>
        <h4>Canada</h4>
        <a href="construction.php">
            <button class="btn_choisir">Sélectionner</button>
        </a>
    </div>
    <div class="_carte">
        <div class="ct_img">
            <img src="public/images/country/japon.jpg" alt="Image du pays">
        </div>
        <h4>Japon</h4>
        <a href="construction.php">
            <button class="btn_choisir">Sélectionner</button>
        </a>
    </div>
    <div class="_carte">
        <div class="ct_img">
            <img src="public/images/country/italie.jpg" alt="Image du pays">
        </div>
        <h4>Italie</h4>
        <a href="construction.php">
            <button class="btn_choisir">Sélectionner</button>
        </a>
    </div>
    <div class="_carte">
        <div class="ct_img">
            <img src="public/images/country/france.jpg" alt="Image du pays">
        </div>
        <h4>France</h4>
        <a href="construction.php">
            <button class="btn_choisir">Sélectionner</button>
        </a>
    </div>
    <div class="_carte">
        <div class="ct_img">
            <img src="public/images/country/canada.jpg" alt="Image du pays">
        </div>
        <h4>Canada</h4>
        <a href="construction.php">
            <button class="btn_choisir">Sélectionner</button>
        </a>
    </div>
    <div class="_carte">
        <div class="ct_img">
            <img src="public/images/country/japon.jpg" alt="Image du pays">
        </div>
        <h4>Japon</h4>
        <a href="construction.php">
            <button class="btn_choisir">Sélectionner</button>
        </a>
    </div>
    <div class="_carte">
        <div class="ct_img">
            <img src="public/images/country/italie.jpg" alt="Image du pays">
        </div>
        <h4>Italie</h4>
        <a href="construction.php">
            <button class="btn_choisir">Sélectionner</button>
        </a>
    </div>
    <div class="_carte">
        <div class="ct_img">
            <img src="public/images/country/france.jpg" alt="Image du pays">
        </div>
        <h4>France</h4>
        <a href="construction.php">
            <button class="btn_choisir">Sélectionner</button>
        </a>
    </div>
    <div class="_carte">
        <div class="ct_img">
            <img src="public/images/country/canada.jpg" alt="Image du pays">
        </div>
        <h4>Canada</h4>
        <a href="construction.php">
            <button class="btn_choisir">Sélectionner</button>
        </a>
    </div>
    <div class="_carte">
        <div class="ct_img">
            <img src="public/images/country/japon.jpg" alt="Image du pays">
        </div>
        <h4>Japon</h4>
        <a href="construction.php">
            <button class="btn_choisir">Sélectionner</button>
        </a>
    </div> -->
</div>
<div class="explore_headband">
    <img src="public/images/kayak.jpg" alt="Image décorative">
    <div class="_container_text_explore">
        <h3>Chez Evatrip nous sommes convaincus que le voyage se conjugue au pluriel.</h3>
        <p>
            Il n'y a pas une seule manière de voyager : il existe autant de façons de vivre un périple que de voyageurs.
        </p>
        <p>
            Pour vous aider à y voir plus clair et à réaliser le voyage de vos rêves, nous vous proposons sur cette page une série d'inspirations. A vous de choisir celle qui sera la plus proche de vous et de vos envies du moment.
        </p>
        <p>
            Vous souhaitez voyager en solo, hors des sentiers battus, ou vous préfèrerez les grands classiques en compagnie d'un guide ? Vous n'imaginez pas passer plus de 12 heures coupé(e) du monde ou au contraire vous ne rêvez que de grands espaces ?
        </p>
        <p>
            Ce sont des dizaines d'idées voyage et de destinations de voyage, sur tous les continents, qui ont été préparées par mes soin  . A vous de voir laquelle de ces idées saura vous inspirer !
        </p>
    </div>
</div>

<?php
include('view/footer.php');
?>