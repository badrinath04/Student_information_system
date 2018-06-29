<?php
session_start();
 if(!isset($_SESSION['regno'])) {
      header("Location: login.html");  
 }
?>

<?php
// if(!isset($_SESSION['regno'])) : 
//       header("Location: login.html");  
				 
					$conn=mysqli_connect("localhost","root","","student_information_system");
					if($conn->connect_error)
					{
						die("Connection failed:".$conn->connect_error);
					}
					// session_start();
					$regno=$_SESSION['regno'] ;
					//$password=$_SESSION['password'] ;
					//$sql="SELECT * FROM activeusers WHERE regno='$regno' AND password='$password'";
					$sql="SELECT * FROM activeusers WHERE regno='$regno' ";


					// $sql="SELECT * from users where id=1";
					$result=$conn->query($sql);

					if($result->num_rows >0)
					{
						while($row=$result->fetch_assoc())
						{
							$v=$row['id'];
							// echo"<tr><td>".$row["id"],"</td><td>".$row["name"],"</td><td>".$row["email"]."</td><td>".$row["gender"],"</td><td>".$row["contactno"],"</td>";
							$var1=$row["name"];
							$var2=$row["dob"];
							$var3=$row["gender"];
							$var4=$row["regno"];
							$var5=$row["rollno"];
							$var6=$row["degree"];
							$var7=$row["branch"];
							$var8=$row["email"];
							$var9=$row["contactno"];
							$varpass=$row["password"];
							
						}
					}









	$sql1="SELECT * FROM final WHERE regno='$regno' ";


					// $sql="SELECT * from users where id=1";
					$result1=$conn->query($sql1);

					if($result1->num_rows >0)
					{
						while($row=$result1->fetch_assoc())
						{
						$fathername= $row['fathername'];
$mothername=$row['mothername'];
$nationality=$row['nationality'];
$mothertongue=$row['mothertongue'];
$presentaddress=$row['presentaddress'];
$permanentaddress=$row['permanentaddress'];
$hobbies=$row['hobbies'];
$tenthboardname=$row['tenthboardname'];
$tenthschoolname=$row['tenthschoolname'];
$tenthpercentage=$row['tenthpercentage'];
$tenthyr_of_passing=$row['tenthyr_of_passing'];
$twelvethboardname=$row['twelvethboardname'];
$twelvethinstitutename=$row['twelvethinstitutename'];
$twelvethpercentage=$row['twelvethpercentage'];
$twelvethyr_of_passing=$row['twelvethyr_of_passing'];
$cgpa=$row['cgpa'];
$facebook=$row['fcebook'];
$twitter=$row['twitter'];
$github=$row['github'];
$linkedin=$row['linkedin'];
$languages=$row['languages'];
$softskills=$row['softskills'];
$technicalskills=$row['technicalskills'];

							
						}
					}
							?>
							


							

<!DOCTYPE html>
<html>
<head>
	<title>Student information system</title>
	<link type="text/css" href="style.css" rel="stylesheet">
	<script type="text/javascript" src="script.js"></script>
	<script type="text/javascript" src="script1.js"></script>
</head>
<body style="background-color: #d0cdcd59;">
	<div class="main">
		<div class="header">
		<h1>Student information system</h1>
		</div>
		<div class="topbut">
			<a href="login.html"><button class="logbut" onclick="<?php unset($_SESSION['regno']);unset($_SESSION['password']);session_destroy(); ?>">Logout</button></a>
		</div>
		<div class="insidebar" id="myDIV">
			<ul>
				<li class="btn active"><a href="#" onclick="next123()">Home</a></li>
				<li class="btn"><a href="#" onclick="next21()">Edit Details</a></li>
				<li class="btn"><a href="#" onclick="next3()">Complete your profile</a></li>
				
			</ul>
		</div>


		<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
		<script type="text/javascript">
				
				function settings(){
					document.getElementById('imagecontent').style.display="none";
					document.getElementById('imageupload').style.display="none";
					document.getElementById('completetab1').style.display="none";
					 document.getElementById('completetab2').style.display="none";
					 document.getElementById('completetab3').style.display="none";
					document.getElementById('edittab').style.display="none";
					 document.getElementById('completetab4').style.display="none";
					document.getElementById('hometab').style.display="none";
					document.getElementById('updatepassword').style.display='block';
				}

				function next123() {
					document.getElementById('imageupload').style.display="none";
					document.getElementById('updatepassword').style.display='none';
					document.getElementById('completetab1').style.display="none";
					 document.getElementById('completetab2').style.display="none";
					 document.getElementById('completetab3').style.display="none";
					document.getElementById('edittab').style.display="none";
					 document.getElementById('completetab4').style.display="none";
					document.getElementById('hometab').style.display="block";
					document.getElementById('imagecontent').style.display="block";
				}
				function next21(){
					document.getElementById('imagecontent').style.display="none";
					document.getElementById('updatepassword').style.display='none';
						 document.getElementById('completetab1').style.display="none";
						 document.getElementById('completetab2').style.display="none";
						 document.getElementById('completetab3').style.display="none";
                         document.getElementById('hometab').style.display="none";
                          document.getElementById('completetab4').style.display="none";
						 document.getElementById('edittab').style.display="block";
                        document.getElementById('imageupload').style.display="block";
				}

				function next3(){
					document.getElementById('imagecontent').style.display="none";
					document.getElementById('imageupload').style.display="none";
					document.getElementById('updatepassword').style.display='none';
					 document.getElementById('hometab').style.display="none";
					 document.getElementById('edittab').style.display="none";
					 document.getElementById('completetab3').style.display="none";
					 document.getElementById('completetab2').style.display="none";
					  document.getElementById('completetab4').style.display="none";
					 document.getElementById('completetab1').style.display="block";

				}

				function next2(n){
					document.getElementById('imagecontent').style.display="none";
					document.getElementById('imageupload').style.display="none";
					if (n==1) {
						document.getElementById('updatepassword').style.display='none';
					document.getElementById('hometab').style.display="none";
					document.getElementById('completetab3').style.display="none";
					 document.getElementById('edittab').style.display="none";
					 document.getElementById('completetab1').style.display="none";
					  document.getElementById('completetab4').style.display="none";
					 document.getElementById('completetab2').style.display="block";
					}
					else if (n==2) {
						document.getElementById('updatepassword').style.display='none';
						document.getElementById('hometab').style.display="none";
					 document.getElementById('edittab').style.display="none";
					 document.getElementById('completetab1').style.display="none";
					 document.getElementById('completetab2').style.display="none";
					   document.getElementById('completetab4').style.display="none";
					  document.getElementById('completetab3').style.display="block";
					}
					else if (n==3) {
						document.getElementById('updatepassword').style.display='none';
						document.getElementById('hometab').style.display="none";
					 document.getElementById('edittab').style.display="none";
					 document.getElementById('completetab1').style.display="none";
					 document.getElementById('completetab2').style.display="none";
					  document.getElementById('completetab3').style.display="none";
					  document.getElementById('completetab4').style.display="block";
					}
				}

				function prev2(n){
					document.getElementById('imagecontent').style.display="none";
					document.getElementById('imageupload').style.display="none";
					if (n==2) {
						document.getElementById('updatepassword').style.display='none';
					 document.getElementById('completetab3').style.display="none";
					 document.getElementById('hometab').style.display="none";
					 document.getElementById('edittab').style.display="none";
					 document.getElementById('completetab2').style.display="none";
					 document.getElementById('completetab4').style.display="none";
					  document.getElementById('completetab2').style.display="none";
					 document.getElementById('completetab1').style.display="block";
					}

					else if (n==3) {
						document.getElementById('updatepassword').style.display='none';
						document.getElementById('hometab').style.display="none";
					 document.getElementById('edittab').style.display="none";
					 document.getElementById('completetab1').style.display="none";
					  document.getElementById('completetab3').style.display="none";
					  document.getElementById('completetab4').style.display="none";
					  document.getElementById('completetab2').style.display="block";
					}

					else if (n==4) {
						document.getElementById('updatepassword').style.display='none';
						document.getElementById('hometab').style.display="none";
					 document.getElementById('edittab').style.display="none";
					 document.getElementById('completetab1').style.display="none";
					 document.getElementById('completetab2').style.display="none";
					 document.getElementById('completetab4').style.display="none";
					  document.getElementById('completetab3').style.display="block";					  
					}

}







				

		</script>



