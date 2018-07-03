

<!--

<html>

<head>
</head>


<body>

<form method ="post" action="../Controllers/AdherentController.php">
No de licence: &nbsp
<input type="text" name="no_licence"><br><br>

<input type="submit" value="Sauvegarder">

</form>

</body>

</html>


-->
























<!DOCTYPE html>

<?php  
session_start();  
  
if(!$_SESSION['pseudo'])  
{  
  
    header("Location: ../../../login.php");//redirect to login page to secure the welcome page without login access.  
}  
  
?>  

<html>
<!-- Insertion of header -->
<?php include '../../fina-head.php'; ?>
  
  <body class="page-header-fixed bg-1">
    <div class="modal-shiftfix">
      
	  <!-- Navigation -->

		<?php include '../../fina-navigation.php'; ?>
	  
      <!-- End Navigation --> 
	  
      <div class="container-fluid main-content">
        <div class="page-title">
          <h1>
            Gestion des adhérents assurés
          </h1>
		  		  
        </div>

        <div>

        		<form method ="post" action="../Controllers/AdherentController.php">
No de licence: &nbsp
<input type="text" name="no_licence"><br><br>

<input type="submit" value="Sauvegarder">

</form>

        </div>

      </div>
    </div>
  
  </body>
</html>












