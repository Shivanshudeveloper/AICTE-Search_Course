<?php include 'includes/header.inc.php'; ?>

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="slider_text">
                            <h5 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">4536+ Courses listed</h5>
                            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">Find your Dream Course</h3>
                            <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">
                                SWAYAM, NPTEL, AICTE, UGC, OPEN SCHOOLING, NEAT, NDL
                            </p>
                            <!-- <div class="sldier_btn wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                                <a href="#" class="boxed-btn3">Upload your Resume</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- slider_area_end -->

    <!-- catagory_area -->
    <div class="catagory_area">
        <form method="POST">
        <div class="container">
        <p class="text-center h6">
            I am in:
        </p>
            <p class="text-center"> 
                <label class="h5"><input type="radio" name="educationType" value="Higher Education" checked>Higher Education</label> 
                <label style="margin-left: 4%" class="h5"><input type="radio" name="educationType" value="School">School</label>
            </p>
            <br>


            <div style="display: none;" id="search_form_schoolEducation" class="row cat_search">
                <div class="col-lg-4 col-md-4">
                    <div class="single_input">
                        <select class="wide" id="exampleFormControlSelect1">
                            <option selected>- SELECT CLASS -</option>
                            <option>5th</option>
                            <option>6th</option>
                            <option>7th</option>
                            <option>8th</option>
                            <option>9th</option>
                            <option>10th</option>
                            <option>11th</option>
                            <option>12th</option>
                        </select>
                    </div>
                </div>

                
                <div class="col-lg-4 col-md-4">
                    <div class="single_input">
                        <select class="wide" id="exampleFormControlSelect1">
                            <option selected>- Board -</option>
                            <option>CBSE</option>
                            <option>ICSE</option>
                            <option>IB</option>
                            <option>State board</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_input">
                        <select class="wide" id="exampleFormControlSelect1">
                            <option>- Subject -</option>
                            <option>Physics</option>
                            <option>Chemistry</option>
                            <option>Maths</option>
                            <option>Biology</option>
                            <option>Hindi</option>
                            <option>Sanskrit</option>
                            <option>Physical Education</option>
                        </select>
                    </div>
                </div>
            </div>

            <div id="search_form_higherEducation" class="row cat_search">
                <div class="col-lg-3 col-md-4">
                    <div class="single_input">
                        <select class="wide" id="exampleFormControlSelect1">
                            <option selected>- SELECT STREAM -</option>
                            <option>Diploma in Engineering</option>
                            <option>Post Diploma in Engineering</option>
                            <option>B-Tech</option>
                            <option>PG Diploma in Engineering</option>
                            <option>M-Tech</option>
                            <option>PG in Pharamacy</option>
                            <option>Diploma in Arch</option>
                            <option>PG in Arch</option>
                            <option>PG in Planning</option>
                            <option>Diploma in Applied Arts and Craft</option>
                            <option>Under Graduate Degree in Applied</option>
                            <option>PG Degree in apllied arts and Craft</option>
                            <option>BSc</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="single_input">
                        <?php include 'search_branch.php' ?>
                        <!-- <input type="text" placeholder="Search keyword"> -->
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4">
                    <div class="single_input">
                        <select class="wide" id="exampleFormControlSelect1">
                            <option selected>- Year -</option>
                            <option selected>1st Year</option>
                            <option>1st Year</option>
                            <option>2nd Year</option>
                            <option>3rd Year</option>
                            <option>4th Year</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="single_input">
                        <select class="wide" id="exampleFormControlSelect1">
                            <option>- Subject -</option>
                            <option>Computer Network</option>
                            <option>Data Structure</option>
                            <option>Algorithms</option>
                            <option>Neural Science</option>
                            <option>Company Law</option>
                            <option>Neural Science</option>
                            <option>Neural Science</option>
                        </select>
                    </div>
                </div>
            </div>
            <center>
                <div class="job_btn">
                    <button type="submit" name="find_btn" class="boxed-btn3 w-25">Find Course</button>
                </div>
            </center>
        </form>
            

            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="popular_search d-flex align-items-center">
                        <span>Popular Search:</span>
                        <ul>
                            <li><a href="#">Design & Creative</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Administration</a></li>
                            <li><a href="#">Teaching & Education</a></li>
                            <li><a href="#">Engineering</a></li>
                            <li><a href="#">Software & Web</a></li>
                            <li><a href="#">Telemarketing</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