<form action="server.php" method="post">
<table class="table2" id="hometab" style="display: block;">

	<tr><td colspan="3" style="text-align: center;font-size: 19px;font-weight: bolder;border: 1px solid black;background-color:#E39320 ;border-radius: 5px;">Home</td></tr>
	<tr><td colspan="3" style="text-align: center;font-size: 13px;font-weight: bolder;"><h2> 1.Personal Details</h2></td></tr>
	<tr><td>Name  </td><td>:</td><td class="td2"><?php echo $var1;?></td></tr>
			<tr><td>Date of Birth  </td><td>:</td><td class="td2"><?php echo $var2;?></td></tr>
			<tr><td>Gender </td><td>:</td><td class="td2"><?php echo $var3;?></td></tr>
			<tr><td>Father Name  </td><td>:</td><td class="td2"><?php echo $fathername;?></td></tr>
			<tr><td>Mother Name  </td><td>:</td><td class="td2"><?php echo $mothername;?></td></tr>
			<tr><td>Nationality </td><td>:</td><td class="td2"><?php echo $nationality;?></td></tr>	
			<tr><td>Mother Tongue </td><td>:</td><td class="td2"><?php echo $mothertongue;?></td></tr>	
			<tr><td>Present Address </td><td>:</td><td class="td2"><?php echo $presentaddress;?></td></tr>	
			<tr><td>Permanent Address </td><td>:</td><td class="td2"><?php echo $permanentaddress;?></td></tr>		
				<tr><td>Hobbies </td><td>:</td><td class="td2"><?php echo $hobbies;?></td></tr>	
				<tr><td colspan="3" style="text-align: center;font-size: 13px;font-weight: bolder;"><h2> 2.Educational Details</h2></td></tr>
				<tr><td>Tenth Board Name </td><td>:</td><td class="td2"><?php echo $tenthboardname;?></td></tr>	
				<tr><td>Tenth School Name </td><td>:</td><td class="td2"><?php echo $tenthschoolname;?></td></tr>	
				<tr><td>Tenth Percentage</td><td>:</td><td class="td2"><?php echo $tenthpercentage;?></td></tr>	
				<tr><td>Tenth Year of Passing </td><td>:</td><td class="td2"><?php echo $tenthyr_of_passing;?></td></tr>
				<tr><td>Twelveth Board Name </td><td>:</td><td class="td2"><?php echo $twelvethboardname;?></td></tr>	
				<tr><td>Twelveth School Name </td><td>:</td><td class="td2"><?php echo $twelvethinstitutename;?></td></tr>	
				<tr><td>Twelveth Percentage</td><td>:</td><td class="td2"><?php echo $twelvethpercentage;?></td></tr>		
				<tr><td>Twelveth Year of Passing </td><td>:</td><td class="td2"><?php echo $twelvethyr_of_passing;?></td></tr>	
				<tr><td>Degree  </td><td>:</td><td class="td2"><?php echo $var6;?></td></tr>
				<tr><td>Branch  </td><td>:</td><td class="td2"><?php echo $var7;?></td></tr>
			<tr><td>Registration Number  </td><td>:</td><td class="td2"><?php echo $var4;?></td></tr>
			<tr><td>Roll No  </td><td>:</td><td class="td2"><?php echo $var5;?></td></tr>
			<tr><td>CGPA </td><td>:</td><td class="td2"><?php echo $cgpa;?></td></tr>
			<tr><td colspan="3" style="text-align: center;font-size: 13px;font-weight: bolder;"><h2> 3.Contact Info</h2></td></tr>
			<tr><td>Email-Id  </td><td>:</td><td class="td2"><?php echo $var8;?></td></tr>
			<tr><td>Contact No  </td><td>:</td><td class="td2"><?php echo $var9;?></td></tr>
			
				<tr><td colspan="3" style="text-align: center;font-size: 13px;font-weight: bolder;"><h2> 4.Social</h2></td></tr>
				
				<tr><td>Facebook Profile Link </td><td>:</td><td class="td2"><?php echo $facebook;?></td></tr>
				<tr><td>Twitter Profile Link </td><td>:</td><td class="td2"><?php echo $twitter;?></td></tr>
				<tr><td>Github Profile Link </td><td>:</td><td class="td2"><?php echo $github;?></td></tr>
				<tr><td>Linkedin Profile Link </td><td>:</td><td class="td2"><?php echo $linkedin;?></td></tr>
				<tr><td colspan="3" style="text-align: center;font-size: 13px;font-weight: bolder;"><h2> 5.Skills</h2></td></tr>
				<tr><td>Languages Known </td><td>:</td><td class="td2"><?php echo $languages;?></td></tr>
				<tr><td>Soft Skills </td><td>:</td><td class="td2"><?php echo $softskills;?></td></tr>
				<tr><td>Technical Skills </td><td>:</td><td class="td2"><?php echo $technicalskills;?></td></tr>
</table>
</form>




