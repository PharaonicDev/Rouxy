<!DOCTYPE html >
<html lang="en">
  <title>Rouxy</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="_/css/bootstrap.min.css"> 
   <link rel="stylesheet" type="text/css" href="css/mystyle.css">
   <body id="register">
    <section class="container">
       <div class="content row">
              <?php include"_/components/php/header.php"; ?>
            
                <section class="main col col-lg-8">
              <?php include"_/components/php/article-registrationform.php" ?>
              
            </section><!-- main-->
           <section class="sidebar col col-lg-4">
             <?php include"_/components/php/aside-register.php" ?>
              
              <?php include"_/components/php/aside-accordion.php" ?>
            </section ><!--sidebar-->
          </div><!--content -->
             <?php include"_/components/php/footer.php"; ?>
       </section><!--container -->
       
       <script src="_/js/jquery-3.1.1.min.js"></script>
       <script src="_/js/bootstrap.min.js"></script>
       <script src="js/myscript.js"></script>
   </body>
</html>