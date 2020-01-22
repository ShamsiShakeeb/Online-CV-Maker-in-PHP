<?php




$email = $_GET['check'];
 $arr1 = str_split($email);
	    $enEmail="";
		for($i=0;$i<count($arr1);$i++){
			//echo $arr1[$i] . "<br/>";
			$res=ord($arr1[$i])-2;
			$enEmail.=chr($res);
		}

//echo $email;


$sql1 = " select * from user where email = '$enEmail' "    ;

$conn1= new mysqli("Localhost","root","","cv_database");

$result = $conn1->query($sql1);




$FirstName="";
$lastName;
$Country;
$address;
$phoneNumber;
$email;
$carrerInfo;
$professionalStrength;
$techniqualProfeciency;
$personalArchivment;
$xtraCuricularActivities;
$InterestAndHobbies;
$dateOfBirth;
$employeeStatus;
$relationshipStatus;
$School;
$grssc;
$bord;
$sscyear;
$collage;
$grhsc;
$board1;
$hscyear;
$varsity;
$vcgpa;
$board2;
$vgyear;
$about;




while($row = $result->fetch_assoc()){

$FirstName= $row["firstName"];

$lastName= $row["lastName"];

$Country = $row["Country"];

$address =$row["address"];

$phoneNumber =$row["phoneNumber"];

$email =$row["email"];

$carrerInfo =$row["carrerInfo"];

$professionalStrength = $row["professionalStrength"];

$techniqualProfeciency =$row["techniqualProfeciency"];

$personalArchivment =$row["personalArchivment"];

$xtraCuricularActivities = $row["xtraCuricularActivities"];

$InterestAndHobbies = $row["InterestAndHobbies"];

$dateOfBirth=$row["dateOfBirth"];

$employeeStatus =$row["employeeStatus"];

$relationshipStatus =$row["relationshipStatus"];

$School =$row["School"];

$grssc =$row["grssc"];

$bord =$row["bord"];

$sscyear =$row["sscyear"];

$collage =$row["collage"];

$grhsc=$row["grhsc"];

$board1=$row["board1"] ;

$hscyear=$row["hscyear"];

$varsity=$row["varsity"];

$vcgpa =$row["vcgpa"];

$board2=$row["board2"] ;

$vgyear=$row["vgyear"] ;

$about =$row["about"] ;


	
}
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Creative CV</title>
    <meta name="description" content="Creative CV is a HTML resume template for professionals. Built with Bootstrap 4, Now UI Kit and FontAwesome, this modern and responsive design template is perfect to showcase your portfolio, skils and experience."/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
  </head>
  <body id="top">
   
   
    <div class="page-content">
      <div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-1.jpg');"></div>
      <div class="container">
        <div class="content-center">
          <div class="cc-profile-image"><a href="#"><img src="images/<?php echo $enEmail  ?>.PNG" alt="Image"/></a></div>
          <div class="h2 title"><?php echo $FirstName." ".$lastName ?></div>
          
        </div>
      </div>
     
    </div>
  </div>
</div>
<div class="section" id="about">
  <div class="container">
    <div class="card" data-aos="fade-up" data-aos-offset="10">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">About</div>
            
            <p><?php echo $about ?></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">Basic Information</div>
            <div class="row">
              <div class="col-sm-4"><strong class="text-uppercase">Date Of Birth:</strong></div>
              <div class="col-sm-8"><?php echo $dateOfBirth    ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
              <div class="col-sm-8"><?php echo $email ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
              <div class="col-sm-8"><?php echo $phoneNumber ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
              <div class="col-sm-8"><?php echo $address ?></div>
            </div>
			<div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Relationship Status:</strong></div>
              <div class="col-sm-8"><?php echo $relationshipStatus ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Employee Status:</strong></div>
              <div class="col-sm-8"><?php echo $employeeStatus ?></div>
            </div>
			
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<br/> <br/>

<div class="container">
  <h2>Education Qualification</h2>
             
  <table class="table">
    <thead>
      <tr>
        <th>Institution Name</th>
        <th>GPA/CGPA</th>
        <th>Board</th>
		 <th>Passing Year</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $School ?></td>
        <td><?php echo $grssc ?></td>
        <td><?php echo $bord ?></td>
		<td><?php echo $sscyear ?></td>
      </tr>
      <tr>
        <td><?php echo $collage ?></td>
        <td><?php echo $grhsc ?></td>
        <td><?php echo $board1 ?></td>
		<td><?php echo $hscyear ?></td>
      </tr>
      <tr>
        <td><?php echo $varsity ?></td>
        <td><?php echo $vcgpa ?></td>
        <td><?php echo $board2 ?></td>
		<td><?php echo $vgyear ?></td>
      </tr>
	  
	 
	  
    </tbody>
  </table>
</div>







<div class="section" id="experience">
  <div class="container cc-experience">
    <div class="h4 text-center mb-4 title">Career And Qualification </div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-experience-header">
            
            <div class="h5">Career Profile</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5">Career Profile</div>
            <p><?php echo $carrerInfo ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-experience-header">
            
            <div class="h5">Professional Strength</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5">Professional Strength</div>
            <p><?php echo $professionalStrength  ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-experience-header">
            
            <div class="h5">Technical Profiency</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5">Technical Profiency</div>
            <p><?php echo $techniqualProfeciency  ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section">
  <div class="container cc-education">
    <div class="h4 text-center mb-4 title">About MySelf </div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-education-header">
            
            <div class="h5">Personal Archivment</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5">Personal Archivment</div>
            
            <p><?php echo $personalArchivment ?></p>
          </div>
        </div>
      </div>
    </div>
	<div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-education-header">
           
            <div class="h5">Extra Curricular Activities</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5">Extra Curricular Activities</div>
            
            <p><?php echo $xtraCuricularActivities  ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-education-header">
           
            <div class="h5">Interest And Hobbies</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5">Interest And Hobbies</div>
            
            <p><?php echo $InterestAndHobbies  ?></p>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>


    <script src="js/core/jquery.3.2.1.min.js"></script>
    <script src="js/core/popper.min.js"></script>
    <script src="js/core/bootstrap.min.js"></script>
    <script src="js/now-ui-kit.js?v=1.1.0"></script>
    <script src="js/aos.js"></script>
    <script src="scripts/main.js"></script>
  </body>
</html>