<div class="scrollbar">
	<form name="registration_form" method="post" action="server.php">
		<table class="table2" id="edittab" style="display: none;">
			<tr><td colspan="3" style="text-align: center;font-size: 19px;font-weight: bolder;border: 1px solid black;background-color:#E39320 ;border-radius: 5px;">Edit Details</td></tr>
			<tr><td colspan="3" style="text-align: center;font-size: 13px;font-weight: bolder;"><h2> 1.Personal Details</h2></td></tr>
			<tr><td>Name  </td><td>:</td><td><input type="text" value="<?php echo $var1;?>" class="field" name="name" onblur="validatename()"></td></tr>
			<tr  class="errormsg" id="errorname">
						<td colspan="3"><span>*Please provide a name</span></td>
					</tr>
					<tr  class="errormsg" id="errorname1">
						<td><span>*Only alphabates..!</span></td>
					</tr>
   <tr><td>Date of Birth  </td><td>:</td><td><input class="field" value="<?php echo $var2;?>" min='1980-01-01' id="date" max='2020-01-01' name="dob" type="date" onblur="validatedate()"></td></tr>
   <tr  class="errormsg" id="errordate">
						<td><span>*Please provide your date of birth</span></td>
					</tr>
			<tr><td>Gender </td><td>:</td><td> <input type="radio" name="gender" value="Male" required /><label for="male">Male</label> 
							<input type="radio" name="gender" value="Female"><label for="female">Female</label></td></tr>
							<tr  class="errormsg" id="errorgender">
						<td><span>*Select your gender</span></td>
					</tr>

					<tr><td>Father Name  </td><td>:</td><td><input type="text" onblur="validatefathername()" value="<?php echo $fathername;?>" placeholder="Enter Fathername" class="field" name="fathername"></td></tr>
					<tr  class="errormsg" id="errorfathername">
						<td colspan="3"><span>*Please Enter your father name</span></td>
					</tr>
					<tr  class="errormsg" id="errorfathername1">
						<td><span>*Only alphabates..!</span></td>
					</tr>

					<tr><td>Mother Name  </td><td>:</td><td><input type="text" onblur="validatemothername()" value="<?php echo $mothername;?>" placeholder="Enter Mothername" class="field" name="mothername"></td></tr>
					<tr  class="errormsg" id="errormothername">
						<td colspan="3"><span>*Please Enter your mother name</span></td>
					</tr>
					<tr  class="errormsg" id="errormothername1">
						<td><span>*Only alphabates..!</span></td>
					</tr>

	<tr><td>Nationality</td>
						<td>:</td>
						<td>
							<select name="nationality" onblur="validatenationality()"  class="field" style="width: 217px;">
  <option value="select nationality">select nationality </option>
  <option value="afghan">Afghan</option>
  <option value="albanian">Albanian</option>
  <option value="algerian">Algerian</option>
  <option value="american">American</option>
  <option value="andorran">Andorran</option>
  <option value="angolan">Angolan</option>
  <option value="antiguans">Antiguans</option>
  <option value="argentinean">Argentinean</option>
  <option value="armenian">Armenian</option>
  <option value="australian">Australian</option>
  <option value="austrian">Austrian</option>
  <option value="azerbaijani">Azerbaijani</option>
  <option value="bahamian">Bahamian</option>
  <option value="bahraini">Bahraini</option>
  <option value="bangladeshi">Bangladeshi</option>
  <option value="barbadian">Barbadian</option>
  <option value="barbudans">Barbudans</option>
  <option value="batswana">Batswana</option>
  <option value="belarusian">Belarusian</option>
  <option value="belgian">Belgian</option>
  <option value="belizean">Belizean</option>
  <option value="beninese">Beninese</option>
  <option value="bhutanese">Bhutanese</option>
  <option value="bolivian">Bolivian</option>
  <option value="bosnian">Bosnian</option>
  <option value="brazilian">Brazilian</option>
  <option value="british">British</option>
  <option value="bruneian">Bruneian</option>
  <option value="bulgarian">Bulgarian</option>
  <option value="burkinabe">Burkinabe</option>
  <option value="burmese">Burmese</option>
  <option value="burundian">Burundian</option>
  <option value="cambodian">Cambodian</option>
  <option value="cameroonian">Cameroonian</option>
  <option value="canadian">Canadian</option>
  <option value="cape verdean">Cape Verdean</option>
  <option value="central african">Central African</option>
  <option value="chadian">Chadian</option>
  <option value="chilean">Chilean</option>
  <option value="chinese">Chinese</option>
  <option value="colombian">Colombian</option>
  <option value="comoran">Comoran</option>
  <option value="congolese">Congolese</option>
  <option value="costa rican">Costa Rican</option>
  <option value="croatian">Croatian</option>
  <option value="cuban">Cuban</option>
  <option value="cypriot">Cypriot</option>
  <option value="czech">Czech</option>
  <option value="danish">Danish</option>
  <option value="djibouti">Djibouti</option>
  <option value="dominican">Dominican</option>
  <option value="dutch">Dutch</option>
  <option value="east timorese">East Timorese</option>
  <option value="ecuadorean">Ecuadorean</option>
  <option value="egyptian">Egyptian</option>
  <option value="emirian">Emirian</option>
  <option value="equatorial guinean">Equatorial Guinean</option>
  <option value="eritrean">Eritrean</option>
  <option value="estonian">Estonian</option>
  <option value="ethiopian">Ethiopian</option>
  <option value="fijian">Fijian</option>
  <option value="filipino">Filipino</option>
  <option value="finnish">Finnish</option>
  <option value="french">French</option>
  <option value="gabonese">Gabonese</option>
  <option value="gambian">Gambian</option>
  <option value="georgian">Georgian</option>
  <option value="german">German</option>
  <option value="ghanaian">Ghanaian</option>
  <option value="greek">Greek</option>
  <option value="grenadian">Grenadian</option>
  <option value="guatemalan">Guatemalan</option>
  <option value="guinea-bissauan">Guinea-Bissauan</option>
  <option value="guinean">Guinean</option>
  <option value="guyanese">Guyanese</option>
  <option value="haitian">Haitian</option>
  <option value="herzegovinian">Herzegovinian</option>
  <option value="honduran">Honduran</option>
  <option value="hungarian">Hungarian</option>
  <option value="icelander">Icelander</option>
  <option value="indian">Indian</option>
  <option value="indonesian">Indonesian</option>
  <option value="iranian">Iranian</option>
  <option value="iraqi">Iraqi</option>
  <option value="irish">Irish</option>
  <option value="israeli">Israeli</option>
  <option value="italian">Italian</option>
  <option value="ivorian">Ivorian</option>
  <option value="jamaican">Jamaican</option>
  <option value="japanese">Japanese</option>
  <option value="jordanian">Jordanian</option>
  <option value="kazakhstani">Kazakhstani</option>
  <option value="kenyan">Kenyan</option>
  <option value="kittian and nevisian">Kittian and Nevisian</option>
  <option value="kuwaiti">Kuwaiti</option>
  <option value="kyrgyz">Kyrgyz</option>
  <option value="laotian">Laotian</option>
  <option value="latvian">Latvian</option>
  <option value="lebanese">Lebanese</option>
  <option value="liberian">Liberian</option>
  <option value="libyan">Libyan</option>
  <option value="liechtensteiner">Liechtensteiner</option>
  <option value="lithuanian">Lithuanian</option>
  <option value="luxembourger">Luxembourger</option>
  <option value="macedonian">Macedonian</option>
  <option value="malagasy">Malagasy</option>
  <option value="malawian">Malawian</option>
  <option value="malaysian">Malaysian</option>
  <option value="maldivan">Maldivan</option>
  <option value="malian">Malian</option>
  <option value="maltese">Maltese</option>
  <option value="marshallese">Marshallese</option>
  <option value="mauritanian">Mauritanian</option>
  <option value="mauritian">Mauritian</option>
  <option value="mexican">Mexican</option>
  <option value="micronesian">Micronesian</option>
  <option value="moldovan">Moldovan</option>
  <option value="monacan">Monacan</option>
  <option value="mongolian">Mongolian</option>
  <option value="moroccan">Moroccan</option>
  <option value="mosotho">Mosotho</option>
  <option value="motswana">Motswana</option>
  <option value="mozambican">Mozambican</option>
  <option value="namibian">Namibian</option>
  <option value="nauruan">Nauruan</option>
  <option value="nepalese">Nepalese</option>
  <option value="new zealander">New Zealander</option>
  <option value="ni-vanuatu">Ni-Vanuatu</option>
  <option value="nicaraguan">Nicaraguan</option>
  <option value="nigerien">Nigerien</option>
  <option value="north korean">North Korean</option>
  <option value="northern irish">Northern Irish</option>
  <option value="norwegian">Norwegian</option>
  <option value="omani">Omani</option>
  <option value="pakistani">Pakistani</option>
  <option value="palauan">Palauan</option>
  <option value="panamanian">Panamanian</option>
  <option value="papua new guinean">Papua New Guinean</option>
  <option value="paraguayan">Paraguayan</option>
  <option value="peruvian">Peruvian</option>
  <option value="polish">Polish</option>
  <option value="portuguese">Portuguese</option>
  <option value="qatari">Qatari</option>
  <option value="romanian">Romanian</option>
  <option value="russian">Russian</option>
  <option value="rwandan">Rwandan</option>
  <option value="saint lucian">Saint Lucian</option>
  <option value="salvadoran">Salvadoran</option>
  <option value="samoan">Samoan</option>
  <option value="san marinese">San Marinese</option>
  <option value="sao tomean">Sao Tomean</option>
  <option value="saudi">Saudi</option>
  <option value="scottish">Scottish</option>
  <option value="senegalese">Senegalese</option>
  <option value="serbian">Serbian</option>
  <option value="seychellois">Seychellois</option>
  <option value="sierra leonean">Sierra Leonean</option>
  <option value="singaporean">Singaporean</option>
  <option value="slovakian">Slovakian</option>
  <option value="slovenian">Slovenian</option>
  <option value="solomon islander">Solomon Islander</option>
  <option value="somali">Somali</option>
  <option value="south african">South African</option>
  <option value="south korean">South Korean</option>
  <option value="spanish">Spanish</option>
  <option value="sri lankan">Sri Lankan</option>
  <option value="sudanese">Sudanese</option>
  <option value="surinamer">Surinamer</option>
  <option value="swazi">Swazi</option>
  <option value="swedish">Swedish</option>
  <option value="swiss">Swiss</option>
  <option value="syrian">Syrian</option>
  <option value="taiwanese">Taiwanese</option>
  <option value="tajik">Tajik</option>
  <option value="tanzanian">Tanzanian</option>
  <option value="thai">Thai</option>
  <option value="togolese">Togolese</option>
  <option value="tongan">Tongan</option>
  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
  <option value="tunisian">Tunisian</option>
  <option value="turkish">Turkish</option>
  <option value="tuvaluan">Tuvaluan</option>
  <option value="ugandan">Ugandan</option>
  <option value="ukrainian">Ukrainian</option>
  <option value="uruguayan">Uruguayan</option>
  <option value="uzbekistani">Uzbekistani</option>
  <option value="venezuelan">Venezuelan</option>
  <option value="vietnamese">Vietnamese</option>
  <option value="welsh">Welsh</option>
  <option value="yemenite">Yemenite</option>
  <option value="zambian">Zambian</option>
  <option value="zimbabwean">Zimbabwean</option>
