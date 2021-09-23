<?php
require_once "./model/config_bdd.php";

if(isset($_REQUEST['btn_delete_activity']))
{
try
{
    $id           = $_REQUEST['name_activity'];
    $affichage		= $_REQUEST['edit_activity'];

    if(!isset($errorMsg))
    {
        $update_stmt=$db->prepare('UPDATE activity SET affichage=:affichage_up WHERE id=:id');
        $update_stmt->bindParam(':affichage_up',$affichage);
        $update_stmt->bindParam(':id',$id);

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
