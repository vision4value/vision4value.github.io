<?php

session_start();
if(!$_SESSION['Email'])
	header("Location: login.php");
   if(isset($_FILES['image'])){
      $errors= array();
	  //var_dump($_FILES['image']);
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("pdf");
	  $errors = '';
      
      if(in_array($file_ext,$expensions)=== false){
         $errors ="extension not allowed, please choose a pdf file.";
      }
      
      if($file_size > 2097152){
         $errors .=' File size must be excately 2 MB';
      }
	  $dir = getcwd()."/images";
	  if(!file_exists($dir))
		mkdir($dir);
	  //var_dump($dir);
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,$dir."/".$file_name);
         header("Location: v4vtermsheet.php");
      }else{
         echo($errors);
      }
   }
?>
<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>
      
   </body>
</html>