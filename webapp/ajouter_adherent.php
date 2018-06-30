
<!DOCTYPE html>

<?php  
session_start();  
  
if(!$_SESSION['pseudo'])  
{  
  
    header("Location: ../login.php");//redirect to login page to secure the welcome page without login access.  
}  
  
?>  

<html>
<!-- Insertion of header -->
<?php include 'fina-head.php'; ?>
  
  <body class="page-header-fixed bg-1">
    <div class="modal-shiftfix">
      
	  <!-- Navigation -->

		<?php include 'fina-navigation.php'; ?>
	  
      <!-- End Navigation --> 
	  
      <div class="container-fluid main-content">
        <div class="page-title">
          <h1>
            Ajout d'un nouveau adhérent
          </h1>
		  		  
        </div>

       


          <div  class="col-md-4">  
          </div>
          <div  class="col-md-7">  

        		<form method ="post" action="./adherentBundle/Controllers/AdherentController.php">

              <div class="form-group row">
    <label for="no_licence" class="col-sm-2 col-form-label">No de licence</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="no_licence" placeholder="no de licence" required title="Num&eacute;ro de licence" oninvalid="this.setCustomValidity('pri&egrave;re de remplire le num&eacute;ro de licence')" oninput="setCustomValidity('')" />
    </div>
  </div>

               <div class="form-group row">
    <label for="type_d_identite" class="col-sm-2 col-form-label">Type d'identit&eacute;</label>
    <div class="col-sm-4">
      <!--<input type="text" class="form-control" name="type_d_identite" placeholder="Type d'identit&eacute" required title="Type d identi&eacute;" oninvalid="this.setCustomValidity('pri&egrave;re de remplire le Type d identit&eacute;')" oninput="setCustomValidity('')"/>
      -->
      <select class="form-control" name="type_d_identite">
        <option value="CIN">CIN</option>
        <option value="PASSPORT">PASSPORT</option>
        <option value="CARTE SEJOUR">CARTE SEJOUR</option>
        <option value="PERMIS">PERMIS</option>
      </select>

    </div>
  </div>

                 <div class="form-group row">
    <label for="id_identite" class="col-sm-2 col-form-label">ID identité</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="id_identite" placeholder="ID identité" required title="ID identit&eacute;" oninvalid="this.setCustomValidity('pri&egrave;re de remplire l ID d identti&eacute;')" oninput="setCustomValidity('')"/>
    </div>
  </div>

            <div class="form-group row">
    <label for="nom" class="col-sm-2 col-form-label">Nom</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="nom" placeholder="Nom" required title="Nom" oninvalid="this.setCustomValidity('pri&egrave;re de remplire le nom')" oninput="setCustomValidity('')"/>
    </div>
  </div>

      <div class="form-group row">
    <label for="prenom" class="col-sm-2 col-form-label">Prénom</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="prenom" placeholder="Prénom" required title="Prénom" oninvalid="this.setCustomValidity('pri&egrave;re de remplire le prénom')" oninput="setCustomValidity('')">
    </div>
  </div>

    <div class="form-group row">
    <label for="categorie" class="col-sm-2 col-form-label">Catégorie</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="categorie" placeholder="Catégorie" required title="Catégorie" oninvalid="this.setCustomValidity('pri&egrave;re de remplire la Catégorie')" oninput="setCustomValidity('')"> 
    </div>
  </div>

    <div class="form-group row">
    <label for="ligue" class="col-sm-2 col-form-label">Ligue</label>
    <div class="col-sm-4">
      <!--<input type="text" class="form-control" name="ligue" placeholder="Ligue" required title="Ligue" oninvalid="this.setCustomValidity('pri&egrave;re de remplire la ligue')" oninput="setCustomValidity('')">
      -->

      <select class="form-control" name="type_d_identite">
        <option value="CIN">CIN</option>
        <option value="PASSPORT">PASSPORT</option>
        <option value="CARTE SEJOUR">CARTE SEJOUR</option>
        <option value="PERMIS">PERMIS</option>
      </select>

    </div>
  </div>

    <div class="form-group row">
    <label for="club" class="col-sm-2 col-form-label">Club</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="club" placeholder="Club" required title="Club" oninvalid="this.setCustomValidity('pri&egrave;re de remplire le club')" oninput="setCustomValidity('')">
    </div>
  </div>

    <div class="form-group row">
    <label for="ville" class="col-sm-2 col-form-label">Ville</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="ville" placeholder="Ville" required title="Ville" oninvalid="this.setCustomValidity('pri&egrave;re de remplire la ville')" oninput="setCustomValidity('')">
    </div>
  </div>

    <div class="form-group row">
    <label for="fonction" class="col-sm-2 col-form-label">Fonction</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="fonction" placeholder="Fonction" required  title="fonction" oninvalid="this.setCustomValidity('pri&egrave;re de remplire la fonction')" oninput="setCustomValidity('')">
    </div>
  </div>

<!--
No de licence: &nbsp   &nbsp &nbsp &nbsp &nbsp &nbsp   <input type="text" name="no_licence"><br>
Type d'identité: &nbsp    &nbsp  <input type="text" name="type_d_identite"><br>
ID identité: &nbsp    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <input type="text" name="id_identite"><br>
Nom: &nbsp     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp <input type="text" name="nom"><br> 
Prénom: &nbsp    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <input type="text" name="prenom"> <br>
Catégorie: &nbsp      <input type="text" name="categorie"> <br>
Ligue: &nbsp      <input type="text" name="ligue"><br> 
Club: &nbsp      <input type="text" name="club"><br> 
Ville: &nbsp      <input type="text" name="ville"><br>
Fonction: &nbsp      <input type="text" name="fonction"><br>
<input type="submit" value="Sauvegarder">

-->
<div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-lg btn-primary">Sauvegarder</button>
    </div>
  </div>


</form>

        </div>

      </div>
    </div>
  
  </body>
</html>












