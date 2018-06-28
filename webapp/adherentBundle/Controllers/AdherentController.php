
<?php  

include '../Classes/Crud_adherent.php';


$no_licence = $_POST['no_licence'];

//$no_licence = "hoho";

$adherent = new Crud_adherent();

if($adherent->ajouterAdherent($no_licence)){
	echo "good";
header("Location: ../../adherents.php");
}

 else
 	echo $no_licence;



?>

