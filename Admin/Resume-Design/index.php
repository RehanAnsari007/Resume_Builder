<?php   
include '../conn.php';
$ids = $_GET['id'];

$showquery = "select * from resumedetail where ID={$ids}";
$showdata = mysqli_query($conn,$showquery);
$arrdata = mysqli_fetch_array($showdata);

$position = $arrdata['position'];
$exp = explode(",", $position);

$workdate = $arrdata['workdate'];
$WD = explode(",", $workdate);

$workabout = $arrdata['workabout'];
$WA = explode(",", $workabout);

$edu = $arrdata['education'];
$EDU = explode(",", $edu);

$uni = $arrdata['university'];
$UNI = explode(",", $uni);

$cg = $arrdata['cgpa'];
$cgpa = explode(",", $cg);

$edudate = $arrdata['edudate'];
$EDUD = explode(",", $edudate);

$eduabout = $arrdata['eduabout'];
$EDUA = explode(",", $eduabout);

$ach = $arrdata['achivements'];
$achive = explode(",", $ach);








?>


<!DOCTYPE html>
<html>
<head>
	<title>Resume <?php echo $arrdata['name']; ?></title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script src="https://kit.fontawesome.com/7a5f11cf9f.js" crossorigin="anonymous"></script>
	<link rel="icon" type="image/jpeg" href="../../images/gethired.jpg" />

