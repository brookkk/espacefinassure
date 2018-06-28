
<?php  

include '../Classes/Crud_adherent.php';


$no_licence = $_GET['no_licence'];

//$no_licence = "hoho";

$adherent = new Crud_adherent();

if($adherent->supprimerAdherent($no_licence)){
	echo "good";
header("Location: ../../adherents.php");
}

 else
 	echo $no_licence;



?>

