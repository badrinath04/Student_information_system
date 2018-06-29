<?php 
$con=mysqli_connect('127.0.0.1','root','','student_information_system');
if (!$con) {
	echo "not connected to server";
}
session_start();

//registration
if(isset($_POST['Register']))
{
$name = $_POST['name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$regno = $_POST['regno'];
$rollno = $_POST['rollno'];
$degree = $_POST['degree'];
$branch = $_POST['branch'];
$yr_of_passing = $_POST['yr_of_passing'];
$email = $_POST['email'];
$contactno=$_POST['contactno'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$security_ques = $_POST['security_ques'];
$answer = $_POST['answer'];

$confirmpassword=md5($confirmpassword);
$password=md5($password);

$sql="INSERT INTO users(`name`,`dob`,`gender`,`regno`,`rollno`,`degree`,`branch`,`yr_of_passing`,`email`,`contactno`,`password`,`confirmpassword`,`security_ques`,`answer`)VALUES('$name','$dob','$gender','$regno','$rollno','$degree','$branch','$yr_of_passing','$email','$contactno','$password','$confirmpassword','$security_ques','$answer')";
$sql2="INSERT INTO `final`(`name`, `dob`, `gender`, `regno`, `rollno`, `degree`, `branch`, `yr_of_passing`, `email`, `contactno`, `password`, `confirmpassword`, `security_ques`, `answer`)VALUES('$name','$dob','$gender','$regno','$rollno','$degree','$branch','$yr_of_passing','$email','$contactno','$password','$confirmpassword','$security_ques','$answer')";

if(!mysqli_query($con,$sql)){
	echo "<script>
alert('something went wrong please refill the registration form....!');
window.location.href='register.html';
</script>";
}				  
else{
echo "<script>
alert('Successfully Registered. Please login');
window.location.href='login.html';
</script>";
}

if(!mysqli_query($con,$sql2)){
	echo "<script>
alert('something went wrong please refill the registration form....!');
window.location.href='register.html';
</script>";
}				  
else{
echo "<script>
alert('Successfully Registered. Please login');
window.location.href='login.html';
</script>";
}
}


//login
if(isset($_POST['LOGIN']))
{
$regno = mysqli_real_escape_string($con, $_POST['regno']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$password = md5($password);
		$query = "SELECT * FROM activeusers WHERE regno='$regno' AND password='$password'";
		$results = mysqli_query($con, $query);

		if (mysqli_num_rows($results) == 1) {
			session_start();
		     $_SESSION['regno'] = $regno;
		     $_SESSION['password']=$password;
			//$_SESSION['success'] = "You are now logged in";
			header('location: homepage.php');
		}else {
		
			echo "<script>
alert('Invalid username or password');
window.location.href='login.html';
</script>";
		}
}


//adminlogin
if(isset($_POST['adminlogin']))
{
$username = mysqli_real_escape_string($con, $_POST['username']);
$password1 = mysqli_real_escape_string($con, $_POST['password']);

		$query1 = "SELECT * FROM admin WHERE username='$username' AND password='$password1'";
		$results1 = mysqli_query($con, $query1);

		if (mysqli_num_rows($results1) == 1) {
			session_start();
		     $_SESSION['username'] = $username;
			header('location: adminhomepage.php');
		}else {
			echo "<script>
alert('Invalid username or password');
window.location.href='adminlogin.html';
</script>";
			
		}
}


//feedback
if(isset($_POST['feedback']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$sql="INSERT INTO feedback(`name`,`email`,`feedback`) 
				  VALUES('$name','$email','$message')";

if(!mysqli_query($con,$sql)){
	echo "<script>
alert('something went wrong please refill the feedback form....!');
window.location.href='feedback.html';
</script>";
}				  
else{
	echo "<script>
alert('Thank you for the feedback');
window.location.href='login.html';
</script>";
	//header('location:login.html');
}
}




if(isset($_POST['Reject']))
{
	list($value1,$value3,$value2) = explode('|', $_POST['Reject']);
$sql ="INSERT INTO rejectedusers SELECT * FROM users where id='$value3'";
$sql2="DELETE FROM final where email='$value2'";
$sql1="DELETE FROM users where id='$value3'";
if(!mysqli_query($con,$sql)){
	echo "<script>
alert('something went wrong please recheck the data!');
window.location.href='adminhomepage.php';
</script>";
}				  
else{
echo "<script>
alert('Account Rejected.Please continue');
</script>";
}
if(!mysqli_query($con,$sql1)){
	echo "<script>
alert('something went wrong please recheck the data!');
window.location.href='adminhomepage.php';
</script>";
session_start();
		     $_SESSION['id'] = $value3;
			header('location: adminhomepage.php');
}				  
else{
echo "<script>
alert('Account Rejected.Please continue');
</script>";
session_start();
		     $_SESSION['id'] = $value3;
			header('location: adminhomepage.php');
}

if(!mysqli_query($con,$sql2)){
	echo "<script>
alert('something went wrong please recheck the data!');
window.location.href='adminhomepage.php';
</script>";
session_start();
		     $_SESSION['id'] = $value3;
			header('location: adminhomepage.php');
}				  
else{
echo "<script>
alert('Account Rejected.Please continue');
</script>";
session_start();
		     $_SESSION['id'] = $value3;
			header('location: adminhomepage.php');
}

}




if(isset($_POST['Accept']))
{
list($value1,$value2,$value3,$value4,$value5) = explode('|', $_POST['Accept']);
$sql ="INSERT INTO activeusers SELECT * FROM users where id='$value2'";
$image='hello.png';
$sql2 = "INSERT INTO images(`name`,`regno`,`image`) VALUES ('$value4','$value5','$image')";
$sql1="DELETE FROM users where id='$value2'";


		// $email1=$value3;
  //       $to='badrinathbonthu04@gmail.com'; // Receiver Email ID, Replace with your email ID
		$email1='badrinathbonthu04@gmail.com';
		$to=$value3;
		$subject='Regarding Student Information System account activation';
		//$subject1='Reply for your complaint';
		$message="Your account has been approved by the admin";
		$headers="From: ".$email1;
		//mail($to, $subject, $message, $headers);
//|| !(mail($to, $subject, $message, $headers))

if(!mysqli_query($con,$sql) ){
	echo "<script>
alert('something went wrong please recheck the data!');
window.location.href='adminhomepage.php';
</script>";
}				  
else{

echo "<script>
alert('Successfully Approved. Please approve another');
</script>";
session_start();
		     $_SESSION['id'] = $value2;
			header('location: adminhomepage.php');
}

if(!mysqli_query($con,$sql1)){
	echo "<script>
alert('something went wrong please recheck the data!');
window.location.href='adminhomepage.php';
</script>";
}				  
else{
echo "<script>
alert('Successfully Approved. Please approve another');
</script>";
session_start();
		     $_SESSION['id'] = $value2;
			header('location: adminhomepage.php');
}

if(!mysqli_query($con,$sql2) ){
	echo "<script>
alert('something went wrong please recheck the data!');
window.location.href='adminhomepage.php';
</script>";
}				  
else{

echo "<script>
alert('Successfully Approved. Please approve another');
</script>";
session_start();
		     $_SESSION['id'] = $value2;
			header('location: adminhomepage.php');
}
}



//update edit details
if(isset($_POST['Save']))
{
	list($value1,$value2,$value3,$value4) = explode('|', $_POST['Save']);
$name = $_POST['name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$regno = $_POST['regno'];
$rollno = $_POST['rollno'];
$degree = $_POST['degree'];
$branch = $_POST['branch'];
//$yr_of_passing = $_POST['yr_of_passing'];
$email = $_POST['email'];
$contactno=$_POST['contactno'];




$fathername= $_POST['fathername'];
$mothername=$_POST['mothername'];
$nationality=$_POST['nationality'];
$mothertongue=$_POST['mothertongue'];
$presentaddress=$_POST['presentaddress'];
$permanentaddress=$_POST['permanentaddress'];
$hobbies=$_POST['hobbies'];
$tenthboardname=$_POST['tenthboardname'];
$tenthschoolname=$_POST['tenthschoolname'];
$tenthpercentage=$_POST['tenthpercentage'];
$tenthyr_of_passing=$_POST['tenthpassing'];
$twelvethboardname=$_POST['twelvethboardname'];
$twelvethinstitutename=$_POST['twelvethschoolname'];
$twelvethpercentage=$_POST['twelvethpercentage'];
$twelvethyr_of_passing=$_POST['twelvethpassing'];
$cgpa=$_POST['cgpa'];
$facebook=$_POST['facebook'];
$twitter=$_POST['twitter'];
$github=$_POST['github'];
$linkedin=$_POST['linkedin'];
$languages=$_POST['knownlanguages'];
$softskills=$_POST['softskills'];
$technicalskills=$_POST['technicalskills'];



$sql1="UPDATE `final` SET fathername='$fathername',mothername='$mothername',`nationality`='$nationality',`mothertongue`='$mothertongue',`presentaddress`='$presentaddress',`permanentaddress`='$permanentaddress',`hobbies`='$hobbies',`tenthboardname`='$tenthboardname',`tenthschoolname`='$tenthschoolname',`tenthpercentage`='$tenthpercentage',`tenthyr_of_passing`='$tenthyr_of_passing',`twelvethboardname`='$twelvethboardname',`twelvethinstitutename`='$twelvethinstitutename',`twelvethpercentage`='$twelvethpercentage',`twelvethyr_of_passing`='$twelvethyr_of_passing',`cgpa`='$cgpa',`fcebook`='$facebook',`twitter`='$twitter',`github`='$github',`linkedin`='$linkedin',`languages`='$languages',`softskills`='$softskills',`technicalskills`='$technicalskills' where regno='$value4' AND name='$value3' ";



 $sql ="UPDATE activeusers
SET name = '$name', dob= '$dob',gender='$gender',regno='$regno',rollno='$rollno',degree='$degree',branch='$branch',email='$email',contactno='$contactno' WHERE id='$value2'";
 // $password1=md5("SELECT password FROM activeusers where id='$value2'");
$results = mysqli_query($con, $sql);
 //$password1=$value3;

if(!mysqli_query($con,$sql) ){
	echo "<script>
alert('something wrong while updating...!');
</script>";
session_start();
 $_SESSION['regno'] = $regno;
		     header('location: homepage.php');
}				  
else{

echo "<script>
alert('Successfully updated.');
</script>";
session_start();
 $_SESSION['regno'] = $regno;
		    // $_SESSION['password']=$password1;
		     header('location: homepage.php');

}


if(!mysqli_query($con,$sql1) ){
	echo "<script>
alert('something wrong while updating...!');
</script>";
session_start();
 $_SESSION['regno'] = $regno;
		     header('location: homepage.php');
}	

else{
echo "<script>
alert('Successfully updated.');
</script>";
session_start();
 $_SESSION['regno'] = $regno;
		     header('location: homepage.php');
}
}



if(isset($_POST['completesubmit']))
{
	list($value1,$value2,$value3) = explode('|', $_POST['completesubmit']);
$fathername= $_POST['fathername'];
$mothername=$_POST['mothername'];
$nationality=$_POST['nationality'];
$mothertongue=$_POST['mothertongue'];
$presentaddress=$_POST['presentaddress'];
$permanentaddress=$_POST['permanentaddress'];
$hobbies=$_POST['hobbies'];
$tenthboardname=$_POST['tenthboardname'];
$tenthschoolname=$_POST['tenthschoolname'];
$tenthpercentage=$_POST['tenthpercentage'];
$tenthyr_of_passing=$_POST['tenthpassing'];
$twelvethboardname=$_POST['twelvethboardname'];
$twelvethinstitutename=$_POST['twelvethschoolname'];
$twelvethpercentage=$_POST['twelvethpercentage'];
$twelvethyr_of_passing=$_POST['twelvethpassing'];
$cgpa=$_POST['cgpa'];
$facebook=$_POST['facebook'];
$twitter=$_POST['twitter'];
$github=$_POST['github'];
$linkedin=$_POST['linkedin'];
$languages=$_POST['knownlanguages'];
$softskills=$_POST['softskills'];
$technicalskills=$_POST['technicalskills'];


 // $sql ="UPDATE `final` SET `fathername`='$fathername',`mothername`='$mothername',`nationality`='$nationality',`mothertongue`='$mothertongue',`presentaddress`='$presentaddress',`permanentaddress`='$permanentaddress',`hobbies`='$hobbies',`tenthboardname`=$tenthboardname,`tenthschoolname`='$tenthschoolname',`tenthpercentage`='$tenthpercentage',`tenthyr_of_passing`='$tenthyr_of_passing',`twelvethboardname`='$twelvethboardname',`twelvethinstitutename`='$twelvethinstitutename',`twelvethpercentage`='$twelvethpercentage',`twelvethyr_of_passing`='$twelvethyr_of_passing',`cgpa`='$cgpa',`fcebook`='$facebook',`twitter`='$twitter',`github`='$github',`linkedin`='$linkedin',`languages`='$languages',`softskills`='$softskills',`technicalskills`='$technicalskills' WHERE name='$value2' AND regno='$value3'";


$sql="UPDATE `final` SET fathername='$fathername',mothername='$mothername',`nationality`='$nationality',`mothertongue`='$mothertongue',`presentaddress`='$presentaddress',`permanentaddress`='$permanentaddress',`hobbies`='$hobbies',`tenthboardname`='$tenthboardname',`tenthschoolname`='$tenthschoolname',`tenthpercentage`='$tenthpercentage',`tenthyr_of_passing`='$tenthyr_of_passing',`twelvethboardname`='$twelvethboardname',`twelvethinstitutename`='$twelvethinstitutename',`twelvethpercentage`='$twelvethpercentage',`twelvethyr_of_passing`='$twelvethyr_of_passing',`cgpa`='$cgpa',`fcebook`='$facebook',`twitter`='$twitter',`github`='$github',`linkedin`='$linkedin',`languages`='$languages',`softskills`='$softskills',`technicalskills`='$technicalskills' where regno='$value3' AND name='$value2' ";

 // $password1=md5("SELECT password FROM activeusers where id='$value2'");
$results = mysqli_query($con, $sql);
 //$password1=$value3;
$regno=$value3;
if(!mysqli_query($con,$sql) ){
	echo "<script>
alert('something wrong while updating...!');
</script>";
session_start();
 $_SESSION['regno'] = $regno;
		     header('location: homepage.php');
}	

else{
echo "<script>
alert('Successfully updated.');
</script>";
session_start();
 $_SESSION['regno'] = $regno;
		     header('location: homepage.php');
}
}



if(isset($_POST['nextpassword']))
{
		list($value1,$value2) = explode('|', $_POST['nextpassword']);
		$sql="SELECT password FROM activeusers WHERE regno='$value2' ";


					// $sql="SELECT * from users where id=1";
					$result=$con->query($sql);

					if($result->num_rows >0)
					{
						while($row=$result->fetch_assoc())
						{
							
							$varpassword=$row["password"];
							
						}
					}
$password=md5($_POST['oldpassword']);


if ($varpassword==$password) {
	session_start();
 $_SESSION['regno'] = $value2;
		     header('location: homepage.php');
	//echo "correct";
	echo '<script type="text/javascript" src="script.js">',
     'jsfunction();',
     '</script>'
;
		

}
else {
		echo "wrong";
// echo "wrong";
// session_start();
//  $_SESSION['regno'] = $value2;
// 		     header('location: homepage.php');
}


}






if (isset($_POST['imgsubmit'])) {
	list($value1,$value2,$value3) = explode('|', $_POST['imgsubmit']);
  	// Get image name
  	$image = $_FILES['image']['name'];

  	// image file directory
  	$target = "images/".basename($image);
  	// execute query

  	$sql="UPDATE `images` SET `image`='$image' WHERE regno='$value3' AND name='$value2'";

 	
  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target) && mysqli_query($con, $sql)) {
  		$msg = "Image uploaded successfully";
  		session_start();
 			$_SESSION['regno'] = $value3;
		     header('location: homepage.php');
  	}
  	else{
  		$msg = "Failed to upload image";
 	session_start();
 			$_SESSION['regno'] = $value3;
		     header('location: homepage.php');
  	}
  }

?>