</select>
						</td></tr>
						<tr  class="errormsg" id="errornationality">
						<td><span>*Select your Nationality</span></td>
					</tr>

							<tr><td>Mother Tongue</td>
						<td>:</td>
						<td>
							<select name="mothertongue" onblur="validatemothertongue()"  class="field" style="width: 217px;">
								<option value="select Mother tongue">select Mother tongue</option>
 <option value="Afrikanns">Afrikanns</option>
  <option value="Albanian">Albanian</option>
  <option value="Arabic">Arabic</option>
  <option value="Armenian">Armenian</option>
  <option value="Basque">Basque</option>
  <option value="Bengali">Bengali</option>
  <option value="Bulgarian">Bulgarian</option>
  <option value="Catalan">Catalan</option>
  <option value="Cambodian">Cambodian</option>
  <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
  <option value="Croation">Croation</option>
  <option value="Czech">Czech</option>
  <option value="Danish">Danish</option>
  <option value="Dutch">Dutch</option>
  <option value="English">English</option>
  <option value="Estonian">Estonian</option>
  <option value="Fiji">Fiji</option>
  <option value="Finnish">Finnish</option>
  <option value="French">French</option>
  <option value="Georgian">Georgian</option>
  <option value="German">German</option>
  <option value="Greek">Greek</option>
  <option value="Gujarati">Gujarati</option>
  <option value="Hebrew">Hebrew</option>
  <option value="Hindi">Hindi</option>
  <option value="Hungarian">Hungarian</option>
  <option value="Icelandic">Icelandic</option>
  <option value="Indonesian">Indonesian</option>
  <option value="Irish">Irish</option>
  <option value="Italian">Italian</option>
  <option value="Japanese">Japanese</option>
  <option value="Javanese">Javanese</option>
  <option value="Korean">Korean</option>
  <option value="Latin">Latin</option>
  <option value="Latvian">Latvian</option>
  <option value="Lithuanian">Lithuanian</option>
  <option value="Macedonian">Macedonian</option>
  <option value="Malay">Malay</option>
  <option value="Malayalam">Malayalam</option>
  <option value="Maltese">Maltese</option>
  <option value="Maori">Maori</option>
  <option value="Marathi">Marathi</option>
  <option value="Mongolian">Mongolian</option>
  <option value="Nepali">Nepali</option>
  <option value="Norwegian">Norwegian</option>
  <option value="Persian">Persian</option>
  <option value="Polish">Polish</option>
  <option value="Portuguese">Portuguese</option>
  <option value="Punjabi">Punjabi</option>
  <option value="Quechua">Quechua</option>
  <option value="Romanian">Romanian</option>
  <option value="Russian">Russian</option>
  <option value="Samoan">Samoan</option>
  <option value="Serbian">Serbian</option>
  <option value="Slovak">Slovak</option>
  <option value="Slovenian">Slovenian</option>
  <option value="Spanish">Spanish</option>
  <option value="Swahili">Swahili</option>
  <option value="Swedish ">Swedish </option>
  <option value="Tamil">Tamil</option>
  <option value="Tatar">Tatar</option>
  <option value="Telugu">Telugu</option>
  <option value="Thai">Thai</option>
  <option value="Tibetan">Tibetan</option>
  <option value="Tonga">Tonga</option>
  <option value="Turkish">Turkish</option>
  <option value="Ukranian">Ukranian</option>
  <option value="Urdu">Urdu</option>
  <option value="Uzbek">Uzbek</option>
  <option value="Vietnamese">Vietnamese</option>
  <option value="Welsh">Welsh</option>
  <option value="Xhosa">Xhosa</option>
</select>
						</td></tr>	
						<tr  class="errormsg" id="errormothertongue">
						<td><span>*Select your Mother tongue</span></td>
					</tr>			

	<tr><td>Present Address  </td><td>:</td><td><textarea onblur="validatepresentaddress()" placeholder="Enter your present address here..." style="font-family: 'Montserrat', sans-serif;
	font-size:inherit;border: 1px solid black;border-radius: 5px;" name="presentaddress" rows="5" cols="22"><?php echo $presentaddress;?></textarea></td></tr>
	<tr  class="errormsg" id="erroraddress1">
						<td><span>*Enter your present address</span></td>
					</tr>
	<tr><td>Permanent Address  </td><td>:</td><td><textarea placeholder="Enter your permanent address here..." onblur="validatepermanentaddress()" style="font-family: 'Montserrat', sans-serif;font-size:inherit;border: 1px solid black;border-radius: 5px;" name="permanentaddress" rows="5" cols="22"><?php echo $permanentaddress;?></textarea></td></tr>
	<tr  class="errormsg" id="erroraddress2">
						<td><span>*Enter your permanent address</span></td>
					</tr>
	<tr><td>Hobbies  </td><td>:</td><td><textarea onblur="validatehobbies()" placeholder="Enter your hobbies here..." style="font-family: 'Montserrat', sans-serif;font-size:inherit;border: 1px solid black;border-radius: 5px;" name="hobbies" rows="3" cols="22"><?php echo $hobbies;?></textarea></td></tr>
	<tr  class="errormsg" id="errorhobbies">
						<td><span>*Enter your hobbies</span></td>
					</tr>

	<tr><td colspan="3" style="text-align: center;font-size: 13px;font-weight: bolder;"><h2> 2.Educational Details</h2></td></tr>
	<tr><td>10th Board Name</td><td>:</td><td><input type="text" onblur="validatetenthboardname()" value="<?php echo $tenthboardname;?>" placeholder="Enter 10th Board name" class="field" name="tenthboardname"></td></tr>
	<tr  class="errormsg" id="errortenthboardname">
						<td><span>*Enter your 10th board name</span></td>
					</tr>
	<tr><td>10th School Name</td><td>:</td><td><input type="text" onblur="validatetenthschoolname()" value="<?php echo $tenthschoolname;?>" placeholder="Enter 10th School name" class="field" name="tenthschoolname"></td></tr>
	<tr  class="errormsg" id="errortenthschoolname">
						<td><span>*Enter your 10th school name</span></td>
					</tr>
	<tr><td>10th Percentage Obtained</td><td>:</td><td><input type="number" onblur="validatetenthpercentage()"  value="<?php echo $tenthpercentage;?>" class="field" name="tenthpercentage" placeholder="Enter 10th Percentage"></td></tr>
	<tr  class="errormsg" id="errortenthpercentage">
						<td><span>*Enter your 10th percentage</span></td>
					</tr>
	<tr><td>10th year of Passing</td>
						<td>:</td>
						<td><select class="field" style="width: 217px;" onblur="validatetenthyear()" value="<?php echo $tenthyr_of_passing;?>" name="tenthpassing" placeholder="Year of passing">
						<option>Select Year</option>
						<option>2000</option>
						<option>2001</option>
						<option>2002</option>
						<option>2003</option>
						<option>2004</option>
						<option>2005</option>
						<option>2006</option>
						<option>2007</option>
						<option>2008</option>
						<option>2009</option>
						<option>2010</option>
						<option>2011</option>
						<option>2012</option>
						<option>2013</option>
						<option>2014</option>
						<option>2015</option>
						<option>2016</option>
						<option>2017</option>
					</select></td></tr>
					<tr  class="errormsg" id="errortenthyear">
						<td><span>*Select your 10th year of passing</span></td>
					</tr>
	<tr><td>12th Board Name</td><td>:</td><td><input onblur="validatetwelvethboardname()" value="<?php echo $twelvethboardname;?>" type="text" placeholder="Enter 12th Board name" class="field" name="twelvethboardname""></td></tr>
	<tr  class="errormsg" id="errortwelvethboardname">
						<td><span>*Enter your 12th board name</span></td>
					</tr>
	<tr><td>12th Institute Name</td><td>:</td><td><input type="text" onblur="validatetwelvethschoolname()" value="<?php echo $twelvethinstitutename;?>" placeholder="Enter 12th School name" class="field" name="twelvethschoolname""></td></tr>
	<tr  class="errormsg" id="errortwelvethschoolname">
						<td><span>*Enter your 12th institute name</span></td>
					</tr>
	<tr><td>12th Percentage Obtained</td><td>:</td><td><input type="number" onblur="validatetwelvethpercentage()"  value="<?php echo $twelvethpercentage;?>" class="field" name="twelvethpercentage" placeholder="Enter 12th Percentage"></td></tr>
	<tr  class="errormsg" id="errortwelvethpercentage">
						<td><span>*Enter your 12th percentage</span></td>
					</tr>
	<tr><td>12th year of Passing</td>
						<td>:</td>
						<td><select class="field" style="width: 217px;" onblur="validatetwelvethyear()" value="<?php echo $twelvethyr_of_passing;?>"   name="twelvethpassing" placeholder="Year of passing">
						<option>Select Year</option>
						<option>2000</option>
						<option>2001</option>
						<option>2002</option>
						<option>2003</option>
						<option>2004</option>
						<option>2005</option>
						<option>2006</option>
						<option>2007</option>
						<option>2008</option>
						<option>2009</option>
						<option>2010</option>
						<option>2011</option>
						<option>2012</option>
						<option>2013</option>
						<option>2014</option>
						<option>2015</option>
						<option>2016</option>
						<option>2017</option>
					</select></td></tr>		
					<tr  class="errormsg" id="errortwelvethyear">
						<td><span>*Select your 12th year of passing</span></td>
					</tr>		
