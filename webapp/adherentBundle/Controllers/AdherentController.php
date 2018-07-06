
<?php  
session_start();
include '../Classes/Crud_adherent.php';
//include '../../fina-navigation.php';

$no_licence = htmlspecialchars($_POST['no_licence']);
$type_d_identite = htmlspecialchars($_POST['type_d_identite']);
//echo (1/$new_var);
$id_identite = htmlspecialchars($_POST['id_identite']);
$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$categorie = htmlspecialchars($_POST['categorie']);
$ligue = htmlspecialchars($_POST['ligue']);
$club = htmlspecialchars($_POST['club']);
$ville = htmlspecialchars($_POST['ville']);
$fonction = htmlspecialchars($_POST['fonction']);

$user = $_SESSION['pseudo'];
//print_r($_SESSION['pseudo']);

$adherent = new Crud_adherent();
//if($adherent->ajouterAdherent($no_licence)){
if($adherent->ajouterAdherent($no_licence, $type_d_identite, $id_identite, $nom, $prenom, $categorie, $ligue, $club, $ville, $fonction, $user)){
	header("Location: ../../adherents.php");
}

 else
 	echo $no_licence;



?>

