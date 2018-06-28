
<?php  

include '../Classes/Crud_adherent.php';


$adherent1 = array('no_licence' => 'aaa11' );
$adherent2 = array('no_licence' => 'aaa21' );
$adherent3 = array('no_licence' => 'aaa3' );
$adherent4 = array('no_licence' => 'aaa4' );
$adherent5 = array('no_licence' => 'aaa5' );
$adherent6 = array('no_licence' => 'aaa6' );
$adherent7 = array('no_licence' => 'aaa7' );


$adherents = array('adherent1' => $adherent1,
					'adherent2' => $adherent2,
					'adherent3' => $adherent3,
					'adherent4' => $adherent4,
					'adherent5' => $adherent5,
					'adherent6' => $adherent6,
					'adherent7' => $adherent7,
 );

//$no_licence = "hoho";




foreach ($adherents as $key => $adher) {
	# code...


$adherent = new Crud_adherent();

if($adherent->ajouterAdherent($adher['no_licence'])){
	echo "good";
header("Location: ../../adherents.php");
}

 else
 	echo $adher['no_licence'];

}

?>

