



<html>

<head>
</head>


<body>

<?php

$id_licence = $_GET['no_licence'];

?>


<form method ="post" action="../Controllers/updateAdherent.php">
No de licence: &nbsp
<input type="text" name="no_licence"><br><br>
<input type="hidden" name="id_licence" value="<?php echo $id_licence ?>"><br><br>

<input type="submit" value="Sauvegarder">

</form>

</body>

</html>
