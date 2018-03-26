<?php include '../../app/init.php'; ?>
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
      <?php //include 'template/breadcrum.php' ?>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"><a href="/courses/public/">Home</a></li>
        </ol>
      </nav>
        
      <div class="content">
      
        
        event
      </div>
      
      </div>
      <!-- end of main content -->
    </div>
    <!-- End of row -->
<?php include DOCUMENT_ROOT.'template/container_footer.php' ?>
 </div> 
  <!-- End of Container  -->


<?php include DOCUMENT_ROOT.'template/footer.php' ?>
