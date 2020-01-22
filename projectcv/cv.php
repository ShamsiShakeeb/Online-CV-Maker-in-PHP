<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link href="mdb.css" rel="stylesheet" id="bootstrap-css">
<link href="bootstrap.css" rel="stylesheet" id="bootstrap-css"> 
<link href="Hide.css" rel="stylesheet" id="bootstrap-css">
<link href="style.css" rel="stylesheet" id="bootstrap-css"> 


    <title>Cv</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $("#btnPrint").live("click", function () {
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>DIV Contents</title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
    </script>
	
	
	
	<script>
	
	function previewFile(){
       var preview = document.querySelector('img'); //selects the query named img
       var file    = document.querySelector('input[type=file]').files[0]; //sames as here
       var reader  = new FileReader();

       reader.onloadend = function () {
           preview.src = reader.result;
       }

       if (file) {
           reader.readAsDataURL(file); //reads the data as a URL
       } else {
           preview.src = "";
       }
  }

  previewFile();  //calls the function named previewFile()
	
	</script>
	
	
</head>
<body>

<?php

$enEmail="";
$Name = $_POST["firstName"];
$Name1 = $_POST["lastName"];
$Country=$_POST["Country"];
$Address=$_POST["address"];
$phoneNumber=$_POST["PhoneNum"];
$email=$_POST["Email"];
$about=$_POST["abt"];


$carrerInfo=$_POST["cf"];
$professionalStrength=$_POST["pf"];
$techniqualProfeciency=$_POST["tp"];
$personalArchivment=$_POST["pa"];
$xtraCuricularActivities=$_POST["eca"];
$InterestAndHobbies=$_POST["iah"];
$dateOfBirth=$_POST["dob"];
$employeeStatus=$_POST["es"];
 
$relationshipStatus=$_POST["rs"];


/// SSC Information 

$School = $_POST["school"];
$grssc = $_POST["grssc"];
$bord = $_POST["board"];
$sscyear = $_POST["sscyear"];

//hsc info
$Collage = $_POST["college"];
$grhsc = $_POST["grhsc"];
$bord1 = $_POST["board1"];
$hscyear = $_POST["hscyear"];

//varsity
$Varsity = $_POST["varsity"];
$vcgpa = $_POST["vcgpa"];
$bord2 = $_POST["board2"];
$vgyear = $_POST["vgyear"];


$sql1 = "select * from user where email = '$email'";

$conn1= new mysqli("Localhost","root","","cv_database");

$result = $conn1->query($sql1);

$count=0;

while($row = $result->fetch_assoc()){

$count=$count+1;
break;
}
$arr1 = str_split($email);
	
		
		for($i=0;$i<count($arr1);$i++){
			//echo $arr1[$i] . "<br/>";
			$res=ord($arr1[$i])+2;
			$enEmail.=chr($res);
		}

if($count==0){





$conn = new mysqli("Localhost","root","","cv_database");

$sql = "insert into user(firstName,lastName,Country,address,phoneNumber,email,carrerInfo,professionalStrength,techniqualProfeciency,personalArchivment,xtraCuricularActivities,InterestAndHobbies,dateOfBirth,employeeStatus,relationshipStatus,School,grssc,bord,sscyear,collage,grhsc,board1,hscyear,varsity,vcgpa,board2,vgyear,about) 
values('$Name','$Name1','$Country','$Address','$phoneNumber','$email','$carrerInfo','$professionalStrength','$techniqualProfeciency','$personalArchivment','$xtraCuricularActivities',
'$InterestAndHobbies','$dateOfBirth','$employeeStatus','$relationshipStatus','$School','$grssc','$bord','$sscyear','$Collage','$grhsc','$bord1','$hscyear','$Varsity','$vcgpa','$bord2','$vgyear','$about')";

if($conn->connect_error){
	
	echo "Connection Failed";
	
	
	
}
else{
	
	   
		//echo "String = ".$enEmail;
		
	
	if($conn->query($sql)==true){
		
		echo "Submit Done "."<br/>";
		
		header('Location: up.php?check='.$enEmail);
		
	}
	else{
		
		echo "Something Wrong";
	}
	
}
}
else{
	
	
	$conn = new mysqli("Localhost","root","","cv_database");
	
	$sql = "update user set firstName = '$Name', lastName = '$Name1',address= '$Address',phoneNumber = '$phoneNumber',carrerInfo= '$carrerInfo',professionalStrength ='$professionalStrength',
techniqualProfeciency ='$techniqualProfeciency',personalArchivment= '$personalArchivment',xtraCuricularActivities= '$xtraCuricularActivities',
InterestAndHobbies= '$InterestAndHobbies',dateOfBirth= '$dateOfBirth',employeeStatus= '$employeeStatus',relationshipStatus= '$relationshipStatus',about='$about',
School= '$School',grssc= '$grssc',bord= '$bord',sscyear= '$sscyear',collage='$Collage',grhsc= '$grhsc',board1= '$bord1',hscyear= '$hscyear',
varsity='$Varsity',varsity= '$Varsity',vcgpa= '$vcgpa',board2= '$bord2',vgyear= '$vgyear' WHERE email = '$email'";
	
	/*$sql = "delete from user WHERE email = '$email'";*/
	$conn->query($sql);
	
	header('Location: up.php?check='.$enEmail);
}





?>

	
</body>
</html>