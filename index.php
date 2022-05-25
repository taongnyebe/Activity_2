<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bio Data Form</title>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

  <link rel="stylesheet" href="./assets/css/index.css">
</head>
<body>
  <form action="./display.php" method="post" enctype="multipart/form-data">
    <div class="container">
      <div class="card">
        <div class="form">
          <div class="left-side">
            <div class="left-heading">
                <h3>Project Form</h3>
            </div>
            <div class="steps-content">
                <h3>Step <span class="step-number">1</span></h3>
                <p class="step-number-content active">Enter your personal information to get closer to companies.</p>
                <p class="step-number-content d-none">Get to know better by adding your diploma,certificate and education life.</p>
                <p class="step-number-content d-none">Help companies get to know you better by telling then about your past experiences.</p>
                <p class="step-number-content d-none">Help companies get to know you better by giving us person whom you trust.</p>
                <p class="step-number-content d-none">Add your profile piccture and let companies find youy fast.</p>
            </div>
            <ul class="progress-bar">
                <li class="active">Personal Information</li>
                <li>Education</li>
                <li>Work Experience</li>
                <li>Character Reference</li>
                <li>User Photo</li>
            </ul>
              
  
              
          </div>
          <div class="right-side">
            <div class="main included active">
                <small><i class="fa fa-smile-o"></i></small>
                <div class="text">
                  <h2>Your Personal Information</h2>
                  <p>Enter your personal information to get closer to copanies.</p>
                </div>
  
                <div class="input-text">
                  <div class="input-div">
                    <input name="name" id="name" type="text" required require >
                    <label>Name</label>
                  </div>
                </div>
  
                <div class="input-text">
                  <div class="exempted"> 
                    <label>Date of Birth</label>
                    <input name="DoB" id="DoB" type="date" require required>
                  </div>
                </div>
  
                <div class="input-text">
                  <div class="input-div">
                    <input name="religion" id="religion" type="text" required require >
                    <label>Religion</label>
                  </div>
                </div>
                
                <div class="input-text">
                  <div class="input-div">
                    <div class="input-div">
                      <select name="civil-status" id="civil-status" onchange="Change(this);" required require>
                        <option value="Single">Single</option>
                        <option value="Merried">Merried</option>
                        <option value="Widow/Widower">Widow/Widower</option>
                        <option value="Seperated">Seperated</option>
                      </select>
                    </div>
                  </div>
                  <div class="input-div">
                    <input name="age" id="age" type="number" required require>
                    <label>Age</label>
                  </div>
                </div>
  
                <div class="input-text">
                  <div class="input-div">
                    <input name="citizenship" id="citizenship" type="text" required require>
                    <label>Citizenship</la>
                  </div>
                  <div class="input-div">
                    <input name="PoB" id="PoB" type="text" required require>
                    <label>Place of Birth</la>
                  </div>
                </div>
  
                <div class="input-text">
                  
                  <div class="input-div">
                    <input name="weight" id="weight" type="number" required require>
                    <label>Weight</label>
                  </div>
                  <div class="input-div">
                    <input name="height" id="height" type="number" required require>
                    <label>Height</label>
                  </div>
                </div>
  
                <hr>
                <br>
  
                <h3>Parents</h3>
  
                <div class="input-text">
                  <div class="input-div">
                    <input name="NoF" id="NoF" type="text" required require >
                    <label>Name of Father</label>
                  </div>
                </div>
  
                <div class="input-text">
                  <div class="input-div">
                    <input name="NoM" id="NoM" type="text" required require >
                    <label>Name of Mother</label>
                  </div>
                </div>
  
                <div class="input-text">
                  <div class="input-div">
                    <input name="address" id="address" type="text" required require >
                    <label>Addressr</label>
                  </div>
                </div>
  
                <hr>
                <br>
  
                <h3>Address</h3>
  
                <div class="input-text">
                  <div class="input-div">
                    <input name="present-address" id="present-address" type="text" required require >
                    <label>Present Address</label>
                  </div>
                </div>
                
                <div class="input-text">
                  <div class="input-div">
                    <input name="permanent-address" id="permanent-address" type="text" required require >
                    <label>Permanent Address</label>
                  </div>
                </div>
  
                <hr>
                <br>
  
                <h3>Others</h3>
  
                <div class="input-text">
                  <div class="input-div">
                    <input name="person-notify" id="person-notify" type="text" required require >
                    <label>Person to be Notified</label>
                  </div>
                </div>
                
                <div class="buttons">
                    <button class="next_button">Next Step</button>
                </div>
  
            </div>
  
            <div class="main included">
                <small><i class="fa fa-smile-o"></i></small>
                <div class="text">
                    <h2>Education</h2>
                    <p>Inform companies about your education life.</p>
                </div>
  
                <br>
                <h3>Elementary</h3>
                <hr>
  
                <div class="input-text">
                    <div class="input-div">
                        <input name="e-school-name" id="e-school-name" type="text" required require>
                        <label>School Name</label>
                    </div>
                </div>
                <div class="input-text">
                    <div>
                        <label>Year Graduated</label>
                        <input name="e-year" id="e-year" type="date" required require>
                    </div>
                </div>
  
                <br>
                <h3>High School</h3>
                <hr>
  
                <div class="input-text">
                    <div class="input-div">
                        <input name="hs-school-name" id="hs-school-name" type="text" required require>
                        <label>School Name</label>
                    </div>
                </div>
                <div class="input-text">
                    <div>
                        <label>Year Graduated</label>
                        <input name="hs-year" id="hs-year" type="date" required require>
                    </div>
                </div>
  
                <br>
                <h3>College</h3>
                <hr>
  
                <div class="input-text">
                    <div class="input-div">
                        <input name="c-school-name" id="c-school-name" type="text" required require>
                        <label>School Name</label>
                    </div>
                </div>
                <div class="input-text">
                    <div>
                        <label>Year Graduated</label>
                        <input name="c-year" id="c-year" type="date" required require>
                    </div>
                </div>
                <div class="input-text">
                    <div class="input-div">
                        <input name="course" id="course" type="text" required require>
                        <label>Course</label>
                    </div>
                </div>
                <div class="input-text">
                    <div class="input-div">
                        <input name="special-skill" id="special-skill" type="text" required require>
                        <label>Special Skill</label>
                    </div>
                </div>
  
                <div class="buttons button_space">
                    <button class="back_button">Back</button>
                    <button class="next_button">Next Step</button>
                </div>
            </div>
  
            <div class="main">
                <small><i class="fa fa-smile-o"></i></small>
                <div class="text">
                    <h2>Work Experiences</h2>
                    <p>Can you talk about your past work experience?</p>
                </div>
  
                <br>
                <?php
                  for ($i=0; $i < 3; $i++) { 
                ?>
                <h3> Work <?php echo ($i + 1) ?></h3>
                <hr>
                <div class="input-text">
                    <div class="input-div">
                        <input name="company-name-<?php echo $i ?>" id="company-name-<?php echo $i ?>" type="text" <?php if($i < 1) echo "required require" ?>>
                        <label>Company Name</label>
                    </div>
                </div>
                <div class="input-text">
                    <div class="input-div">
                        <input name="position-<?php echo $i ?>" id="position-<?php echo $i ?>" type="text" <?php if($i < 1) echo "required require" ?>>
                        <label>Position</label>
                    </div>
                </div>
                <div class="input-text">
                    <div> 
                        <label>Year of Service</label>
                        <input name="service-<?php echo $i ?>" id="service-<?php echo $i ?>" type="date" <?php if($i < 1) echo "required require" ?>>
                    </div>
                </div>
  
                <?php
                  }
                ?>
  
                <div class="buttons button_space">
                    <button class="back_button">Back</button>
                    <button class="next_button">Next Step</button>
                </div>
            </div>
  
            <div class="main">
                <small><i class="fa fa-smile-o"></i></small>
                <div class="text">
                    <h2>Character Reference</h2>
                    <p>Can you give us person to cross reference?</p>
                </div>
  
                <br>
                <?php
                  for ($i=0; $i < 3; $i++) { 
                ?>
                <h3> Person <?php echo ($i + 1) ?></h3>
                <hr>
                <div class="input-text">
                    <div class="input-div">
                        <input name="person-name-<?php echo $i ?>" id="person-name-<?php echo $i ?>" type="text" <?php if($i < 1) echo "required require" ?>>
                        <label>Person Name</label>
                    </div>
                </div>
                <div class="input-text">
                    <div class="input-div">
                        <input name="c-position-<?php echo $i ?>" id="c-position-<?php echo $i ?>" type="text" <?php if($i < 1) echo "required require" ?>>
                        <label>Position</label>
                    </div>
                </div>
                <div class="input-text">
                    <div class="input-div">
                        <input name="contact-<?php echo $i ?>" id="contact-<?php echo $i ?>" type="number" <?php if($i < 1) echo "required require" ?>>
                        <label>Contact</label>
                    </div>
                </div>
                
  
                <?php
                  }
                ?>
  
                <div class="buttons button_space">
                    <button class="back_button">Back</button>
                    <button class="next_button">Next Step</button>
                </div>
            </div>
            
            
            
            <div class="main">
                <small><i class="fa fa-smile-o"></i></small>
                <div class="text">
                    <h2>User Photo</h2>
                    <p>Upload your profile picture and share yourself.</p>
                </div>

                <div>
                  <div>
                    <img src="./assets/img/image.png" alt="" srcset="" id="image" class="image">
                  </div>
                  <div class="p-1 text-center">
                    <input type="file" name="profile_img" onchange="readURL(this);" accept=".png,.jpg" require required>
                  </div>
                </div>

                <br><br><hr>
                
                <div class="input-div">
                  <h5 for="">Please Type <span class="confirm">"Confirm"</span> </h5>
                  <input type="text" name="" id="" require required>
                </div>

                <br>

                <div class="buttons button_space">
                    <button class="back_button">Back</button>
                    <button class="submit_button" name="submit">Submit</button>
                </div>
            </div>
          
  
          </div>
        </div>
      </div>
    </div>
  </form>

</body>
<script src="./assets/js/index.js"></script>
<script src="./assets/js/image_upload.js"></script>


</html>