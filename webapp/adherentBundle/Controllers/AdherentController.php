
<?php  
session_start();
include '../Classes/Crud_adherent.php';
//include '../../fina-navigation.php';

$no_licence = $_POST['no_licence'];
$type_d_identite = $_POST['type_d_identite'];
//echo (1/$new_var);
$id_identite = $_POST['id_identite'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$categorie = $_POST['categorie'];
$ligue = $_POST['ligue'];
$club = $_POST['club'];
$ville = $_POST['ville'];
$fonction = $_POST['fonction'];

//$no_licence = "hoho";
$user = $_SESSION['pseudo'];
//print_r($_SESSION['pseudo']);

$adherent = new Crud_adherent();
//if($adherent->ajouterAdherent($no_licence)){
if($adherent->ajouterAdherent($no_licence, $type_d_identite, $id_identite, $nom, $prenom, $categorie, $ligue, $club, $ville, $fonction, $user)){
	//echo "good";
	header("Location: ../../adherents.php");
}

 else
 	echo $no_licence;



?>

