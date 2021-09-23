<?php
require_once "./model/config_bdd.php";

if(isset($_REQUEST['btn_valide_add_activity']))
{
try
{
    $name			= $_REQUEST['activity_affichage'];	
    $affichage		= $_REQUEST['select_activity'];

    if(!isset($errorMsg))
    {
        $update_stmt=$db->prepare('UPDATE activity SET affichage=:affichage_up WHERE name=:name');
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