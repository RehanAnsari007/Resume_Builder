<?php

// $position = ['Not Given','Not Given','Not Given'];

$name = $_POST["name"];
$contact = $_POST["contact"];
$address = $_POST["address"];
$email = $_POST["email"];
$about = $_POST["about"];
$github = $_POST["github"];
$instagram = $_POST["instagram"];
$linkedin = $_POST["linked-in"];
$city = $_POST["city"];
$studied = $_POST["Studied"];
$occupation = $_POST["occupation"];
$position = $_POST["position"];
$workdate = $_POST["workdate1"];
$workabout = $_POST["workexperience"];

$education = $_POST["education"];
$university = $_POST["university"];
$cgpa = $_POST["cgpa"];
$edudate = $_POST["educationdate1"];
$eduabout = $_POST["educationabout"];


$skills = $_POST["skills"];
$objectives = $_POST["objectives"];

$images = $_FILES['profile'];

$imagename = $images['name'];
$imagepath = $images['tmp_name'];
$imageerror = $images['error'];

$achivements = $_FILES['images']['name'];
$filename = implode(",",$achivements);





if($imageerror == 0){
    $destfile = 'assets/profile/'.$imagename;
    move_uploaded_file($imagepath,$destfile);
}




foreach($_FILES['images']['name'] as $key=>$val){

    $destachive[] = 'assets/achivements/'.$val;
    
    move_uploaded_file($_FILES['images']['tmp_name'][$key],'assets/achivements/'.$val);

 
}

$insert_datap = implode(",", $position);
    
            $insert_dataWD = implode(",", $workdate);
         

            $insert_dataWA = implode(",", $workabout);
         

            $insert_dataEDU = implode(",", $education);
        

            $insert_dataUNI = implode(",", $university);
       

            $insert_datacgpa = implode(",", $cgpa);
        
            $insert_dataED = implode(",", $edudate);
        
            $insert_dataEA = implode(",", $eduabout);
         








?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume of <?php echo $name; ?></title>
        <link rel="icon" type="image/x-icon" href="../images/gethired.jpg" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400' rel='stylesheet' type='text/css'>


        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
<!-- build:js modernizr.touch.js -->
<script src="dist/lib/modernizr.touch.js"></script>
    <!-- endbuild -->

    <link href="index.css" rel="stylesheet">
    <!-- build:css mfb.css -->
    <link href="dist/mfb.css" rel="stylesheet">
    <!-- endbuild -->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
    <div id="divToPrint" style="display:none;">
  <div style="width:200px;height:300px;background-color:teal;">
           <?php echo $html; ?>      
  </div>
