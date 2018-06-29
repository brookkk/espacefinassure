<?php  

//include '../../../database/db_connection.php';
//include '../Classes/Crud_adherent.php';
class Crud_adherent
{

private $bdd= '';
	public function connect(){
		

		try
		{
		 	$this->bdd = new PDO('mysql:host=127.0.0.1;dbname=finarea','root','');
		 	 $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
		}
		catch (PDOException $e)
		 	{
		 	// En cas d'erreur, on affiche un message et on arrête tout
		 		echo "not connected <br>";
		 	//die('Erreur : ' . $e->getMessage());
		}


	}

     public function __construct(){
     	$this->connect();
     }


	public function ajouterAdherent($no_licence, $type_d_identite, $id_identite, $nom, $prenom, $categorie, $ligue, $club, $ville, $fonction)
	{

		//$request = $this->bdd->query('INSERT * FROM adherent');

		/*$request = $this->bdd->prepare("INSERT INTO 
			`finarea`.`adherent` (`Licence No`, `Identity Type`, `Identity ID`, `Last Name`, `First Name`, `Category`,
			 `League`, `Club`, `City`, `Function`, `Creation Date`, `Created By`)
			  VALUES (:no_licence, '', '', '', '', '', '', '', '', '', CURRENT_TIMESTAMP, '')");*/




		$request = $this->bdd->prepare("INSERT IGNORE INTO 
			`finarea`.`adherent` (`Licence No`, `Identity Type`, `Identity ID`, `Last Name`, `First Name`, `Category`, `League`, `Club`, `City`, `Function`)
			  VALUES (:no_licence, :type_d_identite, :id_identite, :nom, :prenom, :categorie, :ligue, :club, :ville, :fonction)");



		$request->bindParam(':no_licence', $no_licence);
		$request->bindParam(':type_d_identite', $type_d_identite);
		$request->bindParam(':id_identite', $id_identite);
		$request->bindParam(':nom', $nom);
		$request->bindParam(':prenom', $prenom);
		$request->bindParam(':categorie', $categorie);
		$request->bindParam(':ligue', $ligue);
		$request->bindParam(':club', $club);
		$request->bindParam(':ville', $ville);
		$request->bindParam(':fonction', $fonction);


		echo "1<br>";


		if($request->execute()) {


			return 1;}
		else return 0;



}





	public function supprimerAdherent($no_licence)
	{
		

		//$request = $this->bdd->query('INSERT * FROM adherent');

		/*$request = $this->bdd->prepare("INSERT INTO 
			`finarea`.`adherent` (`Licence No`, `Identity Type`, `Identity ID`, `Last Name`, `First Name`, `Category`,
			 `League`, `Club`, `City`, `Function`, `Creation Date`, `Created By`)
			  VALUES (:no_licence, '', '', '', '', '', '', '', '', '', CURRENT_TIMESTAMP, '')");*/

		$request = $this->bdd->prepare("DELETE FROM 
			`finarea`.`adherent` 
			  WHERE `Licence No` = :no_licence");

		$request->bindParam(':no_licence', $no_licence);


		if($request->execute()) 
			return 1;

		else return 0;



}




public function updateAdherent($id_licence, $no_licence)
	{
		

		//$request = $this->bdd->query('INSERT * FROM adherent');

		/*$request = $this->bdd->prepare("INSERT INTO 
			`finarea`.`adherent` (`Licence No`, `Identity Type`, `Identity ID`, `Last Name`, `First Name`, `Category`,
			 `League`, `Club`, `City`, `Function`, `Creation Date`, `Created By`)
			  VALUES (:no_licence, '', '', '', '', '', '', '', '', '', CURRENT_TIMESTAMP, '')");*/

		$request = $this->bdd->prepare(

			  "UPDATE `finarea`.`adherent` SET `Licence No`=:no_licence WHERE `Licence No`=:id_licence"


			  );

		$request->bindParam(':no_licence', $no_licence);
		$request->bindParam(':id_licence', $id_licence);


		if($request->execute()) 
			return 1;

		else return 0;



}





}



?>