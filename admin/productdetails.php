<!DOCTYPE html>
<html>

<?php 
    include ("adminincludes/session.php");
    include ("adminincludes/head.php");
    
?>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php 
 include ("adminincludes/header.php");
?>

    <?php
    include ("adminincludes/aside.php");
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> HOME</a></li>
          <li class="active">PRODUCT DETAILS</li>
        </ol>
      </section>



      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">

          <div class="col-sm-9">

            <?php
            include ('../includes/connect.php');
            
            $sql = "SELECT * FROM product";

            $results = $conn -> query($sql);
            while($final = $results -> fetch_assoc()){ ?>

            <a href="proshow.php?pro_id=<?php echo $final['productID']?>">

              <h3><?php echo $final['productID'] ?>: <?php echo $final['name'] ?></h3>
              <hr><br>

            </a>





            <?php
            }
            ?>


          </div>

        </div>

        <div class="col-sm-3">

        </div>

      </section>

      <!-- /.content -->
    </div>
    <?php
 include ("adminincludes/footer.php");
 ?>
</body>

</html>