<html>

<head>

<link href="mdb.css" rel="stylesheet" id="bootstrap-css">
<link href="bootstrap.css" rel="stylesheet" id="bootstrap-css"> 
<link href="Hide.css" rel="stylesheet" id="bootstrap-css">
<link href="style.css" rel="stylesheet" id="bootstrap-css"> 


<style>

#my{
	
	visibility:hidden;
	
}


</style>
 


<script>



function showQuality(){
	
	var a = document.getElementById("name1").value;
	var b = document.getElementById("con").value;
	var c = document.getElementById("add").value;
	var d = document.getElementById("ph").value;
	var e = document.getElementById("em").value;
	
	if(a=="" || b!='Bangladesh' || c=="" || d=="" || e==""){
		document.getElementById("Quality").style.visibility="hidden";
		document.getElementById("my").style.visibility="hidden";
		 document.getElementById("sch").value="";
	 document.getElementById("schg").value="";
	 document.getElementById("brd").value="";
 document.getElementById("yssc").value="";
		
		
	}
	else{
	document.getElementById("Quality").style.visibility="visible";
	
	}
	
	if( b!='Bangladesh'){
		document.getElementById("msg").innerHTML="This Site is Only Workable for Bangladesh Citizen";
	}
	else{
		document.getElementById("msg").innerHTML="";
	}
	
}
function Grade(){
	
	
	var x = document.getElementById("sch").value;
	var y = document.getElementById("schg").value;
	var z = document.getElementById("brd").value;
	var r = document.getElementById("yssc").value;
	
	
	if(x == "" || y=="" || z =="" || r ==""){
		
		
		document.getElementById("my").style.visibility="hidden";
		document.getElementById("msg1").innerHTML="You At Least Needs to Qualify At SSC";
		
		
		
		
	}
	else{
		
		
		document.getElementById("my").style.visibility="visible";
		document.getElementById("msg1").innerHTML="";
		
		
		
	}
	
	
}
      


</script> 




</head>



<div class="container">
<body class="jumbotron">

<div class="container">
 <div class="jumbotron">
 
 <h1> Online Cv Maker </h1>
 
 </div>
 

</div>

<form action="cv.php" method="POST">

<div class="container" id="BasicInformation">
<div class="jumbotron">
<h1> Basic Information </h1>
<div class="md-form">

<i class="fa fa-user prefix grey-text"> </i>
<input type="text" id="name1"  class="form-control" placeholder="Enter Your First Name" name="firstName"  onkeyup="showQuality();" required>
</div> <br/>                                              

<div class="md-form">
<i class="fa fa-user prefix grey-text"> </i>
  
<input type="text"  class="form-control" placeholder="Enter Your Last Name"  name="lastName" onkeyup="showQuality();">
</div> <br/>

<div class="md-form">
<i class="fa fa-user prefix grey-text"> </i>  
<select Name="Country" id="con" class="form-control"  onchange="showQuality();">


<option value="dd"> Select Country </option>
<option value="Bangladesh"> Bangladesh </option>
<option value="india"> India </option>
<option value="Pakistan"> Pakistan </option>
<option value="Nepal"> Nepal </option>

<select>
<p id="msg">   </p>
</div> <br/>

<div class="md-form">
<i class="fa fa-user prefix grey-text"> </i>  
<input type="text" id="add" class="form-control"  placeholder="Enter Your Address" name="address" onkeyup="showQuality();">
</div> <br/>

<div class="md-form">
<i class="fa fa-user prefix grey-text"></i>  
<input type="text" id="ph"  class="form-control" placeholder="phonenumber" name="PhoneNum" onkeyup="showQuality();" >
</div> <br/>

<div class="md-form">
<i class="fa fa-user prefix grey-text"></i> 
<input type="email" id="em" class="form-control" placeholder="email" name="Email" onkeyup="showQuality();">
</div>
<br/>
</div>
</div>

<div class="container" id="Quality">
<div class="jumbotron">
<h1> Carrer And Qualification </h1>

<div class="md-form">

<i class="fa fa-user prefix grey-text"> </i> 
<textarea class="form-control"  id="cr0" rows="3"  placeholder="Carrer Profile" name="cf"></textarea>
</div> <br/>

<div class="md-form" >
<i class="fa fa-user prefix grey-text"> </i>  
<textarea class="form-control" id="ps" rows="3"  placeholder="Professional Strength" name="pf" ></textarea>
</div> <br/>

