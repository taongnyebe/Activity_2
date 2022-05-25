<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bio Data</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"/>
    </noscript>
    <link href="test/css/font-awesome/css/all.min.css?ver=1.2.1" rel="stylesheet">
    <link href="test/css/mdb.min.css?ver=1.2.1" rel="stylesheet">
    <link href="test/css/aos.css?ver=1.2.1" rel="stylesheet">
    <link href="test/css/main.css?ver=1.2.1" rel="stylesheet">
    <noscript>
      <style type="test/text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>
  <body class="bg-light" id="top">
    <header class="d-print-none">
      <div class="container text-center text-lg-left">
        <div class="pt-4 clearfix">
          <h1 class="site-title mb-0"><?php echo $_POST["name"] ?></h1>
          <div class="site-nav"> 
            <nav role="navigation">
              <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href="#about" title="About"><span class="menu-title">About</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#education" title="Education"><span class="menu-title">Education</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#experience" title="Experience"><span class="menu-title">Experience</span></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <div class="page-content">
      <div class="container">
<div class="resume-container">
  <div class="shadow-1-strong bg-white my-5" id="intro">
    <div class="bg-info text-white">
      <div class="cover bg-image"><img src="test/images/header-background.jpg"/>
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);backdrop-filter: blur(2px);">
          <div class="text-center p-5">
            <div class="avatar p-1"><img class="img-thumbnail shadow-2-strong" src="
            <?php 
             $profile_img = $_FILES['profile_img']['name'];
             $source_path = $_FILES['profile_img']['tmp_name'];
             $var = explode(".", $profile_img);
             $new_profile_img = "Profile_Image.".end($var);
             $destination_path = './assets/img/'.$profile_img;
             move_uploaded_file($source_path, $destination_path);
             echo $destination_path;
            ?>" width="160" height="160"/></div>
            <div class="header-bio mt-3">
              <div data-aos="zoom-in" data-aos-delay="0">
                <h2 class="h1"><?php echo $_POST["name"] ?></h2>
              </div>
              <div class="header-social mb-3 d-print-none" data-aos="zoom-in" data-aos-delay="200">
                <nav role="navigation">
                  <ul class="nav justify-content-center">
                    <li class="nav-item"><a class="nav-link" href="" title="Twitter"><i class="fab fa-twitter"></i><span class="menu-title sr-only">Twitter</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="" title="Instagram"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="" title="Github"><i class="fab fa-github"></i><span class="menu-title sr-only">Github</span></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="shadow-1-strong bg-white my-5 p-5" id="about">
    <div class="about-section">
      <div class="row">
      <h2 class="h2 fw-light mb-4">About Me</h2>
        <div class="col">
          <div class="row mt-2">
            <div class="col-sm-5">
              <div class="pb-2 fw-bolder"><i class="far fa-calendar-alt pe-2 text-muted" style="width:24px;opacity:0.85;"></i> Age</div>
            </div>
            <div class="col-sm-7">
              <div class="pb-2"><?php echo $_POST['age'] ?></div>
            </div>
            <div class="col-sm-5">
              <div class="pb-2 fw-bolder"><i class="fas fa-baby pe-2 text-muted" style="width:24px;opacity:0.85;"></i> Place of Birth</div>
            </div>
            <div class="col-sm-7">
              <div class="pb-2"><?php echo $_POST['PoB'] ?></div>
            </div>
            <div class="col-sm-5">
              <div class="pb-2 fw-bolder"><i class="fab fa-skype pe-2 text-muted" style="width:24px;opacity:0.85;"></i> Citizenship</div>
            </div>
            <div class="col-sm-7">
              <div class="pb-2"><?php echo $_POST['citizenship'] ?></div>
            </div>
            <div class="col-sm-5">
              <div class="pb-2 fw-bolder"><i class="fas fa-pencil-ruler pe-2 text-muted" style="width:24px;opacity:0.85;"></i> Weight</div>
            </div>
            <div class="col-sm-7">
              <div class="pb-2"><?php echo $_POST['weight'] ?></div>
            </div>
            <div class="col-sm-5">
              <div class="pb-2 fw-bolder"><i class="fas fa-map-marker-alt pe-2 text-muted" style="width:24px;opacity:0.85;"></i> Father</div>
            </div>
            <div class="col-sm-7">
              <div class="pb-2"><?php echo $_POST['NoF'] ?></div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="row mt-2">
            <div class="col-sm-5">
              <div class="pb-2 fw-bolder"><i class="far fa-calendar-alt pe-2 text-muted" style="width:24px;opacity:0.85;"></i> Date of Birth</div>
            </div>
            <div class="col-sm-7">
              <div class="pb-2"><?php echo $_POST['DoB']?></div>
            </div>
            <div class="col-sm-5">
              <div class="pb-2 fw-bolder"><i class="far fa-envelope pe-2 text-muted" style="width:24px;opacity:0.85;"></i> Civil Status</div>
            </div>
            <div class="col-sm-7">
              <div class="pb-2"><?php echo $_POST['civil-status'] ?></div>
            </div>
            <div class="col-sm-5">
              <div class="pb-2 fw-bolder"><i class="fas fa-warehouse pe-2 text-muted" style="width:24px;opacity:0.85;"></i> Religion</div>
            </div>
            <div class="col-sm-7">
              <div class="pb-2"><?php echo $_POST['religion'] ?></div>
            </div>
            <div class="col-sm-5">
              <div class="pb-2 fw-bolder"><i class="fas fa-pencil-ruler pe-2 text-muted" style="width:24px;opacity:0.85;"></i> Height</div>
            </div>
            <div class="col-sm-7">
              <div class="pb-2"><?php echo $_POST['height'] ?></div>
            </div>
            <div class="col-sm-5">
              <div class="pb-2 fw-bolder"><i class="fas fa-map-marker-alt pe-2 text-muted" style="width:24px;opacity:0.85;"></i> Mother</div>
            </div>
            <div class="col-sm-7">
              <div class="pb-2"><?php echo $_POST['NoM'] ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="shadow-1-strong bg-white my-5 p-5" id="education">
    <div class="education-section">
      <h2 class="h2 fw-light mb-4">Education</h2>
      <div class="timeline">
        <div class="timeline-card timeline-card-success" data-aos="fade-in" data-aos-delay="0">
          <div class="timeline-head px-4 pt-3">
            <div class="h5"><?php echo $_POST['e-school-name'] ?></div>
          </div>
          <div class="timeline-body px-4 pb-4">
            <div class="text-muted text-small mb-3">Graduated in <?php echo substr($_POST['e-year'], 0, 4);?></div>
          </div>
        </div>
        <div class="timeline-card timeline-card-success" data-aos="fade-in" data-aos-delay="200">
          <div class="timeline-head px-4 pt-3">
            <div class="h5"><?php echo $_POST['hs-school-name'] ?></div>
          </div>
          <div class="timeline-body px-4 pb-4">
            <div class="text-muted text-small mb-3">Graduated in <?php echo substr($_POST['e-year'], 0, 4);?></div>
          </div>
        </div>
        <div class="timeline-card timeline-card-success" data-aos="fade-in" data-aos-delay="400">
          <div class="timeline-head px-4 pt-3">
            <div class="h5"><?php echo $_POST['c-school-name'] ?></div>
          </div>
          <div class="timeline-body px-4 pb-4">
            <div class="text-muted text-small mb-3">Graduated in <?php echo substr($_POST['e-year'], 0, 4);?></div>
            <div>With a degree of <strong><?php echo $_POST['course'] ?></strong> and has s special skill of <?php echo $_POST['special-skill'] ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="shadow-1-strong bg-white my-5 p-5" id="experience">
    <div class="work-experience-section">
      <h2 class="h2 fw-light mb-4">Work Experience</h2>
      <div class="timeline">
        <?php for ($i=0; $i < 3; $i++) { ?>
        <div class="timeline-card timeline-card-info" data-aos="fade-in" data-aos-delay="0">
          <div class="timeline-head px-4 pt-3">
            <div class="h5"><?php echo $_POST['position-'.$i] ?> <span class="text-muted h6">at <?php echo $_POST['company-name-'.$i] ?></span></div>
          </div>
          <div class="timeline-body px-4 pb-4">
            <div class="text-muted text-small mb-3"><?php echo $_POST['service-'.$i] ?></div>
            <div>Can Call <?php echo $_POST['person-name-'.$i] ?>, <?php echo $_POST['c-position-'.$i] ?>. (<?php echo $_POST['contact-'.$i] ?>)</div>
          </div>
        </div>
        <?php } ?>
        
      </div>
    </div>
  </div>
</div>
      </div></div>

  </div>
    <footer class="pt-4 pb-4 text-muted text-center d-print-none">
      <div class="container">
        <div class="my-3">
          <div class="h4"><?php echo $_POST["name"] ?></div>
          <div class="footer-nav">
            <nav role="navigation">
              <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href="" title="Twitter"><i class="fab fa-twitter"></i><span class="menu-title sr-only">Twitter</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="" title="Instagram"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="" title="Github"><i class="fab fa-github"></i><span class="menu-title sr-only">Github</span></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </footer>
      </div>
    <script src="test/scripts/mdb.min.js?ver=1.2.1"></script>
    <script src="test/scripts/aos.js?ver=1.2.1"></script>
    <script src="test/scripts/main.js?ver=1.2.1"></script>
  </body>
</html>