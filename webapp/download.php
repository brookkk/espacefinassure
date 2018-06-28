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
	  
<div class="container-fluid main-content"><div class="social-wrapper">
  <div id="social-container"></div>
  <div class="row">
    <div class="col-lg-12">
      <div class="btn btn-lg btn-block btn-default" id="load-more">
        <i class="fa fa-spinner fa fa-spin"></i>Chargement des données
      </div>
    </div>
  </div>
  <div id="hidden-items">
    <!-- Share Form -->
    <!-- end Share Form --><!-- Profile Widget -->

    <!-- end Profile Widget --><!-- Text Post -->
    
    <div class="item social-widget twitter">
      <i class="fa fa-file-text-o"></i>
      <div class="social-data">
        <h5>
          Formulaire de déclaration de sinistre
        </h5>
        <a href="downloads/modele-declaration.pdf">Télécharger</a>
      </div>
    </div>
    
    
    <div class="item social-widget instagram">
      <i class="fa fa-list-ol"></i>
      <div class="social-data">
        <h5>
          Liste des prestataires RC Sport
        </h5>
        <a href="downloads/RC-Sport-Prestataires.pdf">Télécharger</a>
      </div>
    </div>
    
    
    <div class="item social-widget pinterest">
      <i class="fa fa-columns"></i>
      <div class="social-data">
        <h5>
          Guide des sinistres RC Sport
        </h5>
		<a href="downloads/RC-Sport-Guide.pdf">Télécharger</a>
      </div>
    </div>
    
  </div>
</div>
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