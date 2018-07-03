



<?php  


class Connexion
{


	public function connect(){

try
{
 	$bdd = new PDO('mysql:host=127.0.0.1;dbname=finarea','root','root');
}
catch (Exception $e)
 	{
 	// En cas d'erreur, on affiche un message et on arrête tout
 	die('Erreur : ' . $e->getMessage());
}


	}



}



/*$dbcon=mysqli_connect("localhost","root","");  
mysqli_select_db($dbcon,"finarea");  */
?>