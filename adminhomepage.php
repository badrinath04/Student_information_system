<?php
session_start();
 if(!isset($_SESSION['username']) && !isset($_SESSION['id'])) {
      header("Location: adminlogin.html");  
 }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student information system</title>
	<link type="text/css" href="style.css" rel="stylesheet">
</head>
<body>
	<div class="main">
		<div class="header">
		<h1>Admin Home page</h1>
		</div>
		<div class="topbut">
			<a href="adminlogin.html" onclick="<?php unset($_SESSION['id']);unset($_SESSION['username']);session_destroy(); ?>"><button class="logbut">Logout</button></a>
		</div>
		<!-- <img id="back-img" src="backg.jpeg" /> -->
		<div >

			<script type="text/javascript">
				function popup(){
				// 	if (document.getElementById('popup').style.display=="none") {
				// 	document.getElementById('popup').style.display="block";
				// 	//document.getElementById("popup").style.width = "25%";
				// 	}
				// else if (document.getElementById('popup').style.display=="block") {
				//  	document.getElementById('popup').style.display="none";
				//  	}
				document.getElementById("mysidenav").style.width="30%";

				}

				function popup1(){
					//document.getElementById("popup").style.width = "0%";
					document.getElementById('mysidenav').style.width="0%";
				}

				function next1() {
						document.getElementById('active').style.display="none";
                         document.getElementById('reject').style.display="none";
						 document.getElementById('feedback').style.display="none";
                         document.getElementById('wait').style.display="block";
									// body...
				}
				function next2(){

                         document.getElementById('reject').style.display="none";
						 document.getElementById('feedback').style.display="none";
                        document.getElementById('wait').style.display="none";
                         document.getElementById('active').style.display="block";
				}

				function next3(){
					document.getElementById('active').style.display="none";
                         document.getElementById('reject').style.display="none";
					document.getElementById('wait').style.display="none";
                         document.getElementById('feedback').style.display="block";
				}

				function next4(){
					 document.getElementById('feedback').style.display="none";
                        document.getElementById('wait').style.display="none";
                         document.getElementById('active').style.display="none";
                         document.getElementById('reject').style.display="block";
				}
			</script>
		<table class="table3" id="wait" style="display: block;overflow-y: auto;max-height: 450px;">
			<tr><td colspan="7" style="text-align: center;font-size: 25px;font-weight: bolder;border: 1px solid black;background-color:#E39320 ;border-radius: 5px;">Candidates to be approved</td></tr>
				<tr>
					<!-- <th>id</th> -->
					<th>Name</th>
					<th>email</th>
					<th>Gender</th>
					<th>MobileNo</th>

				</tr>
				 
				<?php
				 
					$conn=mysqli_connect("localhost","root","","student_information_system");
					if($conn->connect_error)
					{
						die("Connection failed:".$conn->connect_error);
					}
					
					$sql="SELECT * from users";
					$result=$conn->query($sql);

					if($result->num_rows >0)
					{
						while($row=$result->fetch_assoc())
						{$v=$row["id"];
							$v1=$row["email"];
							$var1=$row["name"];
							$var2=$row["dob"];
							$var3=$row["gender"];
							$var4=$row["regno"];
							$var5=$row["rollno"];
							$var6=$row["degree"];
							$var7=$row["branch"];
							$var8=$row["email"];
							$var9=$row["contactno"];
							echo"<tr><td>".$row["name"],"</td><td>".$row["email"]."</td><td>".$row["gender"],"</td><td>".$row["contactno"],"</td>";
							?>

							
							<form method="post" action="server.php" >
						<!-- <td> <input type="submit" value="View" class="accept" name="View" onclick="document.getElementById('model-wrapper').style.display='block'"></td> -->
						<td> <input type="submit" value="Accept | <?php echo $v ?> | <?php echo $v1 ?>|<?php echo $var1 ?>|<?php echo $var4 ?>" class="accept" name="Accept">  </td>
						<td><input type="submit" value="Reject | <?php echo $v ?> | <?php echo $v1 ?>" class="reject" name="Reject">
						</td> 
					</form>
					</tr>


				<!-- 	<div >
									<span class="close" onclick="popup1()">&times;</span>
									<table id=popup style="display: none;">
										<tr><td>Name  </td><td>:</td><td><?php echo $var1;?></td></tr>
			<tr><td>Date of Birth  </td><td>:</td><td><?php echo $var2;?></td></tr>
			<tr><td>Gender </td><td>:</td><td><?php echo $var3;?></td></tr>
			<tr><td>Registration Number  </td><td>:</td><td><?php echo $var4;?></td></tr>
			<tr><td>Roll No  </td><td>:</td><td><?php echo $var5;?></td></tr>
			<tr><td>Degree  </td><td>:</td><td><?php echo $var6;?></td></tr>
			<tr><td>Branch  </td><td>:</td><td><?php echo $var7;?></td></tr>
			<tr><td>Email-Id  </td><td>:</td><td><?php echo $v1;?></td></tr>
			<tr><td>Contact No  </td><td>:</td><td><?php echo $var9;?></td></tr>
									</table>
								</div> -->

					<?php

				
				
						}
				
					}
					else
					{
						echo "0 result";
					}
					$conn->close();
					
				?>
			</table>
