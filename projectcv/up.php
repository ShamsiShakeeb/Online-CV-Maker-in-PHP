<?php 
//mysql_connect("localhost", "user", "password")or die("cannot connect to server"); 
//mysql_select_db("database_name")or die("cannot select DB");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<style>



</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload Image</title>
</head>

<body>



       

         <form action="" method="post" enctype="multipart/form-data">
          
           <input type="file"  name="file_img"  accept="image/*" /> <br/>
         
          <input type="submit"  name="btn_upload" value="Upload Image"  />
			
		  
           
        </form>
		
		
    



<?php

$email = $_GET["check"];

if(isset($_POST['btn_upload']))
{
    $filetmp = $_FILES["file_img"]["tmp_name"];
    $filename = $_FILES["file_img"]["name"];
    $filetype = $_FILES["file_img"]["type"];
	    $arr1 = str_split($email);
	    $enEmail="";
		for($i=0;$i<count($arr1);$i++){
			//echo $arr1[$i] . "<br/>";
			$res=ord($arr1[$i])-2;
			$enEmail.=chr($res);
		} $arr1 = str_split($email);
	    $enEmail="";
		for($i=0;$i<count($arr1);$i++){
			//echo $arr1[$i] . "<br/>";
			$res=ord($arr1[$i])-2;
			$enEmail.=chr($res);
		}
	
	
    $filepath = "images/".$enEmail.".PNG";
    
    move_uploaded_file($filetmp,$filepath);
    header('Location: CvStore.php?check='.$email);
   // $sql = "INSERT INTO upload_img (img_name,img_path,img_type) VALUES ('$filename','$filepath','$filetype')";
    //$result = mysql_query($sql);
}
?>

</body>
</html>