</div>
<script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=300,height=300');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>


        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none"><?php echo $name; ?></span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php  echo $destfile;  ?>" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        <?php echo $name; ?>
                        
                    </h1>
                    <div class="subheading" style="font-size:40px;" >
                        <?php echo $studied; ?> | <?php echo $occupation; ?> <br> <br> 
                    </div>
                    <div class="subheading mb-5">
                        <?php echo $address; ?> · <br> <?php echo $city; ?> <br> <br> <?php echo $contact; ?> ·<br>
                        <a href="https://www.mail.google.com"><?php echo $email; ?></a>
                    </div>
                   
                    <p class="lead mb-5"><?php echo $about; ?></p>
                    <div class="social-icons">
                        <a class="social-icon" href=<?php echo $linkedin; ?>><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href=<?php echo $github; ?>><i class="fab fa-github"></i></a>
                        <a class="social-icon" href=<?php echo $instagram; ?>><i class="fab fa-instagram"></i></a>
                        
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?php echo $position[0]; ?></h3> 
                            <div class="subheading mb-3"><?php  echo $workabout[0];  ?>.</div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?php echo $workdate[0]; ?> - Present</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                        <?php if (empty($position[1])) : ?>
                            <h3 class="mb-0">Data Not Given</h3>	
									<?php else : ?>
										
										<h3 class="mb-0"><?php echo $position[1]; ?></h3>
									<?php endif; ?>	

                                    <?php if (empty($workabout[1])) : ?>
                                        <div class="subheading mb-3">Data Not Given</div>
									<?php else : ?>
										
										<div class="subheading mb-3"><?php  echo $workabout[1];  ?>.</div>
									<?php endif; ?>	

                        </div>
                        <?php if (empty($workdate[1])) : ?>
                                        <div class="subheading mb-3">Data Not Given</div>
									<?php else : ?>
										<div class="flex-shrink-0"><span class="text-primary"><?php echo $workdate[1]; ?> - <?php echo $workdate[0]; ?></span></div>
									<?php endif; ?>	
                        
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                        <?php if (empty($position[2])) : ?>
                            <h3 class="mb-0">Data Not Given</h3>	
									<?php else : ?>
										
										<h3 class="mb-0"><?php echo $position[2]; ?></h3>
									<?php endif; ?>	

                                    <?php if (empty($workabout[2])) : ?>
                                        <div class="subheading mb-3">Data Not Given</div>
									<?php else : ?>
										
										<div class="subheading mb-3"><?php  echo $workabout[2];  ?>.</div>
									<?php endif; ?>	
                        </div>

                        <?php if (empty($workdate[2])) : ?>
                                        <div class="subheading mb-3">Data Not Given</div>
									<?php else : ?>
										<div class="flex-shrink-0"><span class="text-primary"><?php echo $workdate[2]; ?> - <?php echo $workdate[1]; ?></span></div>
										
									<?php endif; ?>	


                        
                    </div>
                  
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?php  echo $university[0];   ?></h3>
                            <div class="subheading mb-3"><?php  echo $education[0];  ?></div>
                            <div><?php  echo $eduabout[0];  ?></div>
                            <p><?php  echo $cgpa[0];  ?></p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?php   echo $edudate[0];   ?></span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                        <?php if (empty($university[1])) : ?>
                                        <div class="subheading mb-3">Data Not Given</div>
									<?php else : ?>
										
										<h3 class="mb-0"><?php  echo $university[1];   ?></h3>
									<?php endif; ?>	

                                    <?php if (empty($education[1])) : ?>
                                        
									<?php else : ?>
										
										<div class="subheading mb-3"><?php  echo $education[1];  ?></div>
									<?php endif; ?>	

                                    <?php if (empty($eduabout[1])) : ?>
                                        
									<?php else : ?>
										
										<div><?php  echo $eduabout[1];  ?></div>
									<?php endif; ?>	

                                    <?php if (empty($cgpa[1])) : ?>
                                        
									<?php else : ?>
										
										<p><?php  echo $cgpa[1];  ?></p>
									<?php endif; ?>	
                        </div>

                        <?php if (empty($edudate[1])) : ?>
                                        <div class="subheading mb-3">Data Not Given</div>
									<?php else : ?>
										
										<div class="flex-shrink-0"><span class="text-primary"><?php   echo $edudate[1];   ?></span></div>
									<?php endif; ?>	


                        
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3"><?php   echo $skills;   ?></div>
                   
                    <div class="subheading mb-3">Developed Skills / Sectors</div>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            <?php echo $position[0]; ?>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            <?php if (empty($position[1])) : ?>
                                <p class="content">Data Not Given</p>		
									<?php else : ?>
										
										<?php echo $position[1]; ?>
									<?php endif; ?>	
                            
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            <?php if (empty($position[2])) : ?>
                            <p class="content">Data Not Given</p>	
									<?php else : ?>
										
										<?php echo $position[2]; ?>
									<?php endif; ?>	
                        </li>
                    
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Interests</h2>
                    <p><?php  echo $objectives;  ?>.</p>
                    
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Awards & Certifications</h2>

                    <div class="image-grid">  
                        <img src="<?php echo $destachive[0];  ?>" alt="Not Uploaded" onerror=this.src="../images/no-image.png">
  
                        <img src="<?php echo $destachive[1];  ?>" alt="Not Uploaded" onerror=this.src="../images/no-image.png">
  
                        <img src="<?php echo $destachive[2];  ?>" alt="Not Uploaded" onerror=this.src="../images/no-image.png">
  
                       
                    </div>

                </div>
            </section>
            <br>
            <br>



            <form action="upload-resume.php" method="post" enctype="multipart/form-data">

             <ul id="menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
      <li class="mfb-component__wrap">
        <a href="#" class="mfb-component__button--main">
          <i class="mfb-component__main-icon--resting ion-plus-round"></i>
          <i class="mfb-component__main-icon--active ion-close-round"></i>
        </a>
        <ul class="mfb-component__list">
          <li>
            <a href="../homepage/index.html" data-mfb-label="GO BACK" class="mfb-component__button--child">
              <i class="mfb-component__child-icon ion-android-arrow-back"></i>
            </a>
          </li>
          <li>
            <a onclick="window.print();return false;" data-mfb-label="print my Resume" class="mfb-component__button--child">
              <i class="mfb-component__child-icon ion-android-print"></i>
            </a>
          </li>

          <li>
              
          <input  type="submit" name="submit"  data-mfb-label="Submit MY Resume" class="mfb-component__button--child">
              
    </input>
          </li>
        </ul>
      </li>
    </ul>

    
  <!-- build:js mfb.js -->
  <script src="dist/mfb.js"></script>
  <!-- endbuild -->
  <script>

    var panel = document.getElementById('panel'),
        menu = document.getElementById('menu'),
        showcode = document.getElementById('showcode'),
        selectFx = document.getElementById('selections-fx'),
        selectPos = document.getElementById('selections-pos'),
        // demo defaults
        effect = 'mfb-zoomin',
        pos = 'mfb-component--br';

    showcode.addEventListener('click', _toggleCode);
    selectFx.addEventListener('change', switchEffect);
    selectPos.addEventListener('change', switchPos);

    function _toggleCode() {
      panel.classList.toggle('viewCode');
    }

    function switchEffect(e){
      effect = this.options[this.selectedIndex].value;
      renderMenu();
    }

    function switchPos(e){
      pos = this.options[this.selectedIndex].value;
      renderMenu();
    }

    function renderMenu() {
      menu.style.display = 'none';
      // ?:-)
      setTimeout(function() {
        menu.style.display = 'block';
        menu.className = pos + effect;
      },1);
    }

  </script>


