<?php
require_once "./model/config_bdd.php";

if(isset($_REQUEST['btn_valide_add_promote']))
{
try
{
    $name			= $_REQUEST['country_affichage'];	
    $affichage		= $_REQUEST['affichage'];

    if(!isset($errorMsg))
    {
        $update_stmt=$db->prepare('UPDATE country SET affichage=:affichage_up WHERE name=:name');
        $update_stmt->bindParam(':affichage_up',$affichage);
        $update_stmt->bindParam(':name',$name);
         
        if($update_stmt->execute())
        {
            // header("refresh:5;admin.php");
        }
    }
}
catch(PDOException $e)
{
    echo $e->getMessage();
}

}
?>