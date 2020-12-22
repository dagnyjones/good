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
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>



      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-sm-3">

          </div>

          <div class="col-sm-6">
            <form role="form" action="producthandler.php" method="post" enctype="multipart/form-data">
              <h1>PRODUCTS</h1>

              <div class="box-body">

                <div class="form-group">
                  <label for="name">
                    Name
                  </label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Product Name" name="name">
                </div>

                <div class=" form-group">
                  <label for="price">
                    PRICE
                  </label>
                  <input type="text" class="form-control" id="price" placeholder="Price" name="price">
                </div>

                <div class="form-group">
                  <label for="image">
                    File input
                  </label>
                  <input type="file" id="image" name="file">
                </div>

                <div class="form-group">
                  <label for="description">
                    Description
                  </label>
                  <textarea id="description" class="form-control" rows="10" placeholder="Enter Description"
                    name="description"></textarea>
                </div>

                <div class="form-group">
                  <label for="category">
                    Category
                  </label>
                  <select id="category" name="category">
                    <?php
                    include ('../includes/connect.php');
                    $cat = 'SELECT * FROM categories';
                    $results = mysqli_query($conn, $cat);
                    while ($row = mysqli_fetch_assoc($results)){
                      echo "<option value=".$row['catID'].">".$row['name']."</option>";
                    }
                    ?>
                  </select>
                </div>


              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </section>
      <div class="col-sm-3">

      </div>
      <!-- /.content -->
    </div>
    <?php
 include ("adminincludes/footer.php");
 ?>
</body>

</html>