<tr><td>Degree  </td><td>:</td><td><select class="field" value="<?php echo $var6;?>" name="degree" placeholder="Degree" onblur="validatedegree()">
						<option>Select your degree</option>
						<option value="B.Tech">B.Tech</option>
						<option value="M.Tech">M.Tech</option>
						<option value="MCA">MCA</option>
						<option value="Phd">Phd</option>
					</select></td></tr>
					<tr  class="errormsg" id="errordegree">
						<td><span>*Select your Degree</span></td>
					</tr>

					<tr><td>Branch  </td>
						<td>:</td>
						<td><select class="field"  name="branch" value="<?php echo $var7;?>" placeholder="Branch" onblur="validatebranch()">
						<option>Select your Branch</option>
						<option value="Infomation Technology">Infomation Technology</option>
						<option value="Computer science and Engineering">Computer science and Engineering</option>
						<option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
						<option value="Electrical Engineering">Electrical Engineering</option>
						<option value="Mechanical Engineering">Mechanical Engineering</option>
						<option value="Bio Technology">Bio Technology</option>
						<option value="Chemical Engineering">Chemical Engineering</option>
						<option value="Metalurgical and Materials Engineering">Metalurgical and Materials Engineering</option>
						<option value="Civil Engineering">Civil Engineering</option>

					</select></td></tr>
					<tr  class="errormsg" id="errorbranch">
						<td><span>*Select your Branch</span></td>
					</tr>

					<tr><td>Registration Number  </td><td>:</td><td><input type="number" class="field" value="<?php echo $var4;?>" name="regno" placeholder="Registration Number" onblur="validateregno()"></td></tr>
			<tr  class="errormsg" id="errorregno1">
						<td><span>*Provide your Registration No</span></td>
					</tr>
					<tr  class="errormsg" id="errorregno2">
						<td><span>*Provide a valid Registration No (Ex : 20150649)</span></td>
					</tr>
			<tr><td>Roll No  </td><td>:</td><td><input type="text" class="field" value="<?php echo $var5;?>" name="rollno" placeholder="Roll No" onblur="validaterollno()"></td></tr>
			<tr  class="errormsg" id="errorrollno1">
						<td><span>*Provide your Roll No</span></td>
					</tr>
					<tr  class="errormsg" id="errorrollno2">
						<td><span>*Provide a valid Roll No (Ex : 15/IT/71)</span></td>
					</tr>

	<tr><td>Under Graduation CGPA</td><td>:</td><td><input onblur="validatecgpa()" value="<?php echo $cgpa;?>" type="number" class="field" name="cgpa" placeholder="Enter current CGPA"></td></tr>	

	<tr  class="errormsg" id="errorcgpa">
						<td><span>*Enter your CGPA</span></td>
					</tr>	
			
					
			
				<tr><td colspan="3" style="text-align: center;font-size: 13px;font-weight: bolder;"><h2> 3.Contact Info</h2></td></tr>
			<tr><td>Email-Id  </td><td>:</td><td><input type="email" class="field" name="email" value="<?php echo $var8;?>" placeholder="Email-ID" onblur="validateemail()"></td></tr>
			<tr  class="errormsg" id="erroremail1">
						<td><span>*Provide your Email-ID</span></td>
					</tr>
					<tr  class="errormsg" id="erroremail2">
						<td><span>*Provide a valid Email-ID</span></td>
					</tr>
			<tr><td>Contact No  </td><td>:</td><td><input type="number" class="field" name="contactno"  value="<?php echo $var9;?>" placeholder="Contact No" onblur="validatecontactno()"></td></tr>
			<tr  class="errormsg" id="errorcontactno1">
						<td><span>*Provide your Contact No</span></td>
					</tr>
					<tr  class="errormsg" id="errorcontactno2">
						<td><span>*Provide a valid Contact No</span></td>
					</tr>

						<tr><td colspan="3" style="text-align: center;font-size: 13px;font-weight: bolder;"><h2> 4. Social</h2></td></tr>
						<tr><td>Facebook profile link</td><td>:</td><td><input value="<?php echo $facebook;?>" type="text" placeholder="Enter Facebook profile link" class="field" name="facebook" ></td></tr>
	<tr><td>Twitter profile link</td><td>:</td><td><input value="<?php echo $twitter;?>" type="text" placeholder="Enter twitter profile link" class="field" name="twitter"></td></tr>
	<tr><td>Github profile link</td><td>:</td><td><input value="<?php echo $github;?>" type="text" placeholder="Enter Github profile link" class="field" name="github"></td></tr>
	<tr><td>Linkedin profile link</td><td>:</td><td><input value="<?php echo $linkedin;?>" type="text" placeholder="Enter Linkedin profile link" class="field" name="linkedin"></td></tr>

<tr><td colspan="3" style="text-align: center;font-size: 13px;font-weight: bolder;"><h2> 4. Skills</h2></td></tr>
	
	<tr><td>Known Languages  </td><td>:</td><td><textarea id="textareaid1" onblur="validatelanguages()" placeholder="EX: Hindi,English,Telugu" style="font-family: 'Montserrat', sans-serif;font-size:inherit;border: 1px solid black;border-radius: 5px;" name="knownlanguages" rows="3" cols="22"><?php echo $languages;?></textarea></td></tr>
		<tr  class="errormsg" id="errorlanguages">
						<td><span>*Enter your known languages</span></td>
					</tr>
		<tr><td>Soft skills  </td><td>:</td><td><textarea onblur="validatesoftskills()" placeholder="EX : Hardwork , Teamwork , Self-Confidence " style="font-family: 'Montserrat', sans-serif;font-size:inherit;border: 1px solid black;border-radius: 5px;" name="softskills" rows="3" cols="22"><?php echo $softskills;?></textarea></td></tr>
		<tr  class="errormsg" id="errorsoftskills">
						<td><span>*Enter your soft skills</span></td>
					</tr>
		<tr><td>Technical skills  </td><td>:</td><td><textarea onblur="validatetechnicalskills()" placeholder="EX : MSoffice , EXCEL , Photoshop " style="font-family: 'Montserrat', sans-serif;font-size:inherit;border: 1px solid black;border-radius: 5px;" name="technicalskills" rows="3" cols="22"><?php echo $technicalskills;?></textarea></td></tr>
		<tr  class="errormsg" id="errortechnicalskills">
						<td><span>*Enter your technical skills</span></td>
					</tr>


			<tr><td colspan="3"  align="center"><input type="submit" style="width:47px"; value="Save | <?php echo $v;?> |<?php echo $var1;?>|<?php echo $var4;?>" name="Save" class="field" id="subm" onclick="valideditdetails()"></td></tr>
		</table>
	</form>
	</div>




<div >
<form method="POST"  action="server.php" enctype="multipart/form-data">
	<table id="imageupload" style="position: absolute;
	display: none;
	top:180px;
	right: 20px;
		border: 2px solid black;
	border-radius: 5px;
	padding: 15px;
	max-height: 450px;
	overflow-y:auto;
	overflow-x: hidden;">
	<tr><td style="text-align: center;font-size: 10px;padding:0px;font-weight: bolder;border: 1px solid black;background-color:#E39320 ;border-radius: 5px;"><h2>Upload Photo</h2></td></tr>
  	<tr><td><input type="hidden" name="size" value="1000000"></td></tr>
  	  <tr align="center"><td><input type="file" name="image"></td></tr>
  	<tr align="center"><td><input type="submit" name="imgsubmit" style="width:67px"; class="field" id="subm9" value="Upload |<?php echo $var1;?>|<?php echo $var4;?>"></td></tr>
  	  </table>
  	  </form>
</div>



<div id="imagecontent" style="position: absolute;top: 200px;right: 90px;">
  <?php

	$sql10="SELECT * FROM images WHERE regno='$regno' ";


					// $sql="SELECT * from users where id=1";
					$result10=$conn->query($sql10);

					if($result10->num_rows >0)
					{
						while($row=$result10->fetch_assoc())
						{
      echo "<div style='border:2px solid black;border-radius:5px;' id='img_div'>";
      	echo "<img height='150' width='150' src='images/".$row['image']."' >";
      echo "</div>";
    }
}
  ?>
</div>






		<!-- <img id="back-img" src="backg.jpeg" /> -->
		


	<form  name="complete_form" action="server.php" method="post" >

