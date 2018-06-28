<?php
   if(isset($_FILES['fichier'])){
      $errors= array();
      $file_name = $_FILES['fichier']['name'];
      $file_size = $_FILES['fichier']['size'];
      $file_tmp = $_FILES['fichier']['tmp_name'];
      $file_type = $_FILES['fichier']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['fichier']['name'])));
      
      $expensions= array("jpeg","jpg","png", "xls");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"fichier/".$file_name);
         echo "Success";
      }
     


      $file = fopen("fichier/".$file_name, "r");
      if($file)
      	echo ("file opened <br>");
      $content  = fgets($file);
      	echo($content);










   }
?>
<html>
   <body>
      
      <form action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "fichier" />
         <input type = "submit"/>
		<?php
   if(isset($_FILES['fichier'])){ ?>	
         <ul>
            <li>Sent file: <?php echo $_FILES['fichier']['name'];  ?>
            <li>File size: <?php echo $_FILES['fichier']['size']/1000  . " Ko";  ?>
            <li>File type: <?php echo $_FILES['fichier']['type'] ?>
         </ul>
         <?php } ?>
			
      </form>
      
   </body>
</html>