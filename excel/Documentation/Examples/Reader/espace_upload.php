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



//echo($sheetData[1]['A']);
$adher = new Crud_adherent();

$nb_traites = 0;
$non_traites = array();
foreach($sheetData as $key=>$adherent){

	if($key > 1){
	if($adher->ajouterAdherent($adherent['A'], $adherent['B'], $adherent['C'], $adherent['D'], $adherent['E'], $adherent['F'], $adherent['G'], $adherent['H'], $adherent['I'], $adherent['J'])==0)
		$non_traites[]=$adherent;
	
	}
}

echo ("traités : " . $nb_traites) ;

echo "<pre>"; print_r($non_traites); echo "</pre>";






?>
<body>
</html>