<div class="md-form" >
<i class="fa fa-user prefix grey-text"> </i>  
<textarea class="form-control" id="tq" rows="3"  placeholder="Techniqual Profeciency" name="tp" ></textarea>
</div> <br/>

<label > Educational Summery:  </label> 
<div class="md-form" >
 

<table class="table table-striped">

<thead>
      <tr>
        <th>Instiution</th>
        <th>gpa/cgpa</th>
		<th>Board</th>
        <th>Passing year</th>
      </tr>
 </thead>
  <tbody>
      <tr>
        <td><input id="sch" type="text" name="school" placeholder="School" onkeyup="Grade();"></td> 
        <td><input id="schg" type="number" step="0.01" name="grssc" onkeyup="Grade();"></td>
		<td><input id="brd" type="text" name="board" onkeyup="Grade();"></td>
		<td> <input id="yssc" type="date" name="sscyear" onchange="Grade();"></td>
	 </tr>
	  <tr>
        <td> <input type="text" placeholder="College" name="college"></td> 
        <td> <input type="number" step="0.01" name="grhsc"></td>
		<td><input type="text" name="board1"></td>
		<td> <input type="date" name="hscyear"></td>
	 </tr>
	 
	  <tr>
        <td><input type="text"placeholder="University" name="varsity"></td> 
        <td> <input type="number" step="0.01" name="vcgpa"> </td>
		<td><input type="text" name="board2"></td>
		<td> <input type="date" name="vgyear"></td>
	 </tr>
	  
	</tbody>

<td>

<tr>
<p id="msg1">    </p>

</div>
</div>

<!--<td>
School Name:  <input type="text" name="school"> <br/>
</td>
<td>
Grade in SSC: <input type="number" name="grssc">  <br/>
</td>
<td>
Passing Year: <input type="number" name="sscyear"> <br/>
</td>
</tr> 
<tr> 
<td>
Collage Name: <input type="text" name="collage"> <br/>
</td>
<td>
Grade in HSC: <input type="number" name="grhsc"> <br/>
</td>
<td>
Passing Year: <input type="number" name="hscyear"> <br/>

</td>
</tr> <br/>
<td>
Varsity Name: <input type="text" name="varsity"> <br/>
</td>
<td>
Avarage Cgpa: <input type="number" name="vcgpa"> <br/>
</td>
<td>
Graduation Year: <input type="number" name="vgyear"> <br/>
</td>



</td>-->



</tr>

</table>

</div> <br/>


<div class="container" id="my">
<div class="jumbotron" >

<h1> About YourSelf </h1>

<div class="md-form">

<i class="fa fa-user prefix grey-text"> </i> 
<textarea class="form-control"  id="ab" rows="3"  placeholder="About YourSelf" name="abt"></textarea>
</div> <br/>

<!--<div class="from-group" id="personalArchivment">
<label> Professional Archivment:  </label>  -->
<div class="md-form" >
<i class="fa fa-user prefix grey-text"> </i> 
<textarea class="form-control" id="pA" rows="3" id="comment" placeholder="Personal Archivment" name="pa" onkeyup="showEx();"></textarea>
</div> <br/>

<!--<div class="from-group" id="extraCuricularActivities">
<label> Extra Cariculler Activities:  </label>-->
<div class="md-form" >
<i class="fa fa-user prefix grey-text"> </i>   
<textarea class="form-control"  id="exa" rows="3" id="comment" placeholder="Extra Curicular Activities" name="eca" onkeyup="showIah();"></textarea>
</div> <br/>

<div class="md-form" >
<i class="fa fa-user prefix grey-text"> </i>  
<textarea class="form-control" id="iaH" rows="3"  placeholder="Interest And Hobbies" name="iah" onkeyup="showDobAndRl();"></textarea>
</div> <br/>


<div >

<table class="table table-bordered">
  	 

<tr>
<td>Date Of Birth:<br/><input type="date" name="dob"></td> <br/>
<td>Employee Status
<select name="es" class="form-control">

<option value="Part Time">   Part time </option> 
<option value="Full Time">   Full time </option> 


</select><!--<input type="text" name="es"></td> <br/>-->

</tr>


</table>

</div> <br/>



<div class="md-form">

<!--<label> Relational Status </label>-->
<i class="fa fa-user prefix grey-text"> </i>

<select name="rs" class="form-control" placeholder="Relationship Status">

<option value="Single">   Single </option> 
<option value="Married">   Married </option> 


</select> 

</div>
</div>
</div>

<br/>
<input type="submit">

</form>



</body>
</div>

</html>