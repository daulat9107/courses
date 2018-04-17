<?php require '../app/init.php' ?>
<?php include DOCUMENT_ROOT.'template/header.php' ?>
<!-- top nav bar -->
  <?php include DOCUMENT_ROOT.'template/nav.php' ?>
<!-- end of nav -->
<!-- Container -->

<div class="container-fluid" role="main">

<?php include DOCUMENT_ROOT.'template/jumbotron.php' ?> 


<!-- row -->
    <div class="row">
    <!-- side bar -->
    <div class="col-sm-2">
        <?php include DOCUMENT_ROOT.'template/aside.php' ?>
	  </div>
	  <!-- end side -->
	  <!-- main content -->
      <div class="col-sm-10">
      <?php // include 'template/breadcrum.php' ?> 

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active"><a href="/courses.php">Courses</a></li>
          
        </ol>
      </nav>

      <div class="content">
        <h1>Main heading</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum fuga dicta hic necessitatibus perspiciatis sint dolorem voluptas fugit velit a!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet doloribus omnis aperiam reiciendis quos iusto et, hic impedit tempora atque quo repellendus voluptatem eaque a officia quam officiis numquam libero.</p>

        <h2>Sub Heading</h2>
        <div class="row">
          <div class="col-sm-4">
            <a href="#" class="display_block">Project 1</a>
            <img src="<?php echo WEB_ROOT; ?>images/project1.png" alt="Project one">
            <span class="display_block">1 course</span>
            <a href="#" class="display_block">View course</a>
          </div>
          <div class="col-sm-4">
            <a href="#" class="display_block">Project 2</a>
            <img src="<?php echo WEB_ROOT; ?>images/project1.png" alt="Project one">
            <span class="display_block">2 courses</span>
            <a href="#" class="display_block">View courses</a>
          </div>
          <div class="col-sm-4">
            <a href="#" class="display_block">Project 3</a>
            <img src="<?php echo WEB_ROOT; ?>images/project1.png" alt="Project one">
            <span class="display_block">3 courses</span>
            <a href="#" class="display_block">View courses</a>
          </div>
        </div>

      </div>


        
      
      
      </div>
      <!-- end of main content -->
    </div>
    <!-- End of row -->
<?php include DOCUMENT_ROOT.'template/container_footer.php' ?>
 </div> 
  <!-- End of Container  -->


<?php include DOCUMENT_ROOT.'template/footer.php' ?>