<?php 
    if (isset($_POST['find_btn'])) {

?>




    <!-- featured_candidates_area_start  -->
    <div class="featured_candidates_area ">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-40">
                        <h3 class="mt-4">SWAYAM Website</h3>
                        <a href="#!" class="text-primary">
                            Visit the Website
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="candidate_active owl-carousel">
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                    </div>
                </div>
            </div>



            <div class="row mt-2">
                <div class="col-lg-12">
                    <div class="candidate_active owl-carousel">
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                    </div>
                </div>
            </div>


           
        </div>
    </div>
    <!-- featured_candidates_area_end  -->


    <!-- featured_candidates_area_start-->
    <div class="featured_candidates_area ">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-40">
                        <h3 class="mt-4">NPTEL Website</h3>
                        <a href="#!" class="text-primary">
                            Visit the Website
                        </a>
                    </div>
                </div>
            </div>
            

            <div class="row">
                <div class="col-lg-12">
                    <div class="candidate_active owl-carousel">
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                    </div>
                </div>
            </div>



            <div class="row mt-2">
                <div class="col-lg-12">
                    <div class="candidate_active owl-carousel">
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <!-- featured_candidates_area_end  -->



    <!-- featured_candidates_area_start-->
    <div class="featured_candidates_area ">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-40">
                        <h3 class="mt-4">AICTE Website</h3>
                        <a href="#!" class="text-primary">
                            Visit the Website
                        </a>
                    </div>
                </div>
            </div>
            

            <div class="row">
                <div class="col-lg-12">
                    <div class="candidate_active owl-carousel">
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                    </div>
                </div>
            </div>



            <div class="row mt-2">
                <div class="col-lg-12">
                    <div class="candidate_active owl-carousel">
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- featured_candidates_area_end  -->



    <!-- featured_candidates_area_start-->
    <div class="featured_candidates_area ">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-40">
                        <h3 class="mt-4">UGC Website</h3>
                        <a href="#!" class="text-primary">
                            Visit the Website
                        </a>
                    </div>
                </div>
            </div>
            

            <div class="row">
                <div class="col-lg-12">
                    <div class="candidate_active owl-carousel">
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                    </div>
                </div>
            </div>



            <div class="row mt-2">
                <div class="col-lg-12">
                    <div class="candidate_active owl-carousel">
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- featured_candidates_area_end  -->


    <!-- featured_candidates_area_start-->
    <div class="featured_candidates_area ">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-40">
                        <h3 class="mt-4">OPEN SCHOOLING</h3>
                        <a href="#!" class="text-primary">
                            Visit the Website
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="candidate_active owl-carousel">
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                    </div>
                </div>
            </div>



            <div class="row mt-2">
                <div class="col-lg-12">
                    <div class="candidate_active owl-carousel">
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- featured_candidates_area_end  -->




    <!-- featured_candidates_area_start-->
    <div class="featured_candidates_area ">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-40">
                        <h3 class="mt-4">NEAT Website</h3>
                        <a href="#!" class="text-primary">
                            Visit the Website
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="candidate_active owl-carousel">
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                    </div>
                </div>
            </div>



            <div class="row mt-2">
                <div class="col-lg-12">
                    <div class="candidate_active owl-carousel">
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- featured_candidates_area_end  -->


    <!-- featured_candidates_area_start-->
    <div class="featured_candidates_area ">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-40">
                        <h3 class="mt-4">NDL Website</h3>
                        <a href="#!" class="text-primary">
                            Visit the Website
                        </a>
                    </div>
                </div>
            </div>
            

            <div class="row">
                <div class="col-lg-12">
                    <div class="candidate_active owl-carousel">
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                    </div>
                </div>
            </div>



            <div class="row mt-2">
                <div class="col-lg-12">
                    <div class="candidate_active owl-carousel">
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>


                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                        <div class="text-center">
                            <!-- START -->
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        
                                    <div class="card mt-1 border-0" style="width: 16rem;">
                                        <div class="card-body">
                                            <div class="thumb">
                                                <center>
                                                    <img src="https://upload.wikimedia.org/wikipedia/en/b/b6/Graphic_Era_Hill_University_Logo.png" class="w-50" alt="">
                                                </center>
                                            </div>
                                            <h5 class="card-title mt-3 mb-3">Teacher 1</h5>
                                            <p class="text-dark">Software Engineer</p>
                                            <p class="card-text text-dark">
                                                Duration: 10h
                                                <br>
                                                Level: Intermediate
                                                <br>
                                                Language: python
                                                <br>
                                                Lab: Not Provided
                                            </p>
                                        </div>
                                    </div>

                                    </div>
                                    <div style="background-color: white !important;" class="back">
                                        <p class="mt-4">
                                            Duration: 10h
                                            <br>
                                            Level: Intermediate
                                            <br>
                                            Language: python
                                            <br>
                                            Lab: Not Provided
                                            <br>
                                            <a href="#" class="card-link">View</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- featured_candidates_area_end  -->
    <?php } ?>
    


    <?php include 'includes/footer.inc.php' ?>
    