<div class="scrollbar">
<table class="table2" id="completetab1" style="display: none;">

	<tr><td colspan="3" style="text-align: center;font-size: 19px;font-weight: bolder;border: 1px solid black;background-color:#E39320 ;border-radius: 5px;">Complete Your Profile</td></tr>
	<tr><td colspan="3" style="text-align: center;font-size: 13px;font-weight: bolder;"><h2> 1. Personal Details</h2></td></tr>
	<tr><td>Father Name  </td><td>:</td><td><input onblur="validatefathername1()" type="text" placeholder="Enter Fathername" class="field" name="fathername"></td></tr>
	<tr  class="errormsg" id="error1fathername">
						<td colspan="3"><span>*Please Enter your father name</span></td>
					</tr>
					<tr  class="errormsg" id="error1fathername1">
						<td><span>*Only alphabates..!</span></td>
					</tr>

	<tr><td>Mother Name  </td><td>:</td><td><input onblur="validatemothername1()" type="text" placeholder="Enter Mothername" class="field" name="mothername"></td></tr>
	<tr  class="errormsg" id="error1mothername">
						<td colspan="3"><span>*Please Enter your mother name</span></td>
					</tr>
					<tr  class="errormsg" id="error1mothername1">
						<td><span>*Only alphabates..!</span></td>
					</tr>
	<tr><td>Nationality</td>
						<td>:</td>
						<td>
							<select name="nationality" onblur="validatenationality1()" class="field" style="width: 217px;">
  <option value="select nationality">select nationality </option>
  <option value="afghan">Afghan</option>
  <option value="albanian">Albanian</option>
  <option value="algerian">Algerian</option>
  <option value="american">American</option>
  <option value="andorran">Andorran</option>
  <option value="angolan">Angolan</option>
  <option value="antiguans">Antiguans</option>
  <option value="argentinean">Argentinean</option>
  <option value="armenian">Armenian</option>
  <option value="australian">Australian</option>
  <option value="austrian">Austrian</option>
  <option value="azerbaijani">Azerbaijani</option>
  <option value="bahamian">Bahamian</option>
  <option value="bahraini">Bahraini</option>
  <option value="bangladeshi">Bangladeshi</option>
  <option value="barbadian">Barbadian</option>
  <option value="barbudans">Barbudans</option>
  <option value="batswana">Batswana</option>
  <option value="belarusian">Belarusian</option>
  <option value="belgian">Belgian</option>
  <option value="belizean">Belizean</option>
  <option value="beninese">Beninese</option>
  <option value="bhutanese">Bhutanese</option>
  <option value="bolivian">Bolivian</option>
  <option value="bosnian">Bosnian</option>
  <option value="brazilian">Brazilian</option>
  <option value="british">British</option>
  <option value="bruneian">Bruneian</option>
  <option value="bulgarian">Bulgarian</option>
  <option value="burkinabe">Burkinabe</option>
  <option value="burmese">Burmese</option>
  <option value="burundian">Burundian</option>
  <option value="cambodian">Cambodian</option>
  <option value="cameroonian">Cameroonian</option>
  <option value="canadian">Canadian</option>
  <option value="cape verdean">Cape Verdean</option>
  <option value="central african">Central African</option>
  <option value="chadian">Chadian</option>
  <option value="chilean">Chilean</option>
  <option value="chinese">Chinese</option>
  <option value="colombian">Colombian</option>
  <option value="comoran">Comoran</option>
  <option value="congolese">Congolese</option>
  <option value="costa rican">Costa Rican</option>
  <option value="croatian">Croatian</option>
  <option value="cuban">Cuban</option>
  <option value="cypriot">Cypriot</option>
  <option value="czech">Czech</option>
  <option value="danish">Danish</option>
  <option value="djibouti">Djibouti</option>
  <option value="dominican">Dominican</option>
  <option value="dutch">Dutch</option>
  <option value="east timorese">East Timorese</option>
  <option value="ecuadorean">Ecuadorean</option>
  <option value="egyptian">Egyptian</option>
  <option value="emirian">Emirian</option>
  <option value="equatorial guinean">Equatorial Guinean</option>
  <option value="eritrean">Eritrean</option>
  <option value="estonian">Estonian</option>
  <option value="ethiopian">Ethiopian</option>
  <option value="fijian">Fijian</option>
  <option value="filipino">Filipino</option>
  <option value="finnish">Finnish</option>
  <option value="french">French</option>
  <option value="gabonese">Gabonese</option>
  <option value="gambian">Gambian</option>
  <option value="georgian">Georgian</option>
  <option value="german">German</option>
  <option value="ghanaian">Ghanaian</option>
  <option value="greek">Greek</option>
  <option value="grenadian">Grenadian</option>
  <option value="guatemalan">Guatemalan</option>
  <option value="guinea-bissauan">Guinea-Bissauan</option>
  <option value="guinean">Guinean</option>
  <option value="guyanese">Guyanese</option>
  <option value="haitian">Haitian</option>
  <option value="herzegovinian">Herzegovinian</option>
  <option value="honduran">Honduran</option>
  <option value="hungarian">Hungarian</option>
  <option value="icelander">Icelander</option>
  <option value="indian">Indian</option>
  <option value="indonesian">Indonesian</option>
  <option value="iranian">Iranian</option>
  <option value="iraqi">Iraqi</option>
  <option value="irish">Irish</option>
  <option value="israeli">Israeli</option>
  <option value="italian">Italian</option>
  <option value="ivorian">Ivorian</option>
  <option value="jamaican">Jamaican</option>
  <option value="japanese">Japanese</option>
  <option value="jordanian">Jordanian</option>
  <option value="kazakhstani">Kazakhstani</option>
  <option value="kenyan">Kenyan</option>
  <option value="kittian and nevisian">Kittian and Nevisian</option>
  <option value="kuwaiti">Kuwaiti</option>
  <option value="kyrgyz">Kyrgyz</option>
  <option value="laotian">Laotian</option>
  <option value="latvian">Latvian</option>
  <option value="lebanese">Lebanese</option>
  <option value="liberian">Liberian</option>
  <option value="libyan">Libyan</option>
  <option value="liechtensteiner">Liechtensteiner</option>
  <option value="lithuanian">Lithuanian</option>
  <option value="luxembourger">Luxembourger</option>
  <option value="macedonian">Macedonian</option>
  <option value="malagasy">Malagasy</option>
  <option value="malawian">Malawian</option>
  <option value="malaysian">Malaysian</option>
  <option value="maldivan">Maldivan</option>
  <option value="malian">Malian</option>
  <option value="maltese">Maltese</option>
  <option value="marshallese">Marshallese</option>
  <option value="mauritanian">Mauritanian</option>
  <option value="mauritian">Mauritian</option>
  <option value="mexican">Mexican</option>
  <option value="micronesian">Micronesian</option>
  <option value="moldovan">Moldovan</option>
  <option value="monacan">Monacan</option>
  <option value="mongolian">Mongolian</option>
  <option value="moroccan">Moroccan</option>
  <option value="mosotho">Mosotho</option>
  <option value="motswana">Motswana</option>
  <option value="mozambican">Mozambican</option>
  <option value="namibian">Namibian</option>
  <option value="nauruan">Nauruan</option>
  <option value="nepalese">Nepalese</option>
  <option value="new zealander">New Zealander</option>
  <option value="ni-vanuatu">Ni-Vanuatu</option>
  <option value="nicaraguan">Nicaraguan</option>
  <option value="nigerien">Nigerien</option>
  <option value="north korean">North Korean</option>
  <option value="northern irish">Northern Irish</option>
  <option value="norwegian">Norwegian</option>
  <option value="omani">Omani</option>
  <option value="pakistani">Pakistani</option>
  <option value="palauan">Palauan</option>
  <option value="panamanian">Panamanian</option>
  <option value="papua new guinean">Papua New Guinean</option>
  <option value="paraguayan">Paraguayan</option>
  <option value="peruvian">Peruvian</option>
  <option value="polish">Polish</option>
  <option value="portuguese">Portuguese</option>
  <option value="qatari">Qatari</option>
  <option value="romanian">Romanian</option>
  <option value="russian">Russian</option>
  <option value="rwandan">Rwandan</option>
  <option value="saint lucian">Saint Lucian</option>
  <option value="salvadoran">Salvadoran</option>
  <option value="samoan">Samoan</option>
  <option value="san marinese">San Marinese</option>
  <option value="sao tomean">Sao Tomean</option>
  <option value="saudi">Saudi</option>
  <option value="scottish">Scottish</option>
  <option value="senegalese">Senegalese</option>
  <option value="serbian">Serbian</option>
  <option value="seychellois">Seychellois</option>
  <option value="sierra leonean">Sierra Leonean</option>
  <option value="singaporean">Singaporean</option>
  <option value="slovakian">Slovakian</option>
  <option value="slovenian">Slovenian</option>
  <option value="solomon islander">Solomon Islander</option>
  <option value="somali">Somali</option>
  <option value="south african">South African</option>
  <option value="south korean">South Korean</option>
  <option value="spanish">Spanish</option>
  <option value="sri lankan">Sri Lankan</option>
  <option value="sudanese">Sudanese</option>
  <option value="surinamer">Surinamer</option>
  <option value="swazi">Swazi</option>
  <option value="swedish">Swedish</option>
  <option value="swiss">Swiss</option>
  <option value="syrian">Syrian</option>
  <option value="taiwanese">Taiwanese</option>
  <option value="tajik">Tajik</option>
  <option value="tanzanian">Tanzanian</option>
  <option value="thai">Thai</option>
  <option value="togolese">Togolese</option>
  <option value="tongan">Tongan</option>
  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
  <option value="tunisian">Tunisian</option>
  <option value="turkish">Turkish</option>
  <option value="tuvaluan">Tuvaluan</option>
  <option value="ugandan">Ugandan</option>
  <option value="ukrainian">Ukrainian</option>
  <option value="uruguayan">Uruguayan</option>
  <option value="uzbekistani">Uzbekistani</option>
  <option value="venezuelan">Venezuelan</option>
  <option value="vietnamese">Vietnamese</option>
  <option value="welsh">Welsh</option>
  <option value="yemenite">Yemenite</option>
  <option value="zambian">Zambian</option>
  <option value="zimbabwean">Zimbabwean</option>
