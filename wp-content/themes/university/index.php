<?php get_header(); ?>

<!-- banner starts -->
<div class="container banner">
    <ul class="bxslider">
        <li><img src="<?php bloginfo('template_directory') ?>/img/banner1.jpg" alt="banner1" /></li>
        <li><img src="<?php bloginfo('template_directory') ?>/img/banner2.jpg" alt="banner1" /></li>
        <li><img src="<?php bloginfo('template_directory') ?>/img/banner3.jpg" alt="banner1" /></li>
        <li><img src="<?php bloginfo('template_directory') ?>/img/banner4.jpg" alt="banner1" /></li>
    </ul>
</div>
<!-- banner ends -->

<!-- home content starts -->
<div class="container back">
    
    <div class="col-md-8 col-sm-7 col-xs-12 nopadding">
        <div class="home-left">
            <div class="heading">
                <h1>Programs</h1>
            </div>

            <p class="textindent">University of Kennington offers an extensive range of online degree 
programs in many of today's most in-demand fields. Below are the details of the accredited programs at University of Kennington.</p>
            <h2>Degree Programs</h2>
            <ul>
                <li>Bachelor's Degree</li>
                <li>Associate Degree</li>
                <li>Master's Degree</li>
                <li>Doctorate Degree</li>
            </ul>
            <h2>Diploma & Certificate Programs</h2>
            <ul>
                <li>Undergraduate Diploma</li>
                <li>Undergraduate Certificate</li>
                <li>Undergraduate Course Certificate</li>
                <li>Graduate Diploma</li>
                <li>Graduate Certificate</li>
                <li>Graduate Course Certificate</li>
            </ul>

            <div class="heading marginTop">
                <h1>Schools & Majors</h1>
            </div>

            <p class="textindent">University of Kennington is one the most prestigious and accredited online 
learning institutes that offer a wide variety of majors that are specifically designed for professionals and working adults.</p>
            <p>The Schools and Majors cover all the top choices of students and employers across the globe.</p>
            <h2>Our Schools</h2>
            <ul>
                <li><a href="http://kenningtonuniversity.co.uk/programs/school-of-architecture/">Architecture & Design</a></li>
                <li><a href="http://kenningtonuniversity.co.uk/programs/school-of-business-administration/">Business Administration</a></li>
                <li><a href="http://kenningtonuniversity.co.uk/programs/school-of-engineering/">Engineering</a></li>
                <li><a href="http://kenningtonuniversity.co.uk/programs/school-of-communication/">Communication</a></li>
                <li><a href="http://kenningtonuniversity.co.uk/programs/school-of-hospitality/">Hospitality</a></li>
                <li><a href="http://kenningtonuniversity.co.uk/programs/school-of-information-technology/">Information Technology </a></li>
            </ul>

        </div>    
    </div>

   <?php include('sidebar.php'); ?>

</div>
<!-- home content ends -->

<?php get_footer(); ?>