<!-- <div id="model-wrapper" class="modal">
	<form class="modal-content animate">
	<div class="imgcontainer"><span onclick="document.getElementById('model-wrapper').style.display='none'" class="close1"><p>Hello</p></span></div>
	</form>
</div>
<script>var modal=document.getElementById('model-wrapper');
		window.onclick=function(event){
			if (event.target==modal) {
				modal.style.display='none';
			}
		}
 </script> -->
<!-- 
            <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="popup1()">
                <h1>&times;</h1>
            </a> -->


<table id="active" style="display: none;position: absolute;left: 350px;overflow-y: auto;max-height: 450px;">
	<tr><td colspan="5" style="text-align: center;font-size: 25px;font-weight: bolder;border: 1px solid black;background-color:#E39320 ;border-radius: 5px;">Approved Candidates</td></tr>
				<tr>
					<!-- <th>id</th> -->
					<th>Name</th>
					<th>email</th>
					<th>Gender</th>
					<th>MobileNo</th>

				</tr>
				 
				<?php
				 
					$conn=mysqli_connect("localhost","root","","student_information_system");
					if($conn->connect_error)
					{
						die("Connection failed:".$conn->connect_error);
					}
					
					$sql="SELECT * from activeusers";
					$result=$conn->query($sql);

					if($result->num_rows >0)
					{
						while($row=$result->fetch_assoc())
						{
							echo"<tr><td>".$row["name"],"</td><td>".$row["email"]."</td><td>".$row["gender"],"</td><td>".$row["contactno"],"</td>";
							?>
							
					</tr>

					<?php

				
				
						}
					//echo "</table>";
					}
					else
					{
						echo "0 result";
					}
					$conn->close();
					
				?>
			</table>



<table id="reject" style="display: none;position: absolute;left: 400px;overflow-y: auto;max-height: 450px;">
	<tr><td colspan="5" style="text-align: center;font-size: 25px;font-weight: bolder;border: 1px solid black;background-color:#E39320 ;border-radius: 5px;">Rejected Candidates</td></tr>
				<tr>
					<!-- <th>id</th> -->
					<th>name</th>
					<th>email</th>
					<th>Gender</th>
					<th>MobileNo</th>

				</tr>
				 
				<?php
				 
					$conn=mysqli_connect("localhost","root","","student_information_system");
					if($conn->connect_error)
					{
						die("Connection failed:".$conn->connect_error);
					}
					
					$sql="SELECT * from rejectedusers";
					$result=$conn->query($sql);

					if($result->num_rows >0)
					{
						while($row=$result->fetch_assoc())
						{
							echo"<tr><td>".$row["name"],"</td><td>".$row["email"]."</td><td>".$row["gender"],"</td><td>".$row["contactno"],"</td>";
							?>
							
					</tr>

					<?php

				
				
						}
					//echo "</table>";
					}
					else
					{
						echo "0 result";
					}
					$conn->close();
					
				?>
			</table>




			<table  style="display: none;position: absolute;left: 300px;overflow-y: auto;max-height: 450px;" id="feedback">

				<tr><td colspan="4" style="text-align: center;font-size: 25px;font-weight: bolder;border: 1px solid black;background-color:#E39320 ;border-radius: 5px;">Feedback</td></tr>
				<tr >
				<!-- 	<th>id</th> -->
					<th>name</th>
					<th>email</th>
					<th>Feedback</th>

				</tr>
			 
				<?php
				 
					$conn=mysqli_connect("localhost","root","","student_information_system");
					if($conn->connect_error)
					{
						die("Connection failed:".$conn->connect_error);
					}
					
					$sql="SELECT * from feedback";
					$result=$conn->query($sql);

					if($result->num_rows >0)
					{
						while($row=$result->fetch_assoc())
						{
							echo"<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["feedback"]."</td>";
							?>
					</tr>

					<?php

				
				
						}
					//echo "</table>";
					}
					else
					{
						echo "0 result";
					}
					$conn->close();
					
				?>
			</table>

			<div class="bar">
			<ul>
				
				<li><a href="#" onclick="next1()"> Home</a></li>
				<li><a href="#" onclick="next2()">Active Users </a></li>
				<li><a href="#" onclick="next4()">Rejected Users</a></li>
				<li><a href="#" onclick="next3()">Feedback</a></li>
			</ul>
		</div>
		</div>
	</div>
</body>
</htm