</select>
						</td></tr>
						<tr  class="errormsg" id="error1nationality">
						<td><span>*Select your Nationality</span></td>
					</tr>

							<tr><td>Mother Tongue</td>
						<td>:</td>
						<td>
							<select name="mothertongue" onblur="validatemothertongue1()"  class="field" style="width: 217px;">
								<option value="select Mother tongue">select Mother tongue</option>
 <option value="Afrikanns">Afrikanns</option>
  <option value="Albanian">Albanian</option>
  <option value="Arabic">Arabic</option>
  <option value="Armenian">Armenian</option>
  <option value="Basque">Basque</option>
  <option value="Bengali">Bengali</option>
  <option value="Bulgarian">Bulgarian</option>
  <option value="Catalan">Catalan</option>
  <option value="Cambodian">Cambodian</option>
  <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
  <option value="Croation">Croation</option>
  <option value="Czech">Czech</option>
  <option value="Danish">Danish</option>
  <option value="Dutch">Dutch</option>
  <option value="English">English</option>
  <option value="Estonian">Estonian</option>
  <option value="Fiji">Fiji</option>
  <option value="Finnish">Finnish</option>
  <option value="French">French</option>
  <option value="Georgian">Georgian</option>
  <option value="German">German</option>
  <option value="Greek">Greek</option>
  <option value="Gujarati">Gujarati</option>
  <option value="Hebrew">Hebrew</option>
  <option value="Hindi">Hindi</option>
  <option value="Hungarian">Hungarian</option>
  <option value="Icelandic">Icelandic</option>
  <option value="Indonesian">Indonesian</option>
  <option value="Irish">Irish</option>
  <option value="Italian">Italian</option>
  <option value="Japanese">Japanese</option>
  <option value="Javanese">Javanese</option>
  <option value="Korean">Korean</option>
  <option value="Latin">Latin</option>
  <option value="Latvian">Latvian</option>
  <option value="Lithuanian">Lithuanian</option>
  <option value="Macedonian">Macedonian</option>
  <option value="Malay">Malay</option>
  <option value="Malayalam">Malayalam</option>
  <option value="Maltese">Maltese</option>
  <option value="Maori">Maori</option>
  <option value="Marathi">Marathi</option>
  <option value="Mongolian">Mongolian</option>
  <option value="Nepali">Nepali</option>
  <option value="Norwegian">Norwegian</option>
  <option value="Persian">Persian</option>
  <option value="Polish">Polish</option>
  <option value="Portuguese">Portuguese</option>
  <option value="Punjabi">Punjabi</option>
  <option value="Quechua">Quechua</option>
  <option value="Romanian">Romanian</option>
  <option value="Russian">Russian</option>
  <option value="Samoan">Samoan</option>
  <option value="Serbian">Serbian</option>
  <option value="Slovak">Slovak</option>
  <option value="Slovenian">Slovenian</option>
  <option value="Spanish">Spanish</option>
  <option value="Swahili">Swahili</option>
  <option value="Swedish ">Swedish </option>
  <option value="Tamil">Tamil</option>
  <option value="Tatar">Tatar</option>
  <option value="Telugu">Telugu</option>
  <option value="Thai">Thai</option>
  <option value="Tibetan">Tibetan</option>
  <option value="Tonga">Tonga</option>
  <option value="Turkish">Turkish</option>
  <option value="Ukranian">Ukranian</option>
  <option value="Urdu">Urdu</option>
  <option value="Uzbek">Uzbek</option>
  <option value="Vietnamese">Vietnamese</option>
  <option value="Welsh">Welsh</option>
  <option value="Xhosa">Xhosa</option>
</select>
						</td></tr>	
						<tr  class="errormsg" id="error1mothertongue">
						<td><span>*Select your Mother tongue</span></td>
					</tr>			

	<tr><td>Present Address  </td><td>:</td><td><textarea onblur="validatepresentaddress1()" placeholder="Enter your present address here..." style="font-family: 'Montserrat', sans-serif;
	font-size:inherit;border: 1px solid black;border-radius: 5px;" name="presentaddress" rows="5" cols="22"></textarea></td></tr>
	<tr  class="errormsg" id="error1address1">
						<td><span>*Enter your present address</span></td>
					</tr>
	<tr><td>Permanent Address  </td><td>:</td><td><textarea onblur="validatepermanentaddress1()" placeholder="Enter your permanent address here..." style="font-family: 'Montserrat', sans-serif;font-size:inherit;border: 1px solid black;border-radius: 5px;" name="permanentaddress" rows="5" cols="22"></textarea></td></tr>
	<tr  class="errormsg" id="error1address2">
						<td><span>*Enter your permanent address</span></td>
					</tr>
	<tr><td>Hobbies  </td><td>:</td><td><textarea onblur="validatehobbies1()" placeholder="Enter your hobbies here..." style="font-family: 'Montserrat', sans-serif;font-size:inherit;border: 1px solid black;border-radius: 5px;" name="hobbies" rows="3" cols="22"></textarea></td></tr>
	<tr  class="errormsg" id="error1hobbies">
						<td><span>*Enter your hobbies</span></td>
					</tr>
		<tr><td colspan="3"><input type="button" name="next" value="Next" class="field" id="next" onclick="next2(1)"/></td></tr>
</table>

</div>



<div class="scrollbar">
	
<table class="table2" id="completetab2" style="display: none;">

	<tr><td colspan="3" style="text-align: center;font-size: 19px;font-weight: bolder;border: 1px solid black;background-color:#E39320 ;border-radius: 5px;">Complete Your Profile</td></tr>
	<tr><td colspan="3" style="text-align: center;font-size: 13px;font-weight: bolder;"><h2> 2. Academic Details</h2></td></tr>
	<tr><td>10th Board Name</td><td>:</td><td><input  type="text" placeholder="Enter 10th Board name" class="field" onblur="validatetenthboardname1()" name="tenthboardname""></td></tr>

<tr  class="errormsg" id="error1tenthboardname">
						<td><span>*Enter your 10th board name</span></td>
					</tr>
	<tr><td>10th School Name</td><td>:</td><td><input type="text" placeholder="Enter 10th School name" class="field" onblur="validatetenthschoolname1()" name="tenthschoolname""></td></tr>
	<tr  class="errormsg" id="error1tenthschoolname">
						<td><span>*Enter your 10th school name</span></td>
					</tr>

	<tr><td>10th Percentage Obtained</td><td>:</td><td><input type="num" class="field" name="tenthpercentage" onblur="validatetenthpercentage1()" placeholder="Enter 10th Percentage"></td></tr>
	<tr  class="errormsg" id="error1tenthpercentage">
						<td><span>*Enter your 10th percentage</span></td>
					</tr>
	<tr><td>10th year of Passing</td>
						<td>:</td>
						<td><select class="field" style="width: 217px;" onblur="validatetenthyear1()" name="tenthpassing" placeholder="Year of passing">
						<option>Select Year</option>
						<option>2000</option>
						<option>2001</option>
						<option>2002</option>
						<option>2003</option>
						<option>2004</option>
						<option>2005</option>
						<option>2006</option>
						<option>2007</option>
						<option>2008</option>
						<option>2009</option>
						<option>2010</option>
						<option>2011</option>
						<option>2012</option>
						<option>2013</option>
						<option>2014</option>
						<option>2015</option>
						<option>2016</option>
						<option>2017</option>
					</select></td></tr>


					<tr  class="errormsg" id="error1tenthyear">
						<td><span>*Select your 10th year of passing</span></td>
					</tr>

	<tr><td>12th Board Name</td><td>:</td><td><input type="text" placeholder="Enter 12th Board name" onblur="validatetwelvethboardname1()" class="field" name="twelvethboardname""></td></tr>
	<tr  class="errormsg" id="error1twelvethboardname">
						<td><span>*Enter your 12th board name</span></td>
					</tr>
	<tr><td>12th Institute Name</td><td>:</td><td><input type="text" onblur="validatetwelvethschoolname1()" placeholder="Enter 12th School name" class="field" name="twelvethschoolname""></td></tr>

	<tr  class="errormsg" id="error1twelvethschoolname">
						<td><span>*Enter your 12th institute name</span></td>
					</tr>
	<tr><td>12th Percentage Obtained</td><td>:</td><td><input type="num" onblur="validatetwelvethpercentage1()" class="field" name="twelvethpercentage" placeholder="Enter 12th Percentage"></td></tr>
	<tr  class="errormsg" id="error1twelvethpercentage">
						<td><span>*Enter your 12th percentage</span></td>
					</tr>
	<tr><td>12th year of Passing</td>
						<td>:</td>
						<td><select class="field" style="width: 217px;" onblur="validatetwelvethyear1()"  name="twelvethpassing" placeholder="Year of passing">
						<option>Select Year</option>
						<option>2000</option>
						<option>2001</option>
						<option>2002</option>
						<option>2003</option>
						<option>2004</option>
						<option>2005</option>
						<option>2006</option>
						<option>2007</option>
						<option>2008</option>
						<option>2009</option>
						<option>2010</option>
						<option>2011</option>
						<option>2012</option>
						<option>2013</option>
						<option>2014</option>
						<option>2015</option>
						<option>2016</option>
						<option>2017</option>
					</select></td></tr>		
					<tr  class="errormsg" id="error1twelvethyear">
						<td><span>*Select your 12th year of passing</span></td>
					</tr>			

	<tr><td>Under Graduation CGPA</td><td>:</td><td><input type="num" onblur="validatecgpa1()" class="field" name="cgpa" placeholder="Enter current CGPA"></td></tr>		
	<tr  class="errormsg" id="error1cgpa">
						<td><span>*Enter your CGPA</span></td>
					</tr>	

	<tr>	<td align="left"><input type="button" name="prev" value="Previous" class="field" id="reset2" onclick="prev2(2)"/></td>
		<td colspan="2" align="center"><input type="button" name="next" value="Next" class="field" id="subm2" onclick="next2(2)"/></td>
					</tr>		
