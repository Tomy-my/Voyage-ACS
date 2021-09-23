<?php
include("controller/login.php");
?>
<div class="page_login">
    <div class="container_login">
        <h2>Bonjour !</h2>
        <p>Connectez-vous pour avoir accès à toutes nos fonctionnalités.</p>
        <form method="post">
            <div class="container_mail">
                <div class="ico_mail"><i class="fas fa-user"></i></div>
                <div class="input_mail">
                    <input onclick="EffectMail()" type="email" name="email" id="inputEmail" placeholder="E-mail de connexion" class="form-control" autocomplete="email" required pattern="^[A-Za-z]+@{1}[A-Za-z]+\.{1}[A-Za-z]{2,}$" maxlength="20">
                </div>
            </div>
            <div class="container_password">
                <div class="ico_password"><i class="fas fa-lock"></i></div>
                <div class="input_password">
                    <input onclick="EffectPassword()" type="password" name="password" id="inputPassword" placeholder="Mot de passe" class="form-control" autocomplete="current-password" required>
                </div>
            </div>
            <div class="message2">
                <?php if (isset($erreur)) {
                    echo $erreur;
                } ?>
            </div>
            <button class="btn btn-lg btn-primary" type="submit" name="submit">
                Connexion
            </button>

        </form>
        <p id="redirec_register">Vous n'êtes pas un administrateur ? <strong><a href="index.php">Retourner à la page d'acceuil.</a></strong></p>
    </div>
</div>