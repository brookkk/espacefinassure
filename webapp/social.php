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
        <i class="fa fa-spinner fa fa-spin"></i>Loading content
      </div>
    </div>
  </div>
  <div id="hidden-items">
    <!-- Share Form -->
    <div class="item widget-container share-widget fluid-height clearfix">
      <div class="widget-content padded">
        <textarea class="form-control" placeholder="What's new..." rows="4"></textarea>
      </div>
      <div class="clearfix">
        <div class="col-xs-3 share-options active">
          <i class="fa fa-pencil"></i>
          <p>
            Text
          </p>
        </div>
        <div class="col-xs-3 share-options">
          <i class="fa fa-camera"></i>
          <p>
            Photo
          </p>
        </div>
        <div class="col-xs-3 share-options">
          <i class="fa fa-link"></i>
          <p>
            Link
          </p>
        </div>
        <div class="col-xs-3 share-options">
          <i class="fa fa-youtube-play"></i>
          <p>
            Video
          </p>
        </div>
      </div>
    </div>
    <!-- end Share Form --><!-- Profile Widget -->
    <div class="item widget-container fluid-height profile-widget">
      <div class="widget-content padded">
        <div class="profile-info clearfix">
          <img width="70" height="70" class="social-avatar pull-left" src="images/avatar-male.jpg" />
          <div class="profile-details">
            <a class="user-name" href="">John Smith</a>
            <p>
              Sharp&Nimble Designer
            </p>
            <em><i class="fa fa-map-marker"></i>Washington, D.C.</em>
          </div>
        </div>
        <div class="profile-stats">
          <div class="col-xs-4">
            <a href="#">
              <h2>
                245
              </h2>
            </a>
            <p>
              Posts
            </p>
          </div>
          <div class="col-xs-4">
            <a href="#">
              <h2>
                150
              </h2>
            </a>
            <p>
              Friends
            </p>
          </div>
          <div class="col-xs-4">
            <a href="#">
              <h2>
                12
              </h2>
            </a>
            <p>
              Videos
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- end Profile Widget --><!-- Text Post -->
    <div class="item widget-container fluid-height social-entry">
      <div class="widget-content padded">
        <div class="profile-info clearfix">
          <img width="50" height="50" class="social-avatar pull-left" src="images/avatar-female2.png" />
          <div class="profile-details">
            <a class="user-name" href="#">Stan Humanbot</a>
            <p>
              <em>2 days ago</em>
            </p>
          </div>
        </div>
        <p class="content">
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
        </p>
        <div class="btn btn-sm btn-default-outline">
          <i class="fa fa-thumbs-o-up"></i>
        </div>
        <div class="btn btn-sm btn-default-outline">
          <i class="fa fa-mail-forward"></i>
        </div>
      </div>
      <div class="comments padded">
        <div class="comment">
          <img width="40" height="40" class="social-avatar pull-left" src="images/avatar-female.png" />
          <div class="profile-details clearfix">
            <a class="user-name" href="#">Fishy Robertson</a>
            <p>
              <em>1 day ago</em>
            </p>
          </div>
          <p class="content">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
          </p>
        </div>
        <div class="comment">
          <img width="40" height="40" class="social-avatar pull-left" src="images/avatar-male.jpg" />
          <div class="profile-details clearfix">
            <a class="user-name" href="#">John Smith</a>
            <p>
              <em>16 minutes ago</em>
            </p>
          </div>
          <p class="content">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
          </p>
        </div>
        <form role="form">
          <div class="form-group">
            <input class="form-control" id="exampleInputEmail1" placeholder="Add a comment..." type="email">
          </div>
        </form>
      </div>
    </div>
    <!-- end Text Post -->
    <div class="item social-widget twitter">
      <i class="fa fa-twitter"></i>
      <div class="social-data">
        <h1>
          16k
        </h1>
        Followers
      </div>
    </div>
    <!-- Media Post -->
    <div class="item widget-container clearfix social-entry">
      <div class="widget-content">
        <div class="profile-info clearfix padded">
          <img width="50" height="50" class="social-avatar pull-left" src="images/avatar-male2.png" />
          <div class="profile-details">
            <a class="user-name" href="#">Sad Franklin</a>
            <p>
              <em>12 days ago</em>
            </p>
          </div>
        </div>
        <img width="350" height="262" class="social-content-media" src="images/social-image.jpg" />
        <div class="padded">
          <p class="content">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Donec odio. Quisque volutpat mattis eros.
          </p>
          <div class="btn btn-sm btn-default-outline">
            <i class="fa fa-thumbs-o-up"></i>
          </div>
          <div class="btn btn-sm btn-default-outline">
            <i class="fa fa-mail-forward"></i>
          </div>
        </div>
      </div>
      <div class="comments padded">
        <form role="form">
          <div class="form-group">
            <input class="form-control" id="exampleInputEmail1" placeholder="Add a comment..." type="email">
          </div>
        </form>
      </div>
    </div>
    <!-- end Media Post --><!-- Text Post -->
    <div class="item widget-container fluid-height social-entry">
      <div class="widget-content padded">
        <div class="profile-info clearfix">
          <img width="50" height="50" class="social-avatar pull-left" src="images/avatar-female2.png" />
          <div class="profile-details">
            <a class="user-name" href="#">Stan Humanbot</a>
            <p>
              <em>2 days ago</em>
            </p>
          </div>
        </div>
        <p class="content">
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra.
        </p>
        <div class="btn btn-sm btn-default-outline">
          <i class="fa fa-thumbs-o-up"></i>
        </div>
        <div class="btn btn-sm btn-default-outline">
          <i class="fa fa-mail-forward"></i>
        </div>
      </div>
      <div class="comments padded">
        <div class="comment">
          <img width="40" height="40" class="social-avatar pull-left" src="images/avatar-male.jpg" />
          <div class="profile-details clearfix">
            <a class="user-name" href="#">John Smith</a>
            <p>
              <em>16 minutes ago</em>
            </p>
          </div>
          <p class="content">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
          </p>
        </div>
        <form role="form">
          <div class="form-group">
            <input class="form-control" id="exampleInputEmail1" placeholder="Add a comment..." type="email">
          </div>
        </form>
      </div>
    </div>
    <!-- end Text Post -->
    <div class="item social-widget facebook">
      <i class="fa fa-facebook-sign"></i>
      <div class="social-data">
        <h1>
          120
        </h1>
        Likes
      </div>
    </div>
    <!-- Media Post -->
    <div class="item widget-container clearfix social-entry">
      <div class="widget-content">
        <div class="profile-info clearfix padded">
          <img width="50" height="50" class="social-avatar pull-left" src="images/avatar-male2.png" />
          <div class="profile-details">
            <a class="user-name" href="#">Sad Franklin</a>
            <p>
              <em>12 days ago</em>
            </p>
          </div>
        </div>
        <img width="350" height="262" class="social-content-media" src="http://dribbble.s3.amazonaws.com/users/13774/screenshots/621770/_134.jpg" />
        <div class="padded">
          <div class="btn btn-sm btn-default-outline">
            <i class="fa fa-thumbs-o-up"></i>
          </div>
          <div class="btn btn-sm btn-default-outline">
            <i class="fa fa-mail-forward"></i>
          </div>
        </div>
      </div>
      <div class="comments padded">
        <div class="comment">
          <img width="40" height="40" class="social-avatar pull-left" src="images/avatar-male.jpg" />
          <div class="profile-details clearfix">
            <a class="user-name" href="#">John Smith</a>
            <p>
              <em>16 minutes ago</em>
            </p>
          </div>
          <p class="content">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
          </p>
        </div>
        <form role="form">
          <div class="form-group">
            <input class="form-control" id="exampleInputEmail1" placeholder="Add a comment..." type="email">
          </div>
        </form>
      </div>
    </div>
    <!-- end Media Post --><!-- Text Post -->
    <div class="item widget-container fluid-height social-entry">
      <div class="widget-content padded">
        <div class="profile-info clearfix">
          <img width="50" height="50" class="social-avatar pull-left" src="images/avatar-female2.png" />
          <div class="profile-details">
            <a class="user-name" href="#">Stan Humanbot</a>
            <p>
              <em>2 days ago</em>
            </p>
          </div>
        </div>
        <p class="content">
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi.
        </p>
        <div class="btn btn-sm btn-default-outline">
          <i class="fa fa-thumbs-o-up"></i>
        </div>
        <div class="btn btn-sm btn-default-outline">
          <i class="fa fa-mail-forward"></i>
        </div>
      </div>
      <div class="comments padded">
        <form role="form">
          <div class="form-group">
            <input class="form-control" id="exampleInputEmail1" placeholder="Add a comment..." type="email">
          </div>
        </form>
      </div>
    </div>
    <!-- end Text Post -->
    <div class="item social-widget instagram">
      <i class="fa fa-instagram"></i>
      <div class="social-data">
        <h1>
          120k
        </h1>
        Followers
      </div>
    </div>
    <!-- Text Post -->
    <div class="item widget-container fluid-height social-entry">
      <div class="widget-content padded">
        <div class="profile-info clearfix">
          <img width="50" height="50" class="social-avatar pull-left" src="images/avatar-female2.png" />
          <div class="profile-details">
            <a class="user-name" href="#">Stan Humanbot</a>
            <p>
              <em>2 days ago</em>
            </p>
          </div>
        </div>
        <p class="content">
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
        </p>
        <div class="btn btn-sm btn-default-outline">
          <i class="fa fa-thumbs-o-up"></i>
        </div>
        <div class="btn btn-sm btn-default-outline">
          <i class="fa fa-mail-forward"></i>
        </div>
      </div>
      <div class="comments padded">
        <div class="comment">
          <img width="40" height="40" class="social-avatar pull-left" src="images/avatar-female.png" />
          <div class="profile-details clearfix">
            <a class="user-name" href="#">Fishy Robertson</a>
            <p>
              <em>1 day ago</em>
            </p>
          </div>
          <p class="content">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
          </p>
        </div>
        <div class="comment">
          <img width="40" height="40" class="social-avatar pull-left" src="images/avatar-male.jpg" />
          <div class="profile-details clearfix">
            <a class="user-name" href="#">John Smith</a>
            <p>
              <em>16 minutes ago</em>
            </p>
          </div>
          <p class="content">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
          </p>
        </div>
        <form role="form">
          <div class="form-group">
            <input class="form-control" id="exampleInputEmail1" placeholder="Add a comment..." type="email">
          </div>
        </form>
      </div>
    </div>
    <!-- end Text Post --><!-- Media Post -->
    <div class="item widget-container clearfix social-entry">
      <div class="widget-content">
        <div class="profile-info clearfix padded">
          <img width="50" height="50" class="social-avatar pull-left" src="images/avatar-male2.png" />
          <div class="profile-details">
            <a class="user-name" href="#">Sad Franklin</a>
            <p>
              <em>12 days ago</em>
            </p>
          </div>
        </div>
        <img width="350" height="262" class="social-content-media" src="http://dribbble.s3.amazonaws.com/users/13774/screenshots/217337/manofscience.jpg" />
        <div class="padded">
          <p class="content">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Donec odio. Quisque volutpat mattis eros.
          </p>
          <div class="btn btn-sm btn-default-outline">
            <i class="fa fa-thumbs-o-up"></i>
          </div>
          <div class="btn btn-sm btn-default-outline">
            <i class="fa fa-mail-forward"></i>
          </div>
        </div>
      </div>
      <div class="comments padded">
        <form role="form">
          <div class="form-group">
            <input class="form-control" id="exampleInputEmail1" placeholder="Add a comment..." type="email">
          </div>
        </form>
      </div>
    </div>
    <!-- end Media Post -->
    <div class="item social-widget pinterest">
      <i class="fa fa-pinterest"></i>
      <div class="social-data">
        <h1>
          230
        </h1>
        Repins
      </div>
    </div>
    <!-- Text Post -->
    <div class="item widget-container fluid-height social-entry">
      <div class="widget-content padded">
        <div class="profile-info clearfix">
          <img width="50" height="50" class="social-avatar pull-left" src="images/avatar-female2.png" />
          <div class="profile-details">
            <a class="user-name" href="#">Stan Humanbot</a>
            <p>
              <em>2 days ago</em>
            </p>
          </div>
        </div>
        <p class="content">
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra.
        </p>
        <div class="btn btn-sm btn-default-outline">
          <i class="fa fa-thumbs-o-up"></i>
        </div>
        <div class="btn btn-sm btn-default-outline">
          <i class="fa fa-mail-forward"></i>
        </div>
      </div>
      <div class="comments padded">
        <div class="comment">
          <img width="40" height="40" class="social-avatar pull-left" src="images/avatar-male.jpg" />
          <div class="profile-details clearfix">
            <a class="user-name" href="#">John Smith</a>
            <p>
              <em>16 minutes ago</em>
            </p>
          </div>
          <p class="content">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
          </p>
        </div>
        <form role="form">
          <div class="form-group">
            <input class="form-control" id="exampleInputEmail1" placeholder="Add a comment..." type="email">
          </div>
        </form>
      </div>
    </div>
    <!-- end Text Post --><!-- Media Post -->
    <div class="item widget-container clearfix social-entry">
      <div class="widget-content">
        <div class="profile-info clearfix padded">
          <img width="50" height="50" class="social-avatar pull-left" src="images/avatar-male2.png" />
          <div class="profile-details">
            <a class="user-name" href="#">Sad Franklin</a>
            <p>
              <em>12 days ago</em>
            </p>
          </div>
        </div>
        <img width="350" height="262" class="social-content-media" src="http://dribbble.s3.amazonaws.com/users/13774/screenshots/1162435/turntable_1x.jpg" />
        <div class="padded">
          <div class="btn btn-sm btn-default-outline">
            <i class="fa fa-thumbs-o-up"></i>
          </div>
          <div class="btn btn-sm btn-default-outline">
            <i class="fa fa-mail-forward"></i>
          </div>
        </div>
      </div>
      <div class="comments padded">
        <div class="comment">
          <img width="40" height="40" class="social-avatar pull-left" src="images/avatar-male.jpg" />
          <div class="profile-details clearfix">
            <a class="user-name" href="#">John Smith</a>
            <p>
              <em>16 minutes ago</em>
            </p>
          </div>
          <p class="content">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
          </p>
        </div>
        <form role="form">
          <div class="form-group">
            <input class="form-control" id="exampleInputEmail1" placeholder="Add a comment..." type="email">
          </div>
        </form>
      </div>
    </div>
    <!-- end Media Post -->
    <div class="item social-widget dribbble">
      <i class="fa fa-dribbble"></i>
      <div class="social-data">
        <h1>
          185
        </h1>
        Rebounds
      </div>
    </div>
    <!-- Text Post -->
    <div class="item widget-container fluid-height social-entry">
      <div class="widget-content padded">
        <div class="profile-info clearfix">
          <img width="50" height="50" class="social-avatar pull-left" src="images/avatar-female2.png" />
          <div class="profile-details">
            <a class="user-name" href="#">Stan Humanbot</a>
            <p>
              <em>2 days ago</em>
            </p>
          </div>
        </div>
        <p class="content">
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi.
        </p>
        <div class="btn btn-sm btn-default-outline">
          <i class="fa fa-thumbs-o-up"></i>
        </div>
        <div class="btn btn-sm btn-default-outline">
          <i class="fa fa-mail-forward"></i>
        </div>
      </div>
      <div class="comments padded">
        <form role="form">
          <div class="form-group">
            <input class="form-control" id="exampleInputEmail1" placeholder="Add a comment..." type="email">
          </div>
        </form>
      </div>
    </div>
    <!-- end Text Post --><!-- Media Post -->
    <div class="item widget-container fluid-height clearfix social-entry">
      <div class="widget-content">
        <div class="profile-info clearfix padded">
          <img width="50" height="50" class="social-avatar pull-left" src="images/avatar-female2.png" />
          <div class="profile-details">
            <a class="user-name" href="#">Stan Humanbot</a>
            <p>
              <em>2 days ago</em>
            </p>
          </div>
        </div>
        <iframe allowfullscreen="" class="social-content-media" frameborder="0" height="200" mozallowfullscreen="" src="http://player.vimeo.com/video/73135695?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" webkitallowfullscreen="" width="100%"></iframe>
        <div class="padded">
          <p class="content">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Donec odio. Quisque volutpat mattis eros.
          </p>
          <div class="btn btn-sm btn-default-outline">
            <i class="fa fa-thumbs-o-up"></i>
          </div>
          <div class="btn btn-sm btn-default-outline">
            <i class="fa fa-mail-forward"></i>
          </div>
        </div>
      </div>
      <div class="comments padded">
        <form role="form">
          <div class="form-group">
            <input class="form-control" id="exampleInputEmail1" placeholder="Add a comment..." type="email">
          </div>
        </form>
      </div>
    </div>
    <!-- end Media Post -->
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