</table>

</div>



<div class="scrollbar">

<table class="table2" id="completetab3" style="display: none;">

	<tr><td colspan="3" style="text-align: center;font-size: 19px;font-weight: bolder;border: 1px solid black;background-color:#E39320 ;border-radius: 5px;">Complete Your Profile</td></tr>
	<tr><td colspan="3" style="text-align: center;font-size: 13px;font-weight: bolder;"><h2> 3. Social</h2></td></tr>
	<tr><td>Facebook profile link</td><td>:</td><td><input type="text" placeholder="Enter Facebook profile link" class="field" name="facebook" ></td></tr>
	<tr><td>Twitter profile link</td><td>:</td><td><input type="text" placeholder="Enter twitter profile link" class="field" name="twitter"></td></tr>
	<tr><td>Github profile link</td><td>:</td><td><input type="text" placeholder="Enter Github profile link" class="field" name="github"></td></tr>
	<tr><td>Linkedin profile link</td><td>:</td><td><input type="text" placeholder="Enter Linkedin profile link" class="field" name="linkedin"></td></tr>
	<tr>	<td align="left"><input type="button" name="prev" value="Previous" class="field" id="reset3" onclick="prev2(3)"/></td>
		<td colspan="2" align="center"><input type="button" name="next" value="Next" class="field" id="subm12" onclick="next2(3)"/></td>
					</tr>
	
</table>


</div>



<div class="scrollbar">
	
<table class="table2" id="completetab4" style="display: none;">

	<tr><td colspan="3" style="text-align: center;font-size: 19px;font-weight: bolder;border: 1px solid black;background-color:#E39320 ;border-radius: 5px;">Complete Your Profile</td></tr>
	<tr><td colspan="3" style="text-align: center;font-size: 13px;font-weight: bolder;"><h2> 4. Skills</h2></td></tr>
	
	<tr><td>Known Languages  </td><td>:</td><td><textarea placeholder="EX: Hindi,English,Telugu" style="font-family: 'Montserrat', sans-serif;font-size:inherit;border: 1px solid black;border-radius: 5px;" name="knownlanguages" rows="3" cols="22"></textarea></td></tr>
		<tr><td>Soft skills  </td><td>:</td><td><textarea placeholder="EX : Hardwork , Teamwork , Self-Confidence " style="font-family: 'Montserrat', sans-serif;font-size:inherit;border: 1px solid black;border-radius: 5px;" name="softskills" rows="3" cols="22"></textarea></td></tr>
		<tr><td>Technical skills  </td><td>:</td><td><textarea placeholder="EX : MSoffice , EXCEL , Photoshop " style="font-family: 'Montserrat', sans-serif;font-size:inherit;border: 1px solid black;border-radius: 5px;" name="technicalskills" rows="3" cols="22"></textarea></td></tr>

	<tr>	<td align="right"><input type="button" name="prev" style="width: 79px;" value="Previous" class="field" id="reset4" onclick="prev2(4)"/></td>
		<td colspan="2"  align="center" ><input type="submit" style="width: 68px;" value="Submit |<?php echo $var1;?>|<?php echo $var4;?>" name="completesubmit" class="field" id="subm10"></td>
					</tr>
	
</table>
</div>


	


	</form>


<form name="passwordform" action="server.php" method="post">
<table class="table2" id="updatepassword" style="display: none;">

	<tr><td colspan="3" style="text-align: center;font-size: 19px;font-weight: bolder;border: 1px solid black;background-color:#E39320 ;border-radius: 5px;">Settings</td></tr>
	<tr><td colspan="3" style="text-align: center;font-size: 13px;font-weight: bolder;"><h2>Change Password</h2></td></tr>
	<tr>
							<td><label for="password">Enter Old Password</label></td>
							<td>:</td>
							<td><input type="password" id="oldpasswordid" class="field" autocomplete="off" onblur="changepassword()" name="oldpassword" placeholder="Enter old password"></td>
						</tr>
						<tr  class="errormsg" id="erroroldpassword">
						<td><span>*Wrong password</span></td>
					</tr>
					<tr>
							<td><label for="password">Enter New Password</label></td>
							<td>:</td>
							<td><input type="password" class="field" name="newpassword1" placeholder="Enter new password" onblur="validatenewpassword()"></td>
						</tr>
						<tr  class="errormsg" id="errorpass1">
						<td><span>*Provide your password</span></td>
					</tr>
					<tr  class="errormsg" id="errorpass2">
						<td><span>*Password length should be atleast six.</span></td>
					</tr>
					<tr  class="errormsg" id="errorpass3">
						<td><span>*Password should contain atleast one numeric value.<br>*password should contain atleast one uppercase character<br>
								*password should contain atleast one special character</span></td>
					</tr>
	<tr>
							<td><label for="password">Re-enter New Password</label></td>
							<td>:</td>
							<td><input type="password" class="field" name="newpassword2" placeholder="Re-enter password" onblur="validatenewconfirmpassword()"></td>
						</tr>		
						<tr  class="errormsg" id="errorcpass1">
						<td><span>*Provide your confirm password</span></td>
					</tr>
					<tr  class="errormsg" id="errorcpass2">
						<td><span>*Passwords do not match.</span></td>
					</tr>	

						<tr><td colspan="3"><input type="submit" name="newpassword1" value="Change Password " class="field" id="next3" /></td></tr>

<!-- 	<tr align="center"><td colspan="3"><input style="width: 48px;" type="submit" name="nextpassword" value="Next | <?php echo $var4;?>" class="field" id="next2" /></td></tr> -->
	
</table>
</form>

<?PHP
FUNCTION hello(){
 GLOBAL $varpass;
 ECHO $varpass;
 }
 
?>
<script type="text/javascript">

}
		</script>
<!-- <form action="server.php" method="post">
<table class="table2" id="updatepassword1" style="display: none;">

	<tr><td colspan="3" style="text-align: center;font-size: 19px;font-weight: bolder;border: 1px solid black;background-color:#E39320 ;border-radius: 5px;">Settings</td></tr>
	<tr><td colspan="3" style="text-align: center;font-size: 13px;font-weight: bolder;"><h2>Change Password</h2></td></tr>
	<tr>
							<td><label for="password">Enter New Password</label></td>
							<td>:</td>
							<td><input type="password" class="field" name="newpassword1" placeholder="Enter new password"></td>
						</tr>
	<tr>
							<td><label for="password">Re-enter New Password</label></td>
							<td>:</td>
							<td><input type="password" class="field" name="newpassword2" placeholder="Re-enter password"></td>
						</tr>					
	<tr><td colspan="3"><input type="submit" name="newpassword1" value="Change Password " class="field" id="next3" /></td></tr>
	
</table>
</form> -->
	<script type="text/javascript" src="script1.js"></script>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>