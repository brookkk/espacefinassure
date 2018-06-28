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
            Gestion des adhérents assurés
          </h1>
		  		  
        </div>
        <!-- DataTables Example -->
        <div class="row">
          <div class="col-lg-12">
            <div class="widget-container fluid-height clearfix">
              <div class="heading">
                <i class="fa fa-table"></i>Liste des adhérents assurés
              </div>

              <div class="widget-content padded clearfix">
			  <form>
					  <div class="form-group">
					  <label for="exampleInputFile">Importation d'un fichier de données</label>
					  <div class="row">
						  <div class="col-xs-2">
							<input type="file" id="exampleInputFile">
						  </div>
						  <div class="col-xs-3">
							<button type="submit" class="btn btn-primary btn-xs">Traiter</button>
						  </div>
						</div>
						
						
						
					 </div>

					  

				</form>
                <table class="table table-bordered table-striped" id="dataTable_export">
					<!--
					<div class="input-group mb-3">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="inputGroupFile02">
							<label class="custom-file-label" for="inputGroupFile02">Choose file</label>
						</div>
						<div class="input-group-append">
							<span class="input-group-text" id="">Upload</span>
						</div>
					</div>
					-->
				  <!-- Header -->
				  <thead>
                    <th class="check-header hidden-xs"><label><input id="checkAll" name="checkAll" type="checkbox"><span></span></label></th>
                    <th>N° licence</th>
                    <th>Type d'identité</th>
                    <th class="hidden-xs">ID identité</th>
                    <th class="hidden-xs">Nom</th>
                    <th class="hidden-xs">Prénom</th>
					<th class="hidden-xs">Catégorie</th>
					<th class="hidden-xs">Ligue</th>
					<th class="hidden-xs">Club</th>
					<th class="hidden-xs">Ville</th>
					<th class="hidden-xs">Fonction</th>
                    <th></th>
                  </thead>
				  <!-- Header -->
				  
                  <tbody>
				  
				  <?php
										// on tente la connexion à la base de donnée
										try
										 {
										  $bdd = new PDO('mysql:host=127.0.0.1;dbname=finarea','root','root');
										 }
										  catch (Exception $e)
										 {
										  // En cas d'erreur, on affiche un message et on arrête tout
										  die('Erreur : ' . $e->getMessage());
										 }
										// On récupère tout le contenu de la table associations
										$reponse = $bdd->query('SELECT * FROM adherent');

										// On affiche chaque entrée une à une et colonne par colonne
										while ($donnees = $reponse->fetch())
										{
											?>
				  
                    <tr>
                      <td class="check hidden-xs">
                        <label><input name="optionsRadios1" type="checkbox" value="option1"><span></span></label>
                      </td>
                      <td>
                        <?php echo $donnees['Licence No'];?>
                      </td>
                      <td>
                        <?php echo $donnees['Identity Type'];?>
                      </td>
                      <td class="hidden-xs">
                        <?php echo $donnees['Identity ID'];?>
                      </td>
                      <td class="hidden-xs">
                        <?php echo $donnees['Last Name'];?>
                      </td>
					  <td class="hidden-xs">
                        <?php echo $donnees['First Name'];?>
                      </td>
					  <td class="hidden-xs">
                        <?php echo $donnees['Category'];?>
                      </td>
					  <td class="hidden-xs">
                        <?php echo $donnees['League'];?>
                      </td>
					  <td class="hidden-xs">
                        <?php echo $donnees['Club'];?>
                      </td>
					  <td class="hidden-xs">
                        <?php echo $donnees['City'];?>
                      </td>
                      <td class="hidden-xs">
                        <span class="label label-success"><?php echo $donnees['Function'];?></span>
                      </td>
                      <td class="actions">
                        <div class="action-buttons">
                          <a class="table-actions" href="./adherentBundle/Forms/ajouter_adherent.html"><i class="fa fa-eye"></i></a>
                          <a class="table-actions" href="./adherentBundle/Forms/update_adherent.php?no_licence=<?php echo $donnees['Licence No'];?>"><i class="fa fa-pencil"></i></a>
                          <a class="table-actions" onClick="return confirm('Etes vous sûr de vouloir supprimer l\'adhérent?')" href='./adherentBundle/Controllers/deleteAdherent.php?no_licence=<?php echo $donnees['Licence No'];?>'><i class="fa fa-trash-o"></i></a>
                        </div>
                      </td>
                    </tr>
                    <?php 
										}
										
										$reponse->closeCursor(); // Termine le traitement de la requête
										?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- end DataTables Example -->
      </div>
    </div>
    <div class="style-selector">
      <div class="style-selector-container">
        <h2>
          Layout Style
        </h2>
        <select name="layout"><option value="fluid">Fluid</option><option value="boxed">Boxed</option></select>
        <h2>
          Navigation Style
        </h2>
        <select name="nav"><option value="top">Top</option><option value="left">Left</option></select>
        <h2>
          Color Options
        </h2>
        <ul class="color-options clearfix">
          <li>
            <a class="blue" href="javascript:chooseStyle('none', 30)"></a>
          </li>
          <li>
            <a class="green" href="javascript:chooseStyle('green-theme', 30)"></a>
          </li>
          <li>
            <a class="orange" href="javascript:chooseStyle('orange-theme', 30)"></a>
          </li>
          <li>
            <a class="magenta" href="javascript:chooseStyle('magenta-theme', 30)"></a>
          </li>
          <li>
            <a class="gray" href="javascript:chooseStyle('gray-theme', 30)"></a>
          </li>
        </ul>
        <h2>
          Background Patterns
        </h2>
        <ul class="pattern-options clearfix">
          <li>
            <a class="active" href="#" id="bg-1"></a>
          </li>
          <li>
            <a href="#" id="bg-2"></a>
          </li>
          <li>
            <a href="#" id="bg-3"></a>
          </li>
          <li>
            <a href="#" id="bg-4"></a>
          </li>
          <li>
            <a href="#" id="bg-5"></a>
          </li>
        </ul>
        <div class="style-toggle closed">
          <span aria-hidden="true" class="se7en-gear"></span>
        </div>
      </div>
    </div>
  </body>
</html>