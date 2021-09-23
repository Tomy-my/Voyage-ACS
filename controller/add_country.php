<?php 

require_once('./model/config_bdd.php');

if(isset($_REQUEST['btn_add_country']))
{
	try
	{
		$name			= $_REQUEST['name'];	
			
		$image_file	= $_FILES["image_file"]["name"];
		$type		= $_FILES["image_file"]["type"];	
		$size		= $_FILES["image_file"]["size"];
		$temp		= $_FILES["image_file"]["tmp_name"];
		
		$path="./public/upload/".$image_file; 
		
		if(empty($name)){
			$errorMsg="Veuillez entrer un nom de pays";
		}

		else if(empty($image_file)){
			$errorMsg="Please Select Image";
		}
		else if($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') 
		{	
			if(!file_exists($path)) //Regarde si l'image existe dans /upload 
			{
				if($size < 10000000) //Fichié maximum
				{
					move_uploaded_file($temp, "./public/upload/" .$image_file); 
				}
				else
				{
					$errorMsg="Image trop grosse, maximum 5mb"; 
				}
			}
			else
			{	
				$errorMsg="Image déjà existante"; 
			}
		}
		else
		{
			$errorMsg="Mauvais format d'image ! choissiez seulement [JPG] - [JPEG] - [PNG] - [GIF]"; 
		}
		
		if(empty($errorMsg))
		{
			$insert_stmt=$db->prepare('INSERT INTO country(name,image) VALUES(:name,:fimage)');				
			$insert_stmt->bindParam(':name',$name);	
			$insert_stmt->bindParam(':fimage',$image_file);	 
		
			if($insert_stmt->execute())
			{
				// header("refresh:0;admin.php"); 
			}
		}
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
} 