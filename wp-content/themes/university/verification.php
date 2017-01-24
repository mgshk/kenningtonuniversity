<?php
/*
  Template Name: verification
 */
?>

<?php get_header(); ?>

<!--banner-region-starts-->
<!-- <div id="inner-banner">
    <img src="<?php bloginfo('template_directory') ?>/img/banner1.jpg" alt="Banner" class="img-responsive">
</div> -->
<!--banner-region-ends-->


<!-- home content starts -->
<div class="container back">
    
    <div class="col-md-8 col-sm-7 col-xs-12 nopadding">
        <div class="home-left">

            <div class="heading">
                <h1>Verification</h1>
            </div>
            <p>To verify University of Kennington Graduates, kindly key in the Student Number. The Student Number is a six digit number provided by the University.
            <br><img src="<?php bloginfo('template_directory') ?>/img/verification.gif" alt="verification"></p>
            
            <div class="verify">
                <span>Student No:</span>
                <input type="text" class="studentno" id="studentno" placeholder="Student No">
                <button type="button" class="btn btn-primary">Verify</button>
            </div>

            <!--<p>If you do not remember the student number, please email the registrar at <b>registrar@kenningtonuniversity.co.uk</b>. Please include the following details.</p>
            <ul>
                <li>Full Name :</li>
                <li>National ID / Passport Num :</li>
                <li>Nationality :</li>
                <li>Awarded Degree :</li>
                <li>Program :</li>
                <li>Graduation :</li>
                <li>Certificate Number:</li>
            </ul>-->
        </div>    
    </div>

    <?php include('sidebar.php'); ?>

</div>
<!-- home content ends -->


<?php get_footer(); ?>