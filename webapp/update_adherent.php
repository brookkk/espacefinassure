
<!DOCTYPE html>

<?php  
session_start();  
include './adherentBundle/Classes/Crud_adherent.php';
if(!$_SESSION['pseudo'])  
{  
  
    header("Location: ../login.php");//redirect to login page to secure the welcome page without login access.  
}  




  $no_licence = $_GET['no_licence'];

  $ad = new Crud_adherent();

  $adherent = $ad->getAdherent($no_licence);
  /*echo("<pre>");
  print_r($adherent[0]);
  echo("</pre>");*/

  // identity types select
   $identity_types = array("CIN", "PASSPORT", "CARTE SEJOUR", "PERMIS");
        $identity_types_position = 0;
        
          if("CIN" == $adherent[0]['Identity Type']) $identity_types_position =0;
          else if("PASSPORT" == $adherent[0]['Identity Type']) $identity_types_position =1;
          else if("CARTE SEJOUR" == $adherent[0]['Identity Type']) $identity_types_position =2;
          else  $identity_types_position =3;
          

      // category select

       $categories = array("Profesionnel", "Amateur");
        $category_position = 0;
        
          if("Profesionnel" == $adherent[0]['Identity Type']) $category_position =0;
          else  $category_position =1;




      // Ligues


      $ligues = array('GRAND CASA', 'GHARB', 'TANGER');
      $ligue_position = 0;
          if("GRAND CASA" == $adherent[0]['League']) $ligue_position =0;
          else if("GHARB" == $adherent[0]['League']) $ligue_position =1;
          else  $ligue_position =2;



      $clubs = array('WAC', 'RCA', 'ITIHAD TANGER', 'FUS');
      $club_position = 0;
          if("WAC" == $adherent[0]['Club']) $club_position =0;
          else if("RCA" == $adherent[0]['Club']) $club_position =1;
          else if("ITIHAD TANGER" == $adherent[0]['Club']) $club_position =2;
          else  $club_position =3;



      $villes = array('Casablanca', 'Rabat', 'Tanger', 'Marrakech');
      $ville_position = 0;
          if("Casablanca" == $adherent[0]['City']) $ville_position =0;
          else if("Rabat" == $adherent[0]['City']) $ville_position =1;
          else if("Tanger" == $adherent[0]['City']) $ville_position =2;
          else  $ville_position =3;

      $functions = array('Joueur', 'Entraineur', 'Medecin', 'Arbitre', 'Ramasseur');
      $function_position = 0;
          if("Joueur" == $adherent[0]['Function']) $function_position =0;
          else if("Entraineur" == $adherent[0]['Function']) $function_position =1;
          else if("Medecin" == $adherent[0]['Function']) $function_position =2;
          else if("Arbitre" == $adherent[0]['Function']) $function_position =3;
          else  $function_position =4;
  
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
           Modifier adhérent
          </h1>
            
        </div>

       


          <div  class="col-md-4">  
          </div>
          <div  class="col-md-7">  

            <form method ="post" action="./adherentBundle/Controllers/updateAdherent.php">
              <input type = 'hidden' id = 'id_adherent' name = 'id_adherent' value = "<?php echo($no_licence) ?>">

              <div class="form-group row">
    <label for="no_licence" class="col-sm-2 col-form-label">No de licence</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="no_licence" value="<?php echo $adherent[0]['Licence No']; ?>" required title="Num&eacute;ro de licence" oninvalid="this.setCustomValidity('pri&egrave;re de remplire le num&eacute;ro de licence')" oninput="setCustomValidity('')" />
    </div>
  </div>

               <div class="form-group row">
    <label for="type_d_identite" class="col-sm-2 col-form-label">Type d'identit&eacute;</label>
    <div class="col-sm-4">
      <!--<input type="text" class="form-control" name="type_d_identite" placeholder="Type d'identit&eacute" required title="Type d identi&eacute;" oninvalid="this.setCustomValidity('pri&egrave;re de remplire le Type d identit&eacute;')" oninput="setCustomValidity('')"/>
      -->
      <select class="form-control" name="type_d_identite">
        <?php

          
        for($i=0; $i<4; $i++)
        {
          ?>
          <option value="<?php echo $identity_types[$i] ?>" <?php if($identity_types_position == $i) echo 'selected="selected"' ?> ><?php echo $identity_types[$i] ?></option>
          <?php
        }
        
        ?>
       <!-- <option value="CIN">CIN</option>
        <option value="PASSPORT">PASSPORT</option>
        <option value="CARTE SEJOUR">CARTE SEJOUR</option>
        <option value="PERMIS">PERMIS</option>-->
      </select>

    </div>
  </div>

                 <div class="form-group row">
    <label for="id_identite" class="col-sm-2 col-form-label">ID identité</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="id_identite" value="<?php echo $adherent[0]['Identity ID']; ?>" required title="ID identit&eacute;" oninvalid="this.setCustomValidity('pri&egrave;re de remplire l ID d identti&eacute;')" oninput="setCustomValidity('')"/>
    </div>
  </div>

            <div class="form-group row">
    <label for="nom" class="col-sm-2 col-form-label">Nom</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="nom" value="<?php echo $adherent[0]['Last Name']; ?>" required title="Nom" oninvalid="this.setCustomValidity('pri&egrave;re de remplire le nom')" oninput="setCustomValidity('')"/>
    </div>
  </div>

      <div class="form-group row">
    <label for="prenom" class="col-sm-2 col-form-label">Prénom</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="prenom" value="<?php echo $adherent[0]['First Name']; ?>" required title="Prénom" oninvalid="this.setCustomValidity('pri&egrave;re de remplire le prénom')" oninput="setCustomValidity('')">
    </div>
  </div>

    <div class="form-group row">
    <label for="categorie" class="col-sm-2 col-form-label">Catégorie</label>
    <div class="col-sm-4">
      <!--<input type="text" class="form-control" name="categorie" placeholder="Catégorie" required title="Catégorie" oninvalid="this.setCustomValidity('pri&egrave;re de remplire la Catégorie')" oninput="setCustomValidity('')"> 
      -->

      <select class="form-control" name="categorie">

        <?php

          
        for($i=0; $i<2; $i++)
        {
          ?>
          <option value="<?php echo $categories[$i] ?>" <?php if($category_position == $i) echo 'selected="selected"' ?> ><?php echo $categories[$i] ?></option>
          <?php
        }
        
        ?>


        <!--<option value="Profesionnel">Profesionnel</option>
        <option value="Amateur">Amateur</option>-->
      </select>

    </div>
  </div>

    <div class="form-group row">
    <label for="ligue" class="col-sm-2 col-form-label">Ligue</label>
    <div class="col-sm-4">
      <!--<input type="text" class="form-control" name="ligue" placeholder="Ligue" required title="Ligue" oninvalid="this.setCustomValidity('pri&egrave;re de remplire la ligue')" oninput="setCustomValidity('')">
      -->

      <select class="form-control" name="ligue">

        <?php

          
        for($i=0; $i<3; $i++)
        {
          ?>
          <option value="<?php echo $ligues[$i] ?>" <?php if($ligue_position == $i) echo 'selected="selected"' ?> ><?php echo $ligues[$i] ?></option>
          <?php
        }
        
        ?>

       <!-- <option value="GRAND CASA">GRAND CASA</option>
        <option value="GHARB">GHARB</option>
        <option value="TANGER">TANGER</option>-->
      </select>

    </div>
  </div>

    <div class="form-group row">
    <label for="club" class="col-sm-2 col-form-label">Club</label>
    <div class="col-sm-4">
      <!--<input type="text" class="form-control" name="club" placeholder="Club" required title="Club" oninvalid="this.setCustomValidity('pri&egrave;re de remplire le club')" oninput="setCustomValidity('')">
      -->

      <select class="form-control" name="club">


        <?php

          
        for($i=0; $i<4; $i++)
        {
          ?>
          <option value="<?php echo $clubs[$i] ?>" <?php if($club_position == $i) echo 'selected="selected"' ?> ><?php echo $clubs[$i] ?></option>
          <?php
        }
        
        ?>


        <!--<option value="WAC">WAC</option>
        <option value="RCA">RCA</option>
        <option value="ITIHAD TANGER">ITIHAD TANGER</option>
        <option value="FUS">FUS</option>-->

      </select>

    </div>
  </div>

    <div class="form-group row">
    <label for="ville" class="col-sm-2 col-form-label">Ville</label>
    <div class="col-sm-4">
      <!--<input type="text" class="form-control" name="ville" placeholder="Ville" required title="Ville" oninvalid="this.setCustomValidity('pri&egrave;re de remplire la ville')" oninput="setCustomValidity('')">
    -->

    <select class="form-control" name="ville">

      <?php

          
        for($i=0; $i<4; $i++)
        {
          ?>
          <option value="<?php echo $villes[$i] ?>" <?php if($ville_position == $i) echo 'selected="selected"' ?> ><?php echo $villes[$i] ?></option>
          <?php
        }
        
        ?>

        <!--<option value="Casablanca">Casablanca</option>
        <option value="Rabat">Rabat</option>
        <option value="Tanger">Tanger</option>
        <option value="Marrakech">Marrakech</option>-->
      </select>

  </div>
  </div>

    <div class="form-group row">
    <label for="fonction" class="col-sm-2 col-form-label">Fonction</label>
    <div class="col-sm-4">
      <!--<input type="text" class="form-control" name="fonction" placeholder="Fonction" required  title="fonction" oninvalid="this.setCustomValidity('pri&egrave;re de remplire la fonction')" oninput="setCustomValidity('')">
      -->

      <select class="form-control" name="fonction">

        <?php

          
        for($i=0; $i<5; $i++)
        {
          ?>
          <option value="<?php echo $functions[$i] ?>" <?php if($function_position == $i) echo 'selected="selected"' ?> ><?php echo $functions[$i] ?></option>
          <?php
        }
        
        ?>

        <!--<option value="Joueur">Joueur</option>
        <option value="Entraineur">Entraineur</option>
        <option value="Medecin">Medecin</option>
        <option value="Arbitre">Arbitre</option>
        <option value="Ramasseur">Ramasseur</option>-->
      </select>

    </div>
  </div>


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












