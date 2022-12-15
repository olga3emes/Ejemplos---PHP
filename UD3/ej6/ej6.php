<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
      $extensions= array("jpeg","jpg","png");
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="Estensión no permitida. Prueba con imágenes jpeg,jpng o png.";
      }
      if($file_size > 2097152) {
         $errors[]='El archivo no puede pesar más de 2MB';
      }
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"../images/".$file_name);
         echo "La imagen se ha guardado correctamente";
      }else{
         print_r($errors);
      }
   }
?>
<html>
   <body>
      <form action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "image" />
         <input type = "submit"/>
      </form>
   </body>
</html>