<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php'?>
</head>
<body>

    <!-- top starts -->

    <?php include 'includes/top.php'?>
    


    <!-- nav starts -->

    
    <nav>
        <div class="center">
            <a href="index.php" class="logo">
                <img src="images/logo.png" alt="Aplus">
            </a>
            <ul>
                <li><a href="index.php#banner" class="active pointHome">Home</a ></li>
                <li><a href="index.php#services" class="pointService">Our Services</a ></li>
                <li><a href="index.php#courses" class="pointCourses">Courses</a ></li>
                <li><a href="index.php#about" class="pointAbout">About Us</a ></li>
                <li><a href="index.php#blogs" class="pointBlog">Blogs</a ></li>
                <li><a href="index.php#contact" class="pointContact">Contact Us</a ></li>
            </ul>
            <div class="second-down-lists">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </nav>
    <!-- nav ends -->


    <!-- second banner starts -->

   <div style="background:url('images/banner_1.jpg') center center no-repeat" class="second-banner">
       <div class="center">
           <h2>All Courses</h2>
         
       </div>
   </div>

   <!-- second banner ends -->

   <!-- courses start -->
   <div class="courses" id="courses">
        <div class="center">
            <h2>Our Courses</h2>

            <div class="filter">
                <div class="tabs category-container">
                    <button class="category-item act btn" id="all">All</button>
                    <button class="category-item btn" id="design">Design</button>
                    <button class="category-item btn" id="development">Development</button>
                    <button class="category-item btn" id="networking">Networking</button>
                </div>
            </div>

            <div class="cards">
                <div class="outer-sell-item design">
                    <div class="for-service-image">
                        <img src="images/img_1.jpg" alt="python">
                    </div>
                    <div class="for-service-description">
                        <h4>Graphics Designs</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et aperiam</p>
                        <span>
                            <i class="far fa-calendar-alt"></i> 18th Jun, 2019

                        </span>

                        <small>
                            <i class="fas fa-clock"></i> 12:00 pm
                        </small>

                        <a href="aboutCourse.php" class="btn btn--white btn--animated">Read more</a>
                    </div>
                </div>
                <div class="outer-sell-item development">
                    <strong>
                        On Going
                    </strong>
                    <div class="for-service-image">
                        <img src="images/img_2.jpg" alt="python">
                    </div>
                    <div class="for-service-description">
                        <h4>Web Development</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et aperiam</p>

                        <a href="#" class="btn btn--white btn--animated">Read more</a>
                    </div>
                </div>
                <div class="outer-sell-item networking">
                    <div class="for-service-image">
                        <img src="images/img_3.jpg" alt="python">
                    </div>
                    <div class="for-service-description">
                        <h4>Networking</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et aperiam</p>

                        <a href="#" class="btn btn--white btn--animated">Read more</a>
                    </div>
                </div>
                <div class="outer-sell-item design">
                    <div class="for-service-image">
                        <img src="images/img_1.jpg" alt="python">
                    </div>
                    <div class="for-service-description">
                        <h4>Graphics Designs</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et aperiam</p>

                        <a href="#" class="btn btn--white btn--animated">Read more</a>
                    </div>
                </div>
                <div class="outer-sell-item networking">
                    <div class="for-service-image">
                        <img src="images/img_3.jpg" alt="python">
                    </div>
                    <div class="for-service-description">
                        <h4>Networking</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et aperiam</p>

                        <a href="#" class="btn btn--white btn--animated">Read more</a>
                    </div>
                </div>
                <div class="outer-sell-item networking">
                    <div class="for-service-image">
                        <img src="images/img_3.jpg" alt="python">
                    </div>
                    <div class="for-service-description">
                        <h4>Networking</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et aperiam</p>

                        <a href="#" class="btn btn--white btn--animated">Read more</a>
                    </div>
                </div>
                <div class="outer-sell-item design">
                    <div class="for-service-image">
                        <img src="images/img_1.jpg" alt="python">
                    </div>
                    <div class="for-service-description">
                        <h4>Graphics Designs</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et aperiam</p>

                        <a href="#" class="btn btn--white btn--animated">Read more</a>
                    </div>
                </div>
               
                <div class="outer-sell-item networking">
                    <div class="for-service-image">
                        <img src="images/img_3.jpg" alt="python">
                    </div>
                    <div class="for-service-description">
                        <h4>Networking</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et aperiam</p>

                        <a href="#" class="btn btn--white btn--animated">Read more</a>
                    </div>
                </div>
                <div class="outer-sell-item design">
                    <div class="for-service-image">
                        <img src="images/img_1.jpg" alt="python">
                    </div>
                    <div class="for-service-description">
                        <h4>Graphics Designs</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et aperiam</p>

                        <a href="#" class="btn btn--white btn--animated">Read more</a>
                    </div>
                </div>
               
            </div>

          
        </div>
    </div>

    <!-- courses ends -->


    <!--  detail start -->

    <!-- contact us start -->


   <?php include 'includes/footer.php' ?>
   
    <!-- footer ends -->
    <script src="plugins/jquery.min.js"></script>
    <!-- <script src="plugins/aos.js"></script>
    <script src="plugins/swiper.min.js"></script> -->
    <script src="plugins/owl.carousel.min.js"></script>

    <script src="./js/indexTwo.js"></script>
    
</body>
</html>