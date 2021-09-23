<?php
session_start();

if (empty($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
} else {
    $titre = "Admin | Accueil";

    include('view/admin_header.php');

    include('view/admin_nav.php');
?>

    <div class="stage1_admin">
        <div class="_row">
            <div class="stage1_column1">
                <!-- -----------Mise en avant pour les pays------------  -->
                <div class="ct_add_affichage_promote">
                    <h2>Ajouter un pays à la page d'accueil</h2>
                    <?php
                    include("controller/add_promote_country.php");
                    ?>
                    <form action="" method="post">
                        <select name="country_affichage" id="select_country">
                            <option selected disabled>Choix du pays</option>
                            <?php
                            $select_stmt = $db->prepare("SELECT name FROM country ORDER BY id DESC");
                            $select_stmt->execute();
                            while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                                <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <input type="hidden" name="affichage" value="affichage">

                        <button id="btn_valide_add_promote" name="btn_valide_add_promote">Ajouter</button>
                    </form>
                </div>

                <!-- -----------Suppression pour la mise en avant des pays------------  -->
                <div class="ct_edit_affichage">
                    <h2>Les pays <br> actuels mis en avant </h2>
                    <?php
                    include("controller/delete_promote_country.php");

                    $select_stmt = $db->prepare("SELECT id, name FROM country WHERE affichage LIKE 'affichage'");
                    $select_stmt->execute();
                    while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <form action="" method="post">
                            <h3><?php echo $row['name']; ?></h3>
                            <input type="hidden" name="name_country" value="<?php echo $row['id']; ?>">
                            <input type="hidden" name="edit_country" value="Non">
                            <button id="btn_delete_affichage" name="btn_delete_country">Supprimer</button>
                        </form>
                    <?php
                    }
                    ?>
                </div>
            </div>


            <div class="stage1_column2">
                <!-- -----------Mise en avant pour les activity------------  -->
                <div class="ct_add_affichage_activity">
                    <h2>Ajouter une activité à la page d'accueil</h2>
                    <?php
                    include("controller/add_promote_activity.php");
                    ?>
                    <form action="" method="post">
                        <select name="activity_affichage" id="select_activity">
                            <option selected disabled>Choix des activités</option>
                            <?php
                            $select_stmt = $db->prepare("SELECT name FROM activity ORDER BY id DESC");
                            $select_stmt->execute();
                            while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                                <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <select name="select_activity" id="select_activity">
                            <option selected disabled>Choix de l'emplacement</option>
                            <option value="activity_right">Activité : Haut-droite</option>
                            <option value="activity_bottom">Activité : En bas</option>
                        </select>
                        <button id="btn_valide_add_activity" name="btn_valide_add_activity">Ajouter</button>
                    </form>
                </div>

                <!-- -----------Édition pour la mise en avant, suppression / edition------------  -->
                <div class="ct_edit_activity">
                    <h2>Les acitivités <br> actuels mis en avant </h2>
                    <?php
                    include("controller/delete_promote_activity.php");

                    $select_stmt = $db->prepare("SELECT id, name, affichage FROM activity WHERE affichage LIKE 'activity_right' OR affichage LIKE 'activity_bottom'");
                    $select_stmt->execute();
                    while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <form action="" method="post">
                            <h3><?php echo $row['name']; ?></h3>
                            <input type="hidden" name="name_activity" value="<?php echo $row['id']; ?>">
                            <input type="hidden" name="edit_activity" value="Non">
                            <button id="btn_delete_activity" name="btn_delete_activity">Supprimer</button>
                        </form>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- -----------Ajout d'un pays------------  -->
    <?php
    include("controller/add_country.php");
    ?>
    <div class="stage2_admin">
        <h2>Add pays</h2>
        <div class="add_country">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" name="name" id="country_name_add" placeholder="Nom du pays">
                <input type="file" name="image_file" id="country_image_add">
                <button name="btn_add_country">Ajouter</button>
            </form>
        </div>
    </div>
    <!-- -----------Ajout d'une'activité------------  -->
    <?php
    include("controller/add_activity.php");
    ?>
    <div class="stage3_admin">
        <h2>Add Activité</h2>
        <div class="add_activity">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" name="name" id="activity_name_add" placeholder="Nom de l'activité">
                <input type="file" name="image_file" id="activity_image_add">
                <button name="btn_add_activity">Ajouter</button>
            </form>
        </div>
    </div>
<?php
}
?>