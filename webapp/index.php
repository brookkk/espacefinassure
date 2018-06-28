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
            Accueil
          </h1>
        </div>
        <ul class="timeline animated">
          <li>
            <div class="timeline-time">
              <strong>Espace client</strong>Finassure
            </div>
            <div class="timeline-icon">
              <div class="bg-primary">
                <i class="fa fa-quote-right"></i>
              </div>
            </div>
            <div class="timeline-content">
              <h2>
                Bienvenue sur votre espace client FINASSURE
              </h2>
              <p>
                L'espace client Finassure vous propose des interfaces conviviales et ergonomiques de saisie, et des états d’analyse pour mieux manipuler vos données. Il met à votre disposition des documents et procédures à télécharger pour vous faciliter le processus de déclaration des sinistres. 
              </p>
            </div>
          </li>
		  <!--
          <li>
            <div class="timeline-time">
              <strong>Oct 5</strong>6:14 PM
            </div>
            <div class="timeline-icon">
              <div class="bg-warning">
                <i class="fa fa-quote-right"></i>
              </div>
            </div>
            <div class="timeline-content">
              <blockquote>
                <p>
                  Lorem ipsum velit ullamco anim pariatur proident eu deserunt laborum. Lorem ipsum ad in nostrud adipisicing cupidatat anim officia ad id cupidatat veniam quis elit ullamco.
                </p>
                <small>John Smith</small></blockquote>
            </div>
          </li>-->
          <li>
            <div class="timeline-time">
              <strong>Finassure</strong>Nouvelle identité visuelle
            </div>
            <div class="timeline-icon">
              <div class="bg-info">
                <i class="fa fa-camera"></i>
              </div>
            </div>
            <div class="timeline-content image">
              <h2>
                Finassure dévoile sa nouvelle identité visuelle
              </h2>
              <img src="images/img-coast.jpg" />
              <p>
                Plus de finesse, plus de performance pour vous servir !
              </p>
            </div>
          </li>
		   <li>
            <div class="timeline-time">
              <strong>FRMF</strong>Fédération Royale Marocaine de Football
            </div>
            <div class="timeline-icon">
              <div class="bg-info">
                <i class="fa fa-camera"></i>
              </div>
            </div>
            <div class="timeline-content image">
              <h2>
                Fédération Royale Marocaine de Football
              </h2>
              <img src="images/img-coast2.jpg" />
              <p>
                La Fédération royale marocaine de football (FRMF) est une association regroupant les clubs de football du Maroc et organisant les compétitions nationales et les matchs internationaux de la sélection du Maroc.
				La fédération nationale du Maroc est fondée en 1956, elle a pris la place du LMFA.
				Elle est affiliée à la FIFA depuis 1960 et est membre de la CAF depuis 1966.
              </p>
            </div>
          </li>
          <!--
		  <li>
            <div class="timeline-time">
              <strong>Oct 8</strong>2:01 PM
            </div>
            <div class="timeline-icon">
              <div class="bg-danger">
                <i class="fa fa-pencil"></i>
              </div>
            </div>
            <div class="timeline-content">
              <h2>
                This is a title for this timeline post
              </h2>
              <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
              </p>
              <p>
                Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.
              </p>
              <p>
                Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante.
              </p>
            </div>
          </li>
          <li>
            <div class="timeline-time">
              <strong>Oct 11</strong>10:33 AM
            </div>
            <div class="timeline-icon">
              <div class="bg-success">
                <i class="fa fa-camera"></i>
              </div>
            </div>
            <div class="timeline-content">
              <h2>
                This is a title for this timeline post
              </h2>
              <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
              </p>
            </div>
          </li>
          <li>
            <div class="timeline-time">
              <strong>Oct 12</strong>1:14 PM
            </div>
            <div class="timeline-icon">
              <div class="bg-primary">
                <i class="fa fa-video-camera"></i>
              </div>
            </div>
            <div class="timeline-content video">
              <h2>
                This is a title for this timeline post
              </h2>
              <iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="http://player.vimeo.com/video/16202331?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
              <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
              </p>
            </div>
          </li>
          <li>
            <div class="timeline-time">
              <strong>Oct 18</strong>8:45 AM
            </div>
            <div class="timeline-icon">
              <div class="bg-warning">
                <i class="fa fa-pencil"></i>
              </div>
            </div>
            <div class="timeline-content">
              <h2>
                Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing
              </h2>
              <p>
                Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante.
              </p>
            </div>
          </li>
          <li>
            <div class="timeline-time">
              <strong>Oct 21</strong>9:55 AM
            </div>
            <div class="timeline-icon">
              <div class="bg-success">
                <i class="fa fa-clock-o"></i>
              </div>
            </div>
            <div class="timeline-content">
              <h2>
                This is a title for this timeline post
              </h2>
              <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
              </p>
            </div>
          </li>
          <li>
            <div class="timeline-time">
              <strong>Oct 6</strong>9:00 AM
            </div>
            <div class="timeline-icon">
              <div class="bg-info">
                <i class="fa fa-camera"></i>
              </div>
            </div>
            <div class="timeline-content image">
              <h2>
                This is an image posted on my timeline
              </h2>
              <img src="images/img-coast.jpg" />
              <p>
                Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
              </p>
            </div>
          </li>
          <li>
            <div class="timeline-time">
              <strong>Oct 8</strong>2:01 PM
            </div>
            <div class="timeline-icon">
              <div class="bg-danger">
                <i class="fa fa-pencil"></i>
              </div>
            </div>
            <div class="timeline-content">
              <h2>
                This is a title for this timeline post
              </h2>
              <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
              </p>
              <p>
                Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.
              </p>
              <p>
                Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante.
              </p>
            </div>
          </li>
          <li>
            <div class="timeline-time">
              <strong>Oct 11</strong>10:33 AM
            </div>
            <div class="timeline-icon">
              <div class="bg-success">
                <i class="fa fa-camera"></i>
              </div>
            </div>
            <div class="timeline-content">
              <h2>
                This is a title for this timeline post
              </h2>
              <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
              </p>
            </div>
          </li>
          <li>
            <div class="timeline-time">
              <strong>Oct 12</strong>1:14 PM
            </div>
            <div class="timeline-icon">
              <div class="bg-primary">
                <i class="fa fa-video-camera"></i>
              </div>
            </div>
            <div class="timeline-content video">
              <h2>
                This is a title for this timeline post
              </h2>
              <iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="http://player.vimeo.com/video/16202331?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
              <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
              </p>
            </div>
          </li>
          <li>
            <div class="timeline-time">
              <strong>Oct 18</strong>8:45 AM
            </div>
            <div class="timeline-icon">
              <div class="bg-warning">
                <i class="fa fa-pencil"></i>
              </div>
            </div>
            <div class="timeline-content">
              <h2>
                Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing
              </h2>
              <p>
                Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante.
              </p>
            </div>
          </li>
          <li>
            <div class="timeline-time">
              <strong>Oct 21</strong>9:55 AM
            </div>
            <div class="timeline-icon">
              <div class="bg-success">
                <i class="fa fa-clock-o"></i>
              </div>
            </div>
            <div class="timeline-content">
              <h2>
                This is a title for this timeline post
              </h2>
              <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
              </p>
            </div>
          </li>-->
        </ul>
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