<input type="hidden" name="name" value="<?php echo $name; ?>">
<input type="hidden" name="contact" value="<?php echo $contact; ?>">
<input type="hidden" name="address" value="<?php echo $address; ?>">
<input type="hidden" name="email" value="<?php echo $email; ?>">
<input type="hidden" name="about" value="<?php echo $about; ?>">
<input type="hidden" name="github" value="<?php echo $github; ?>">
<input type="hidden" name="instagram" value="<?php echo $instagram; ?>">
<input type="hidden" name="linked-in" value="<?php echo $linkedin; ?>">
<input type="hidden" name="city" value="<?php echo $city; ?>">
<input type="hidden" name="Studied" value="<?php echo $studied; ?>">
<input type="hidden" name="occupation" value="<?php echo $occupation; ?>">

<input type="hidden" name="position" value="<?php echo $insert_datap; ?>">
<input type="hidden" name="workdate1" value="<?php echo $insert_dataWD; ?>">
<input type="hidden" name="workexperience" value="<?php echo $insert_dataWA; ?>">

<input type="hidden" name="education" value="<?php echo $insert_dataEDU; ?>">
<input type="hidden" name="university" value="<?php echo $insert_dataUNI; ?>">
<input type="hidden" name="cgpa" value="<?php echo $insert_datacgpa; ?>">
<input type="hidden" name="educationdate1" value="<?php echo $insert_dataED; ?>">
<input type="hidden" name="educationabout" value="<?php echo $insert_dataEA; ?>">

<input type="hidden" name="Skills" value="<?php echo $skills; ?>">
<input type="hidden" name="objectives" value="<?php echo $objectives; ?>">

<input type="hidden" name="destfile" value="<?php echo $destfile; ?>">
<input type="hidden" name="filename" value="<?php echo $filename; ?>">






    </form>
 

        

           
            <footer id="crt-footer" class="crt-container-lg">
<div class="crt-container">
<div class="crt-container-sm clear-mrg text-center">
<p>Get Hired Resume @ All Rights Reserved 2022</p>
</div>
</div>

</footer>

        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>