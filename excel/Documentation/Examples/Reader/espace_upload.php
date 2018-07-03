<?php

error_reporting(E_ALL);
set_time_limit(0);

date_default_timezone_set('Europe/London');

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>File Import</title>

</head>
<body>

 <?php

/** Include path **/
set_include_path(get_include_path() . PATH_SEPARATOR . '../../../Classes/');

/** PHPExcel_IOFactory */
include 'PHPExcel/IOFactory.php';
include '../../../../webapp/adherentBundle/Classes/Crud_adherent.php';


$file_name = $_GET['file_name'];

$inputFileName = "../../../../webapp/upload/uploads/".$file_name;
 $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);



$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);

/*
echo("hello <br>");
echo($sheetData[1]['B']);*/



if($sheetData[1]['A']!="No licence"  ||
 $sheetData[1]['B']!="Type d'identité" ||
 $sheetData[1]['C']!="ID identité" ||
 $sheetData[1]['D']!="Nom" ||
 $sheetData[1]['E']!="Prénom" ||
 $sheetData[1]['F']!="Catégorie" ||
 $sheetData[1]['G']!="Ligue" ||
 $sheetData[1]['H']!="Club" ||
 $sheetData[1]['I']!="Ville" ||
 $sheetData[1]['J']!='Fonction' 
 )

	//echo "pas conforme";
	header("Location: ../../../../webapp/adherents.php?conforme=0");
/*else echo "conforme";
echo "<br>";*/

else
{
$adher = new Crud_adherent();

$nb_traites = 0;
$non_traites = array();
foreach($sheetData as $key=>$adherent){

	if($key > 1){
	if($adher->ajouterAdherent($adherent['A'], $adherent['B'], $adherent['C'], $adherent['D'], $adherent['E'], $adherent['F'], $adherent['G'], $adherent['H'], $adherent['I'], $adherent['J'])==0)
		$non_traites[]=$adherent;
	else $nb_traites++;
	}
}

echo ("traités : " . $nb_traites) ;

/*echo "<pre>";
 print_r($non_traites); 
echo "</pre>";*/

$nb_non_traites = sizeof($sheetData)-$nb_traites -1;
echo ("<br>non traites : " . $nb_non_traites) ;
if($nb_non_traites > 0)
header("Location: ../../../../webapp/adherents.php?nb_doublons=$nb_non_traites");
else
header("Location: ../../../../webapp/adherents.php?traites=1");


}

?>
<body>
</html>