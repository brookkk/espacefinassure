<?php  

//include '../../../database/db_connection.php';
//include '../Classes/Crud_adherent.php';
class Crud_adherent
{

private $bdd= '';
	public function connect(){
		

		try
		{
		 	$this->bdd = new PDO('mysql:host=127.0.0.1;dbname=finarea','root','root');
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


	public function ajouterAdherent($no_licence, $type_d_identite, $id_identite, $nom, $prenom, $categorie, $ligue, $club, $ville, $fonction, $user)
	{

		//$request = $this->bdd->query('INSERT * FROM adherent');

		/*$request = $this->bdd->prepare("INSERT INTO 
			`finarea`.`adherent` (`Licence No`, `Identity Type`, `Identity ID`, `Last Name`, `First Name`, `Category`,
			 `League`, `Club`, `City`, `Function`, `Creation Date`, `Created By`)
			  VALUES (:no_licence, '', '', '', '', '', '', '', '', '', CURRENT_TIMESTAMP, '')");*/

//session_start();

//$user =  $_SESSION['pseudo'];


		$request = $this->bdd->prepare("INSERT IGNORE INTO 
			`finarea`.`adherent` (`Licence No`, `Identity Type`, `Identity ID`, `Last Name`, `First Name`, `Category`, `League`, `Club`, `City`, `Function`, `Creation Date`, `Created By`, `Last Update Date`, `Updated By`)
			  VALUES (:no_licence, :type_d_identite, :id_identite, :nom, :prenom, :categorie, :ligue, :club, :ville, :fonction, :time, :user, '', '')");


		$date = date("Y-m-d H:i:s");

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
		$request->bindParam(':time', $date  );
		$request->bindParam(':user', $user);


			

		//echo "1<br>";


		if($request->execute()) {


			return $request->rowCount();}
		else return -1;



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




public function updateAdherent($id, $no_licence, $type_d_identite, $id_identite, $nom, $prenom, $categorie, $ligue, $club, $ville, $fonction, $user)
	{
		

		//$request = $this->bdd->query('INSERT * FROM adherent');

		/*$request = $this->bdd->prepare("INSERT INTO 
			`finarea`.`adherent` (`Licence No`, `Identity Type`, `Identity ID`, `Last Name`, `First Name`, `Category`,
			 `League`, `Club`, `City`, `Function`, `Creation Date`, `Created By`)
			  VALUES (:no_licence, '', '', '', '', '', '', '', '', '', CURRENT_TIMESTAMP, '')");*/

		$request = $this->bdd->prepare(

			  "UPDATE IGNORE `finarea`.`adherent` SET `Licence No`=:no_licence,
			  `Identity Type`=:type_d_identite,
			  `Identity ID`=:id_identite,
			  `Last Name`=:nom,
			  `First Name`=:prenom,
			  `Category`=:categorie,
			  `League`=:ligue,
			  `Club`=:club,
			  `City`=:ville,
			  `Function`=:fonction,
			  `Last Update Date`=:time,
			  `Updated By`=:user
			    WHERE `Licence No`=:id_licence"


			  );

		$request->bindParam(':id_licence', $id);



		$date = date("Y-m-d H:i:s");

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
		$request->bindParam(':time', $date  );
		$request->bindParam(':user', $user);


		if($request->execute()) 
			return $request->rowCount();

		else return -1;



}



public function getAdherent($no_licence)
	{
		

		//$request = $this->bdd->query('INSERT * FROM adherent');

		/*$request = $this->bdd->prepare("INSERT INTO 
			`finarea`.`adherent` (`Licence No`, `Identity Type`, `Identity ID`, `Last Name`, `First Name`, `Category`,
			 `League`, `Club`, `City`, `Function`, `Creation Date`, `Created By`)
			  VALUES (:no_licence, '', '', '', '', '', '', '', '', '', CURRENT_TIMESTAMP, '')");*/

		$request = $this->bdd->prepare(

			  "SELECT * from `finarea`.`adherent` where `Licence No`=:no_licence"


			  );

		$request->bindParam(':no_licence', $no_licence);


		if($request->execute()) 
			return $request->fetchAll();

		else return 0;



}





}



?>