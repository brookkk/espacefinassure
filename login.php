<?php  
session_start();//session starts here  
  
?>  
  
  
  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">  
    <title>Espace client finassure</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  }
  
</style>  
  
<body>  
  
  
<div class="container">  
    <div class="row">  
        <div class="col-md-4 col-md-offset-4"> 
            <div class="login-panel panel panel-default">			
                <div class="panel-heading">  
                    <h3 class="panel-title">Accéder à votre espace</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="login.php">  
                        <fieldset>  
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="Nom d'utilisateur" name="pseudo" type="pseudo" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Mot de passe" name="pass" type="password" value="">  
                            </div>  
  
  
                                <input class="btn btn-lg btn-danger btn-block" type="submit" value="Se connecter" name="login" >  
  
                            <!-- Change this to a button or input when using this as a form -->  
                          <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->  
                        </fieldset>  
                    </form>  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
  
  
</body>  
  
</html>  
  
<?php  
  
include("database/db_conection.php");  
  
if(isset($_POST['login']))  
{  
    $user_pseudo=$_POST['pseudo'];  
    $user_pass=$_POST['pass'];  
  
    $check_user="select * from users WHERE user_pseudo='$user_pseudo'AND user_pass='$user_pass'";  
  
    $run=mysqli_query($dbcon,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        //echo "<script>window.open('welcome.php','_self')</script>";
		echo "<script>window.open('webapp/index.php','_self')</script>";
  
        $_SESSION['pseudo']=$user_pseudo;//here session is used and value of $user_pseudo store in $_SESSION.  
  
    }  
    else  
    {  
      echo "<script>alert('Le login ou le mot de passe est incorrecte !')</script>";  
    }  
}  
?>