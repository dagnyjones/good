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
            <form role="form" action="cathandler.php" method="post">
              <h1>CATEGORIES</h1>
              <div class="box-body">
                <div class="form-group">
                  <label for="category">
                    Categories
                  </label>
                  <input type="text" class="form-control" id="category" placeholder="Enter Category" name="name">
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