<?php

    <form id="form1">
    <div id="dvContainer">
	
	<table class="table table-striped">
	
	<tr>
	<td>
	
	<div>
	<!--First Name: -->
	
	<p>     <?php  echo $Name; ?> <?php  echo $Name1; ?></p> 
	
	  
    </div>  
	
	<div>
		
		<?php  echo $Country; ?> <br/>
		
		<?php  echo $Address; ?>
	
	</div>
	
	<div>
		<?php echo"$phoneNumber";?>
	</div>
	<div>
		<?php echo"$email";?>
	</div>
	</td>
	<td>
	</td>
	
	
	<td>
	<input type="file" onchange="previewFile()"><br/>
    <img src="" height="200" alt="Image preview..."><br/>
	</td>
	</tr>
	</table>
	<div  >
 
	   
		<p><u><b>Carrer info:</b></u> <?php echo"$carrerInfo";?></p>
		
	</div>
	<div>
	   <p><u><b> Professional Strength:</b></u></p> <?php echo"$professionalStrength";?>
	</div>
	<div>
		   <p><u><b>Techniqual Profeciency:</b><br/></u>  <?php echo"$techniqualProfeciency";?>
	</div>
		<div>
		   <p><b>Educational Summery:<br/></b>   </p><table class="table table-striped">

             <?php echo $School ." " . $grssc . " ". $bord . " ". $sscyear; ?>     
  
	</div>
		   <p><b><u>Personal Archivment: </b></p></u><?php echo "$personalArchivment";?>
    </div>
	<div>
		<p><u><b>Extra Curicular Activities  :</b></u></p> <?php echo "$xtraCuricularActivities ";?>
	</div>
	<div>
		<p><u><b>Interest And Hobbies  :</b> </u></p> <?php echo "$InterestAndHobbies ";?>
	</div>
	<div>
		<p><u><b>Date Of Birth : </p></u></b> <?php echo "$dateOfBirth ";?>
	</div>
	<div>
		<p><b>Employee Status   :</b> <br/> <?php echo"$employeeStatus ";?></p>
	</div>
	 
	<div>
		<p><b>Relationship Status :</b> <br/> <?php echo "$relationshipStatus ";?></p>
	</div>
	 
	 
    <input type="button" value="Print Div Contents" id="btnPrint" />
    </form>
	
	?>