</head>
<body>


	<div class="wrapper">
		<div class="resume_design">
			<div class="resume_left">
				<div class="about_sec">
					<div class="button">About Me</div>
					<p><?php echo $arrdata['about']; ?></p>
				</div>
				<div class="exp_sec">
					<div class="button">Experience</div>
					<ul>
						<li>
							<div class="item">
								<div class="item_grp">
									<p class="title"><?php echo $exp[0]; ?></p>
									
									<span class="timeline"><?php echo $WD[0]; ?> - Present</span>
								</div>
								<p class="content"><?php echo $WA[0]; ?>.</p>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="item_grp">
								<?php if (empty($exp[1])) : ?>
										<p class="content">Data Not Given</p>	
									<?php else : ?>
										
										<p class="title"><?php echo $exp[1]; ?></p>	
									<?php endif; ?>	

									<?php if (empty($WD[1])) : ?>
										<p class="content">Data Not Given</p>	
									<?php else : ?>
										
										<span class="timeline"><?php echo $WD[1]; ?> - <?php echo $WD[0]; ?></span>
									<?php endif; ?>	
									
									
								</div>
								<?php if (empty($WA[1])) : ?>
										<p class="content">Data Not Given</p>	
									<?php else : ?>
										
										<p class="content"><?php echo $WA[1]; ?>.</p>
									<?php endif; ?>	
							</div>
						</li>
						<li>
							<div class="item">
								<div class="item_grp">

									<?php if (empty($exp[2])) : ?>
										<p class="content">Data Not Given</p>	
									<?php else : ?>
										
										<p class="title"><?php echo $exp[2]; ?></p>	
									<?php endif; ?>		
											
									<?php if (empty($WD[2])) : ?>
										
									<?php else : ?>
										
										<span class="timeline"><?php echo $WD[2]; ?></span>
									<?php endif; ?>

								</div>

								<?php if (empty($WA[2])) : ?>
											
									<?php else : ?>
										
										<p class="content"><?php echo $WA[2]; ?>.</p>
									<?php endif; ?>	
							</div>
						</li>
					</ul>
				</div>
				<div class="edu_sec">
					<div class="button">Education</div>
					<ul>
						<li>
							<div class="item">
								<div class="item_grp">
									<p class="title"><?php echo $EDU[0]; ?></p>
									<p class="sub_title"><?php echo $UNI[0]; ?></p>
									<p class="sub_title"><?php echo $cgpa[0]; ?></p>
									<span class="timeline"><?php echo $EDUD[0]; ?></span>
								</div>
								<p class="content"><?php echo $EDUA[0]; ?>.</p>
							</div>
						</li>
						<li>
						<div class="item">
								<div class="item_grp">
								<?php if (empty($EDU[1])) : ?>
										<p class="content">Data Not Given</p>	
									<?php else : ?>
										
										<p class="title"><?php echo $EDU[1]; ?></p>
									<?php endif; ?>	

									<?php if (empty($UNI[1])) : ?>
											
									<?php else : ?>
										
										<p class="sub_title"><?php echo $UNI[1]; ?></p>
									<?php endif; ?>	

									<?php if (empty($cgpa[1])) : ?>
											
									<?php else : ?>
										
										<p class="sub_title"><?php echo $cgpa[1]; ?></p>
									<?php endif; ?>	
									<?php if (empty($EDUD[1])) : ?>
										
									<?php else : ?>
										
										<span class="timeline"><?php echo $EDUD[1]; ?></span>
									<?php endif; ?>	
									
									
									
									
								</div>
								<?php if (empty($EDUA[1])) : ?>
											
									<?php else : ?>
										
										<p class="content"><?php echo $EDUA[1]; ?>.</p>
									<?php endif; ?>	
								
							</div>
						</li>
					</ul>
				</div>

				<div class="achievement_sec">
					<div class="button">Achievements</div>

					<div class="image-container">
						
						<div class="img_holder2">
						<img id="img1" src="../../Resume Page/assets/achivements/<?php     echo $achive[0];     ?>" alt="Not Uploaded" onerror=this.src="../../images/no-image.png">
					    </div>
				        
					
						<div class="img_holder2">
						<img id="img2" src="../../Resume Page/assets/achivements/<?php     echo $achive[1];     ?>" alt="Not Uploaded" onerror=this.src="../../images/no-image.png">
					    </div>
			

					</div>
					<div class="image-container">
						
						<div class="img_holder2">
						<img id="img1" src="../../Resume Page/assets/achivements/<?php     echo $achive[2];     ?>" alt="Not Uploaded" onerror=this.src="../../images/no-image.png">
					    </div>
				        
			

					</div>
					
				</div>









			</div>
			<div class="resume_right">
				<div class="profile_sec">
					<div class="img_holder">
						<img src="../../Resume Page/<?php     echo $arrdata['profilepic'];     ?>" alt="Not Uploaded" onerror=this.src="../../images/no-image.png">
					</div>
					<div class="profile_info">
						<p class="name"><?php     echo $arrdata['name'];     ?></p>

						
						<p class="role"><?php echo $arrdata['studies']; ?> | <?php echo $arrdata['occupation']; ?> <br> <br> </p>
					</div>
				</div>
				<div class="contact_sec">
					<div class="button">Contact US</div>
					<ul>
						<li class="item">
							<div class="icon">
								<i class="fas fa-phone"></i>
							</div>
							<div class="content">
								<p class="title">Phone</p>
								<p class="subtitle"><?php echo $arrdata['contact']; ?></p>
							</div>
						</li>
						<li class="item">
							<div class="icon">
								<i class="fas fa-envelope"></i>
							</div>
							<div class="content">
								<p class="title">Email</p>
								<p class="subtitle"><?php echo $arrdata['email']; ?></p>
							</div>
						</li>
						<li class="item">
							<div class="icon">
								<i class="fas fa-map-signs"></i>
							</div>
							<div class="content">
								<p class="title">Address</p>
								<p class="subtitle"><?php echo $arrdata['address']; ?></p>
							</div>
						</li>
						<li class="item">
							<div class="icon">
							<i class="fa-solid fa-city"></i>
							</div>
							<div class="content">
								<p class="title">City</p>
								<p class="subtitle"><?php echo $arrdata['city']; ?></p>
							</div>
						</li>

						<li class="item">
							<div class="icon">
								<i class="fa-brands fa-github"></i>
							</div>
							<div class="content">
								<p class="title">GitHub</p>
								<p class="subtitle"><?php echo $arrdata['githublink']; ?></p>
							</div>
						</li>

						<li class="item">
							<div class="icon">
								<i class="fa-brands fa-instagram"></i>
							</div>
							<div class="content">
								<p class="title">Instagram</p>
								<p class="subtitle"><?php echo $arrdata['instalink']; ?></p>
							</div>
						</li>

						<li class="item">
							<div class="icon">
							<i class="fa-brands fa-linkedin"></i>
							</div>
							<div class="content">
								<p class="title">linked in</p>
								<p class="subtitle"><?php echo $arrdata['linkedinlink']; ?></p>
							</div>
						</li>

					</ul>
				</div>
				<div class="skills_sec">
					<div class="button">Skills</div>
					<div class="content">
								<p class="title">Skills</p>
								<p class="subtitle"><?php echo $arrdata['skills']; ?></p></br></br>
							</div>
							<div class="content">
								<p class="title">objectives</p>
								<p class="subtitle"><?php echo $arrdata['objectives']; ?></p></br></br>
							</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>