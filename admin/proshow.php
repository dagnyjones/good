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
            
            $productID= $_GET['pro_id'];
            $sql = "SELECT * FROM product WHERE productID = '$productID'";
            $results = $conn -> query($sql);
            $final = $results -> fetch_assoc();
            ?>

            <h3> Name : <?php echo $final['name'] ?></h3>
            <hr><br>

            <h3> Price : $ <?php echo $final['price'] ?></h3>
            <hr><br>

            <h3> Description : <?php echo $final['description'] ?></h3>
            <hr><br>

            <img src="<?php echo $final['image'] ?> alt=" No File">




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